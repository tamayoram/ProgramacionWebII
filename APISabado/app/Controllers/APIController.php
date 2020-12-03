<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIController extends ResourceController
{
    protected $modelName = 'App\Models\Animalmodel';
    protected $format    = 'json';

    public function search()
    {
        return $this->respond($this->model->findAll());
    }


    public function searchOne($id)
    {
        return $this->respond($this->model->find($id));
    }

    

    public function save()
    {

        $name=$this->request->getPost("name");
		$age=$this->request->getPost("age");
		$type=$this->request->getPost("type");
		$description=$this->request->getPost("description");
		$food=$this->request->getPost("food");
        $image=$this->request->getPost("image");
        
        $data=array(
			"name"=>$name,
			"age"=>$age,
			"type"=>$type,
			"description"=>$description,
			"food"=>$food,
			"image"=>$image
		
		);

        if($this->validate('animalPOST')){

            $id=$this->model->insert($data);
            return $this->respond($this->model->find($id));

        }else{

            $validation =  \Config\Services::validation();
            return $this->respond($validation->getErrors());

        }

    }

    // ...
}