<?php
namespace App\Models;

use CodeIgniter\Model;

class bookm extends Model
{
    protected $table     ='book';
    protected $primaryKey ='id';

    protected $useAutoIncrement = true;

    protected $useSoftDeletes = true;

    protected $allowedFields = ['court','date','slot','deleted_at'];

    protected $useTimestamps = false;
  
    protected $vaildationRules    = [];
    protected $vaildationMessages = [];
    protected $skipValidation     = false;



}
?>