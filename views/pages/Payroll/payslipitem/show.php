<?php
echo Page::title(["title"=>"Show PayslipItem"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"payslipitem", "text"=>"Manage PayslipItem"]);
echo Page::context_open();
echo PayslipItem::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
