<?php namespace App\Controllers;

class RegisterController extends BaseController
{
	public function index()
	{
		return view('registerView');
	}

	public function save()
	{
		$name=$this->request->getPost("animalName");
		$age=$this->request->getPost("animalAge");
		$tipo=$this->request->getPost("animalType");
		$description=$this->request->getPost("animalDescription");
		$food=$this->request->getPost("animalFood");
		
		
		echo($name);
		echo("<br>");
		echo($age);
		echo("<br>");
		echo($tipo);
		echo("<br>");
		echo($description);
		echo("<br>");
		echo($food);
		echo("<br>");
	}

	//--------------------------------------------------------------------

}

