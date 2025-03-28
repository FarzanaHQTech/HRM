<?php
echo Page::title(["title"=>"Edit Product"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"product", "text"=>"Manage Product"]);
echo Page::context_open();
echo Form::open(["route"=>"product/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$product->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$product->name"]);
	echo Form::input(["label"=>"Description","type"=>"textarea","name"=>"description","value"=>"$product->description"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price","value"=>"$product->price"]);
	echo Form::input(["label"=>"Image","type"=>"text","name"=>"image","value"=>"$product->image"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
