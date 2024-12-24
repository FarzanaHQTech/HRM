<?php
class ProvidentTypeController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Provident");
	}
	public function create(){
		view("Provident");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTypeName"])){
		$errors["type_name"]="Invalid type_name";
	}

*/
		if(count($errors)==0){
			$providenttype=new ProvidentType();
		$providenttype->type_name=$data["type_name"];

			$providenttype->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Provident",ProvidentType::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTypeName"])){
		$errors["type_name"]="Invalid type_name";
	}

*/
		if(count($errors)==0){
			$providenttype=new ProvidentType();
			$providenttype->id=$data["id"];
		$providenttype->type_name=$data["type_name"];

		$providenttype->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Provident");
	}
	public function delete($id){
		ProvidentType::delete($id);
		redirect();
	}
	public function show($id){
		view("Provident",ProvidentType::find($id));
	}
}
?>
