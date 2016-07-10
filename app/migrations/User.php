<?php 

use Illuminate\Database\Capsule\Manager as DB;

class User {
	function createTables() {
		$table = 'users';
		DB::schema()->dropIfExists($table);
		DB::schema()->create($table, function($table) {
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->timestamps();
		});
	}
}