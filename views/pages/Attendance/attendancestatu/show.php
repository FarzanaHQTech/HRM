<?php
echo Page::title(["title"=>"Show AttendanceStatu"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"attendancestatu", "text"=>"Manage AttendanceStatu"]);
echo Page::context_open();
echo AttendanceStatu::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
