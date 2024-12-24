<?php
	echo Menu::item([
		"name"=>"Clientcompany",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"clientcompany/create","text"=>"Create Clientcompany","icon"=>"far fa-circle nav-icon"],
			["route"=>"clientcompany","text"=>"Manage Clientcompany","icon"=>"far fa-circle nav-icon"],
		]
	]);
