<?php namespace App\Models;

use CodeIgniter\Model;

class Modelopersona extends Model
{

    protected $table= 'usuarios';
    protected $primaryKey= 'id';

    protected $allowedFields= array('nombre', 'edad', 'tipo', 'descripcion', 'comida');


}