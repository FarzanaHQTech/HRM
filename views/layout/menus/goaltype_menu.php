<?php
	echo Menu::item([
		"name"=>"Goaltype",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"goaltype/create","text"=>"Create Goaltype","icon"=>"far fa-circle nav-icon"],
			["route"=>"goaltype","text"=>"Manage Goaltype","icon"=>"far fa-circle nav-icon"],
		]
	]);
