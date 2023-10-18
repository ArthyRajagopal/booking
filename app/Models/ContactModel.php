<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table     ='contact';
    protected $primaryKey ='id';
    
    protected $useAutoIncrement = true;

    protected $returnType   ='object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id','name','email','message'];

    protected $useTimestamps = false;
  
    protected $vaildationRules    = [];
    protected $vaildationMessages = [];
    protected $skipValidation     = false;

}