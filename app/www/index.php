<?php 

require_once '../config.php';
require_once '../database/User.php';

$rico = User::where('name', 'rico')->first();
var_dump($rico['attributes']);