<?php
class PayslipItemController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Payroll");
	}
	public function create(){
		view("Payroll");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["factor"])){
		$errors["factor"]="Invalid factor";
	}

*/
		if(count($errors)==0){
			$payslipitem=new PayslipItem();
		$payslipitem->name=$data["name"];
		$payslipitem->factor=$data["factor"];

			$payslipitem->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Payroll",PayslipItem::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["factor"])){
		$errors["factor"]="Invalid factor";
	}

*/
		if(count($errors)==0){
			$payslipitem=new PayslipItem();
			$payslipitem->id=$data["id"];
		$payslipitem->name=$data["name"];
		$payslipitem->factor=$data["factor"];

		$payslipitem->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Payroll");
	}
	public function delete($id){
		PayslipItem::delete($id);
		redirect();
	}
	public function show($id){
		view("Payroll",PayslipItem::find($id));
	}
}
?>
