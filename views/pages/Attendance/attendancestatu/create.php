<?php
echo Page::title(["title"=>"Create AttendanceStatu"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"attendancestatu", "text"=>"Manage AttendanceStatu"]);
echo Page::context_open();
echo Form::open(["route"=>"attendancestatu/save"]);
	echo Form::input(["label"=>"Status Name","type"=>"text","name"=>"status_name"]);
	echo Form::input(["label"=>"Description","type"=>"textarea","name"=>"description"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
