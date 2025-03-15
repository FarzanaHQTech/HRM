<?php
class PayslipItemApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["payslip_items"=>PayslipItem::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["payslip_items"=>PayslipItem::pagination($page,$perpage),"total_records"=>PayslipItem::count()]);
	}
	function find($data){
		echo json_encode(["payslipitem"=>PayslipItem::find($data["id"])]);
	}
	function delete($data){
		PayslipItem::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$payslipitem=new PayslipItem();
		$payslipitem->name=$data["name"];
		$payslipitem->factor=$data["factor"];

		$payslipitem->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$payslipitem=new PayslipItem();
		$payslipitem->id=$data["id"];
		$payslipitem->name=$data["name"];
		$payslipitem->factor=$data["factor"];

		$payslipitem->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
