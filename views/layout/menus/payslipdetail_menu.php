<?php
	echo Menu::item([
		"name"=>"Payslipdetail",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"payslipdetail/create","text"=>"Create Payslipdetail","icon"=>"far fa-circle nav-icon"],
			["route"=>"payslipdetail","text"=>"Manage Payslipdetail","icon"=>"far fa-circle nav-icon"],
		]
	]);
