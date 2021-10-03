<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployModel extends Model
{
    protected $table      = 'employs';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';   

    protected $allowedFields = ['Name', 'date_of_join', 'dob','salary','email'];

    protected $useTimestamps = false;   

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}