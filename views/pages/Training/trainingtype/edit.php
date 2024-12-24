<?php
echo Page::title(["title"=>"Edit TrainingType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"trainingtype", "text"=>"Manage TrainingType"]);
echo Page::context_open();
echo Form::open(["route"=>"trainingtype/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$trainingtype->id"]);
	echo Form::input(["label"=>"Type Name","type"=>"text","name"=>"type_name","value"=>"$trainingtype->type_name"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status","value"=>"$trainingtype->status"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
