<?php namespace App\Controllers;

use App\Models\Modelopersona;

class RegisterController extends BaseController
{
	public function index()
	{
		return view('registerView');
	}

	public function registrar(){

		$name=$this->request->getPost("animalName");
		$edad=$this->request->getPost("animalAge");
		$tipo=$this->request->getPost("animalType");
		$descripcion=$this->request->getPost("animalDescription");
		$comida=$this->request->getPost("animalFood");

		$datos=array(
			"nombre"=>$name,
			"edad"=>$edad,
			"tipo"=>$tipo,
			"descripcion"=>$descripcion,
			"comida"=>$comida
		);

		//echo($descripcion);

		//print_r($datos);

		
		$modeloPersona=new Modelopersona();

		try{

			$modeloPersona->insert($datos);
			echo("Registro agregado");

		} catch(\Exception $error){

			die($error->getMessage());
		}
		

	}

	public function buscar(){

		$modeloPersona=new Modelopersona();

		try{

			$datosConsultados=$modeloPersona->findAll();

			$datosParaVista=array("usuarios"=>$datosConsultados);

			return view('vistaListado',$datosParaVista);




		} catch(\Exception $error){

			die($error->getMessage());
		}





	}

	//--------------------------------------------------------------------

}