<?php

return [
	/*
    |--------------------------------------------------------------------------
    | Header and Fotter Defaults
    |--------------------------------------------------------------------------
    |
    | Here you can set the admin app title, copyright and main color of header menu and sidemenu
    |
    */
	'title' 	 	   => 'Simple Admin',
	'copyright'	 	   => 'Benito Huerta',
	'headernavbgcolor' => '#343a40',
	'sidenavcolor' 	   => '#212529',

	/*
    |--------------------------------------------------------------------------
    | Header menu
    |--------------------------------------------------------------------------
    |
    | Here you can set the items of header menu 
    |
    */
	'menuheader' => [
		[
			'title' => 'Uno',
			'url'  => '/uno'
		],
		[
			'title' => 'Dos',
			'url'  => '/dos'
		],
	],

	/*
    |--------------------------------------------------------------------------
    | Logout options
    |--------------------------------------------------------------------------
    |
    | Here you can set the items of header menu 
    |
    */
	'logoutmenu' => [
		'title'	 => 'Cerrar sesión'
	],

	/*
    |--------------------------------------------------------------------------
    | Login options
    |--------------------------------------------------------------------------
    |
    | Here you can set the login settings 
    |
    */
	'login' => [
		'backgroundcolor' => '#212529'
	],

	/*
    |--------------------------------------------------------------------------
    | Side menu
    |--------------------------------------------------------------------------
    |
    | Here you can set the items of the main menu 
    |
    */
	'mainmenu' => [
		[
			'heading' 	   => true,
			'headingtitle' => 'Dashboard',
			'multilevel'   => false,
			'title' 	   => 'Home',
			'url' 		   => '/',
			'icon' 		   => 'fas fa-tachometer-alt',
		],
		[
			'heading' 	   => false,
			'headingtitle' => '',
			'multilevel'   => false,
			'title' 	   => 'Users',
			'url' 		   => '/users',
			'icon'		   => 'fas fa-users',
		],
		[
			'heading' 	   => true,
			'headingtitle' => 'More options',
			'title' 	   => 'Settings',
			'multilevel'   => true,
			'icon' 		   => 'fas fa-sliders-h',
			'submenu'	   => [
				[
					'title' => 'My account',
					'url' 	=> '/my-account'
				],
				[
					'title' => 'Colors',
					'url' 	=> '/colors'
				],
			]
		],
		[
			'heading' 	   => false,
			'headingtitle' => '',
			'title' 	   => 'Accounts',
			'multilevel'   => true,
			'icon' 		   => 'fas fa-user',
			'submenu'	   => [
				[
					'title' => 'List of accounts',
					'url' 	=> '/list-of-accounts'
				],
				[
					'title' => 'Link accounts',
					'url' 	=> '/link-accounts'
				],
			]
		],
	],

	/*
    |--------------------------------------------------------------------------
    | Script
    |--------------------------------------------------------------------------
    |
    | if you want to add some scrip to the entire template here you cant set them
    | ** cdn for external url and asset for local asset
    |
    */
	'scripts' => [
		//[
		//	'name' => 'Numeral',
		//	'src'  => '/numeral/main.min.js',
		//	'type' => 'asset' // cdn for external url and asset for local asset
		//]
	],

	/*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | if you want to add some scrip to the entire template here you cant set them
    | ** cdn for external url and asset for local asset
    |
    */
	'styles' => [
		//[
		//	'name' => 'bootstrap',
		//	'src'  => '/boopstrap.min.css',
		//	'type' => 'asset' // cdn for external url and asset for local asset
		//]
	]
];