<?php

$config['telegram'] = [
	'id'			=> 0,
	'key'			=> 'YOUR API KEY',
	'username'		=> 'MyNameBot',
	'first_name'	=> 'James Bot'
];

$config['creator'] = 0; // Telegram User ID of bot owner

$config['mysql'] = [
	'host'		=> 'localhost',
	'username'	=> 'mysql',
	'password'	=> '',
	'db'		=> 'telegram',
	'port'		=> 3306,
	'prefix'	=> NULL,
	'charset'	=> NULL
];

$config['mysql']['enable'] = TRUE; // Enable MySQL Class / Service.

$config['tracking'] = FALSE; // Tracking system to log and track bot/user actions.
// $config['tracking'] = ['Botan' => 'API KEY'];
// $config['tracking'] = ['GA' => 'UA-11111111-1'];

$config['log'] = FALSE; // Log messages to file.
$config['repeat_updateid'] = 3; // Amount of same ID messages you can receive before skipping.
$config['safe_connect'] = TRUE; // Only accept connections from Telegram (or custom servers if specified).

?>
