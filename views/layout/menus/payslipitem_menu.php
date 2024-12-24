<?php
	echo Menu::item([
		"name"=>"Payslipitem",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"payslipitem/create","text"=>"Create Payslipitem","icon"=>"far fa-circle nav-icon"],
			["route"=>"payslipitem","text"=>"Manage Payslipitem","icon"=>"far fa-circle nav-icon"],
		]
	]);
