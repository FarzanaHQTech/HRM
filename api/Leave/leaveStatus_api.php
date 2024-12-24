<?php

class LeaveStatusApi{
    // function index(){
    //     echo "tested";
    // }
    function search(){
        echo json_encode([
            "id"=> Request::search($_GET['status'])

        ]);
        // echo "search";
    }
}