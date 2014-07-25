<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('nombre',100);
			$table->string('apellido',100);
			$table->string('email',100)->unique();
			$table->string('username',100)->unique();
			$table->string('password');
			$table->integer('id_suc');
			$table->char('status',2);
			$table->timestamps();			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Eliminar la tabla users
        Schema::drop('users');
	}

}
