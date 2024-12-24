<?php
echo Page::title(["title"=>"Show ProvidentType"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"providenttype", "text"=>"Manage ProvidentType"]);
echo Page::context_open();
echo ProvidentType::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
