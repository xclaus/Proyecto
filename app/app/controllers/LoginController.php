<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class LoginController extends BaseController {

	/*
	 |Login
	 |Funcion que genera el ruteo desde el template login
	 */
	public function logIn() {
		/**
		 * @param $data array que contendra los valores del formulario
		 * array que contendra los valores del formulario
		 **/
		
		$data = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')	
		);
		
		//print_r($data);
		
		if(Auth::attempt($data)) {
			return Redirect::to('main');
		}
		
	}
	
	/**
	 * Funcion logout
	 */
	
	public function logOut() {
		Auth::logout();
		//Redirecciono al login
		return Redirect::to('/');
	}

}
