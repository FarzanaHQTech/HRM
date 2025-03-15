<?php

class UserApi extends Api
{
	public function __construct()
	{

		if (!$this->authorized()) {

			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				http_response_code(401); //Not Authorized
				die("401 Unauthorized");
			}
		}
	}
	function index()
	{

		echo json_encode(["users" => User::display(), "auth" => $this->authorized()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["users" => User::pagination($page, $perpage), "total_records" => User::count()]);
	}

	function search($data)
	{

		echo json_encode(["user" => User::search($data["name"])]);
	}
}
