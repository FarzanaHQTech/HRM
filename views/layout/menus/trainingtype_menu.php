<?php
	echo Menu::item([
		"name"=>"Trainingtype",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"trainingtype/create","text"=>"Create Trainingtype","icon"=>"far fa-circle nav-icon"],
			["route"=>"trainingtype","text"=>"Manage Trainingtype","icon"=>"far fa-circle nav-icon"],
		]
	]);
