<?php 

require_once __DIR__.'/../lib/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model;

$capsule = new DB();
$capsule->addConnection([
	'driver'	=> 'mysql',
	'host'		=> 'localhost',
	'database'	=> 'test',
	'username'	=> 'root',
	'password'	=> 'root',
	'charset'	=> 'utf8',
	'collation'	=> 'utf8_general_ci',
	'prefix'	=> 'test_'
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
date_default_timezone_set('UTC');
