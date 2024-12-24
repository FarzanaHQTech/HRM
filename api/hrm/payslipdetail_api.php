<?php
class PayslipDetailApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["payslip_details"=>PayslipDetail::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["payslip_details"=>PayslipDetail::pagination($page,$perpage),"total_records"=>PayslipDetail::count()]);
	}
	function find($data){
		echo json_encode(["payslipdetail"=>PayslipDetail::find($data["id"])]);
	}
	function delete($data){
		PayslipDetail::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$payslipdetail=new PayslipDetail();
		$payslipdetail->payslip_id=$data["payslip_id"];
		$payslipdetail->payslip_item_id=$data["payslip_item_id"];
		$payslipdetail->payslip_factor=$data["payslip_factor"];
		$payslipdetail->amount=$data["amount"];

		$payslipdetail->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$payslipdetail=new PayslipDetail();
		$payslipdetail->id=$data["id"];
		$payslipdetail->payslip_id=$data["payslip_id"];
		$payslipdetail->payslip_item_id=$data["payslip_item_id"];
		$payslipdetail->payslip_factor=$data["payslip_factor"];
		$payslipdetail->amount=$data["amount"];

		$payslipdetail->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
