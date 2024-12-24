<?php
	echo Menu::item([
		"name"=>"Providenttype",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"providenttype/create","text"=>"Create Providenttype","icon"=>"far fa-circle nav-icon"],
			["route"=>"providenttype","text"=>"Manage Providenttype","icon"=>"far fa-circle nav-icon"],
		]
	]);
