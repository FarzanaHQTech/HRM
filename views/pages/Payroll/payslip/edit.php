<?php
echo Page::title(["title"=>"Edit Payslip"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"payslip", "text"=>"Manage Payslip"]);
echo Page::context_open();
echo Form::open(["route"=>"payslip/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$payslip->id"]);
	echo Form::input(["label"=>"Employee","name"=>"employee_id","table"=>"employees","value"=>"$payslip->employee_id"]);
	echo Form::input(["label"=>"Period","type"=>"text","name"=>"period","value"=>"$payslip->period"]);
	echo Form::input(["label"=>"Paydate","type"=>"text","name"=>"paydate","value"=>"$payslip->paydate"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
