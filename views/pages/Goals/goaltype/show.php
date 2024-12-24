<?php
echo Page::title(["title"=>"Show GoalType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"goaltype", "text"=>"Manage GoalType"]);
echo Page::context_open();
echo GoalType::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
