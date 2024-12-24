<?php
echo Page::title(["title"=>"Create ProvidentType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"providenttype", "text"=>"Manage ProvidentType"]);
echo Page::context_open();
echo Form::open(["route"=>"providenttype/save"]);
	echo Form::input(["label"=>"Type Name","type"=>"text","name"=>"type_name"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
