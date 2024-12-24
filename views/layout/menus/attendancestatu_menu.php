<?php
	echo Menu::item([
		"name"=>"Attendancestatu",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"attendancestatu/create","text"=>"Create Attendancestatu","icon"=>"far fa-circle nav-icon"],
			["route"=>"attendancestatu","text"=>"Manage Attendancestatu","icon"=>"far fa-circle nav-icon"],
		]
	]);
