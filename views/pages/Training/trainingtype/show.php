<?php
echo Page::title(["title"=>"Show TrainingType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"trainingtype", "text"=>"Manage TrainingType"]);
echo Page::context_open();
echo TrainingType::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
