<?php
echo Page::title(["title"=>"Edit PayslipItem"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"payslipitem", "text"=>"Manage PayslipItem"]);
echo Page::context_open();
echo Form::open(["route"=>"payslipitem/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$payslipitem->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$payslipitem->name"]);
	echo Form::input(["label"=>"Factor","type"=>"textarea","name"=>"factor","value"=>"$payslipitem->factor"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
