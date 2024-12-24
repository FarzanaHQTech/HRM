<?php
class PayslipApi
{
	public function __construct() {}
	function index()
	{
		echo json_encode(["payslips" => Payslip::all()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["payslips" => Payslip::pagination($page, $perpage), "total_records" => Payslip::count()]);
	}
	function find($data)
	{
		echo json_encode(["payslip" => Payslip::find($data["id"])]);
	}
	function delete($data)
	{
		Payslip::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$payslip = new Payslip();
		$payslip->employee_id = $data["employee_id"];
		$payslip->period = $data["period"];
		$payslip->paydate = $data["paydate"];

		$payslip->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data, $file = [])
	{
		$payslip = new Payslip();
		$payslip->id = $data["id"];
		$payslip->employee_id = $data["employee_id"];
		$payslip->period = $data["period"];
		$payslip->paydate = $data["paydate"];

		$payslip->update();
		echo json_encode(["success" => "yes"]);
	}

	function payslipSave($data)
	{

		$payslip = new Payslip();
		$payslip->employee_id = $data["emp_id"];
		$payslip->period = $data["period"];
		$payslip->paydate = $data["paydate"];
		$payslip_id = $payslip->save();


		$payslip_details = $data["payslipdata"];

		foreach ($payslip_details as $key => $value) {
			$payslipdetail = new PayslipDetail();
			$payslipdetail->payslip_id = $payslip_id;
			$payslipdetail->payslip_item_id = $value["item_id"];
			$payslipdetail->payslip_factor = $value["factor"];
			$payslipdetail->amount = $value["item_amount"];
			$payslipdetail->save();
		}
		echo json_encode(["success" => "yes"]);
	}
}
