<?php
echo Page::title(["title"=>"Edit ProvidentType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"providenttype", "text"=>"Manage ProvidentType"]);
echo Page::context_open();
echo Form::open(["route"=>"providenttype/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$providenttype->id"]);
	echo Form::input(["label"=>"Type Name","type"=>"text","name"=>"type_name","value"=>"$providenttype->type_name"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
