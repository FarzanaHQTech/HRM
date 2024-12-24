<?php
class AttendanceStatuController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Attendance");
	}
	public function create(){
		view("Attendance");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatusName"])){
		$errors["status_name"]="Invalid status_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}

*/
		if(count($errors)==0){
			$attendancestatu=new AttendanceStatu();
		$attendancestatu->status_name=$data["status_name"];
		$attendancestatu->description=$data["description"];

			$attendancestatu->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Attendance",AttendanceStatu::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatusName"])){
		$errors["status_name"]="Invalid status_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}

*/
		if(count($errors)==0){
			$attendancestatu=new AttendanceStatu();
			$attendancestatu->id=$data["id"];
		$attendancestatu->status_name=$data["status_name"];
		$attendancestatu->description=$data["description"];

		$attendancestatu->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Attendance");
	}
	public function delete($id){
		AttendanceStatu::delete($id);
		redirect();
	}
	public function show($id){
		view("Attendance",AttendanceStatu::find($id));
	}
}
?>
