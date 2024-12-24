<?php
	echo Menu::item([
		"name"=>"Goalstatu",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"goalstatu/create","text"=>"Create Goalstatu","icon"=>"far fa-circle nav-icon"],
			["route"=>"goalstatu","text"=>"Manage Goalstatu","icon"=>"far fa-circle nav-icon"],
		]
	]);
