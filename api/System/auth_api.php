<?php

class AuthApi extends Api
{

    function __construct()
    {

        // if(!$this->authenticated()){
        //      http_response_code(400);
        // }
    }
    //----Mange-----
    function index()
    {

        //echo "Index";
        // view("system");
    }



    function valid($data)
    {

        $jwt = new JWT();
        if ($jwt->is_valid($data["token"])) {
            echo "valid";
        } else {
            echo "invalid";
        }
    }

    function login($data)
    {

        global $db;
        global $tx;

        $username = trim($data["username"]);
        $password = trim($data["password"]);
        $result = $db->query("select u.id,u.username,u.password,u.email,u.mobile,u.role_id,r.role_name role from users u,roles r where r.id=u.role_id and u.username='$username' and u.inactive=0");

        $user = $result->fetch_object();

        if ($user) {

            $jwt = new JWT();
            $jwt->min = 5;
            $payload = [
                "id" => $user->id,
                "username" => $user->username,
                "role_id" => $user->role_id,
                "email" => $user->email,
                "ip" => get_ip(),
                "iss" => "jwt.server",
                "aud" => "intels.co"
            ];

            $token = $jwt->generate($payload);

            echo json_encode(["success" => 1, "token" => $token]);
        } else {
            echo json_encode(["success" => 0, "username" => $username, "password" => $password]);
        }
    }
}
