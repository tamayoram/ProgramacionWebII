<?php namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model
{
    protected $table      = 'animals';
    protected $primaryKey = 'id';

    protected $allowedFields = array('name', 'age','type','description','food','image');

}