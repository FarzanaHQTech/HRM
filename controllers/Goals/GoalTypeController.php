<?php
class GoalTypeController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Goals");
	}
	public function create(){
		view("Goals");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$goaltype=new GoalType();
		$goaltype->name=$data["name"];

			$goaltype->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Goals",GoalType::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$goaltype=new GoalType();
			$goaltype->id=$data["id"];
		$goaltype->name=$data["name"];

		$goaltype->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Goals");
	}
	public function delete($id){
		GoalType::delete($id);
		redirect();
	}
	public function show($id){
		view("Goals",GoalType::find($id));
	}
}
?>
