<?php
echo Page::title(["title"=>"Show GoalStatu"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"goalstatu", "text"=>"Manage GoalStatu"]);
echo Page::context_open();
echo GoalStatu::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
