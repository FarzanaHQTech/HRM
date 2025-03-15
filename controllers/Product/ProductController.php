<?php
class ProductController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Product");
	}
	public function create(){
		view("Product");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtImage"])){
		$errors["image"]="Invalid image";
	}

*/
		if(count($errors)==0){
			$product=new Product();
		$product->name=$data["name"];
		$product->description=$data["description"];
		$product->price=$data["price"];
		$product->image=$data["image"];
		$product->created_at=$now;

			$product->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Product",Product::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtImage"])){
		$errors["image"]="Invalid image";
	}

*/
		if(count($errors)==0){
			$product=new Product();
			$product->id=$data["id"];
		$product->name=$data["name"];
		$product->description=$data["description"];
		$product->price=$data["price"];
		$product->image=$data["image"];
		$product->created_at=$now;

		$product->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Product");
	}
	public function delete($id){
		Product::delete($id);
		redirect();
	}
	public function show($id){
		view("Product",Product::find($id));
	}
}
?>
