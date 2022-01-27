<?php namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model {

    protected $table      = 'images';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['imagepath', 'itemid'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}