<?php
class TrainingTypeController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Training");
	}
	public function create(){
		view("Training");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTypeName"])){
		$errors["type_name"]="Invalid type_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$trainingtype=new TrainingType();
		$trainingtype->type_name=$data["type_name"];
		$trainingtype->status=$data["status"];
		$trainingtype->created_at=$now;
		$trainingtype->updated_at=$now;

			$trainingtype->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Training",TrainingType::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTypeName"])){
		$errors["type_name"]="Invalid type_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$trainingtype=new TrainingType();
			$trainingtype->id=$data["id"];
		$trainingtype->type_name=$data["type_name"];
		$trainingtype->status=$data["status"];
		$trainingtype->created_at=$now;
		$trainingtype->updated_at=$now;

		$trainingtype->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Training");
	}
	public function delete($id){
		TrainingType::delete($id);
		redirect();
	}
	public function show($id){
		view("Training",TrainingType::find($id));
	}
}
?>
