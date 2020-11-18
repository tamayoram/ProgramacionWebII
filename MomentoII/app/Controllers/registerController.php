<?php namespace App\Controllers;

use App\Models\AnimalModel;

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
		$type=$this->request->getPost("animalType");
		$description=$this->request->getPost("animalDescription");
		$food=$this->request->getPost("animalFood");
		$image=$this->request->getPost("animalImage");
		
		$data=array(
			"name"=>$name,
			"age"=>$age,
			"type"=>$type,
			"description"=>$description,
			"food"=>$food,
			"image"=>$image
		
		);

		//print_r($data);
		$animalModel=new AnimalModel();

		try{

			$animalModel->insert($data);
			echo("Success");

		}catch(\Exception $error){

			die($error->getMessage());

		}

		
	}

	public function search(){

		$animalModel=new AnimalModel();

		try{

			$deliveredData=$animalModel->findAll();

			$viewData=array('animals'=>$deliveredData);

			return view('listView',$viewData);

			

		}catch(\Exception $error){

			die($error->getMessage());
		}

	}

	public function delete($id){

		$animalModel=new AnimalModel();

		try{

			$animalModel->where('id',$id)->delete();

			

		}catch(\Exception $error){

			die($error->getMessage());
		}

	}

	public function edit($id){

		$name=$this->request->getPost("nameEdit");
		$age=$this->request->getPost("ageEdit");
		$type=$this->request->getPost("typeEdit");
		$description=$this->request->getPost("descriptionEdit");
		$food=$this->request->getPost("foodEdit");

		$data=array(
			"name"=>$name,
			"age"=>$age,
			"type"=>$type,
			"description"=>$description,
			"food"=>$food
					
		);

		$animalModel=new AnimalModel();

		try{

			$animalModel->update($id,$data);
			echo("Updated");

		}catch(\Exception $error){

			die($error->getMessage());

		}


		

	}

	//--------------------------------------------------------------------

}

