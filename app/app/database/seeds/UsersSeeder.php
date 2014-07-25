<?php

class UsersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create(array(
			'nombre'  => 'Carlos',
			'apellido'  => 'Mella',
			'email'     => 'cmelladiaz@gmail.com',
            'username'  => 'admin',
            'password' => Hash::make('admin'), // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
            'id_suc'=> 1,
            'status' => 'OFF'
        ));
	}

}
