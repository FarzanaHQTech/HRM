<?php
echo Page::title(["title"=>"Edit AttendanceStatu"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"attendancestatu", "text"=>"Manage AttendanceStatu"]);
echo Page::context_open();
echo Form::open(["route"=>"attendancestatu/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$attendancestatu->id"]);
	echo Form::input(["label"=>"Status Name","type"=>"text","name"=>"status_name","value"=>"$attendancestatu->status_name"]);
	echo Form::input(["label"=>"Description","type"=>"textarea","name"=>"description","value"=>"$attendancestatu->description"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
