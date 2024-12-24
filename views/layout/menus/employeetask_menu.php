<?php
	echo Menu::item([
		"name"=>"Employeetask",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"employeetask/create","text"=>"Create Employeetask","icon"=>"far fa-circle nav-icon"],
			["route"=>"employeetask","text"=>"Manage Employeetask","icon"=>"far fa-circle nav-icon"],
		]
	]);
