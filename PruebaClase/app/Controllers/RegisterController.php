<?php namespace App\Controllers;

class RegisterController extends BaseController
{
	public function index()
	{
		return view('registerView');
	}

	public function registrar(){

		$name=$this->request->getPost("animalName");
		echo($name);
	}

	//--------------------------------------------------------------------

}