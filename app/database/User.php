<?php 

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class User extends Model {

	/**
	 * [$fillable description]
	 * @var [type]
	 */
	
	protected $fillable = [
		'email',
		'name',
	];

}

class UserMigration extends Migration {

	/**
	 * Create the migration.
	 * @return [type] [description]
	 */
	
	public function up() {
		DB::schema()->create('users', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('password')->nullable();
			$table->string('reset_token')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migration.
	 * @return [type] [description]
	 */
	
	public function down() {
		DB::schema()->drop('users');
	}

	/**
	 * Seed some initial data.
	 * @return [type] [description]
	 */
	
	public function seed() {
		User::unguard(); // to be able to fill password
		User::create([
			'id' => 1,
			'name' => 'Rico',
			'email' => 'rico@example.com',
			'password' => md5('test'),
		]);
		User::create([
			'id' => 2,
			'name' => 'Marco',
			'email' => 'marco@example.com',
			'password' => md5('test'),
		]);
		User::reguard();
	}

}