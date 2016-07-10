<?php 

require_once '../config.php';
require_once '../database/User.php';
// User::unguard();
User::create([
	'username' => 'rico',
	'password' => md5('test')
]);
User::reguard();
var_dump(User::all());