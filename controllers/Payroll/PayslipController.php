<?php
class PayslipController extends Controller
{
  public function __construct() {}
  public function index()
  {
    view("Payroll");
  }
  public function create()
  {
    view("Payroll");
  }
  public function save($data, $file)
  {
    if (isset($data["create"])) {
      $errors = [];
      /*


 */
      if (count($errors) == 0) {
        $payslip = new Payslip();
        $payslip->employee_id = $data["employee_id"];
        $payslip->period = $data["period"];
        $payslip->paydate = $data["paydate"];

        $payslip->save();
        redirect("index");
      } else {
        print_r($errors);
      }
    }
  }
  public function edit($id)
  {
    view("Payroll", Payslip::find($id));
  }
  public function update($data, $file)
  {
    if (isset($data["update"])) {
      $errors = [];
    
      /**/
      if (count($errors) == 0) {
        $payslip = new Payslip();
        $payslip->id = $data["id"];
        $payslip->employee_id = $data["employee_id"];
        $payslip->period = $data["period"];
        $payslip->paydate = $data["paydate"];

        $payslip->update();
        redirect();
      } else {
        print_r($errors);
      }
    }
  }
  public function confirm($id)
  {
    view("Payroll");
  }
  public function delete($id)
  {
    Payslip::delete($id);
    redirect();
  }
  public function show($id)
  {
    view("Payroll", Payslip::find($id));
  }
}
