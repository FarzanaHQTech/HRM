<?php
class GoalStatuController extends Controller{
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
			$goalstatu=new GoalStatu();
		$goalstatu->name=$data["name"];

			$goalstatu->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Goals",GoalStatu::find($id));
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
			$goalstatu=new GoalStatu();
			$goalstatu->id=$data["id"];
		$goalstatu->name=$data["name"];

		$goalstatu->update();
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
		GoalStatu::delete($id);
		redirect();
	}
	public function show($id){
		view("Goals",GoalStatu::find($id));
	}
}
?>
