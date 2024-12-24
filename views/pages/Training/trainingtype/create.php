<?php
echo Page::title(["title"=>"Create TrainingType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"trainingtype", "text"=>"Manage TrainingType"]);
echo Page::context_open();
echo Form::open(["route"=>"trainingtype/save"]);
	echo Form::input(["label"=>"Type Name","type"=>"text","name"=>"type_name"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
