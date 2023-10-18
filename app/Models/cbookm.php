<?php
namespace App\Models;

use CodeIgniter\Model;

class cbookm extends Model
{
    protected $table     ='cbook';
    protected $primaryKey ='id';

    protected $useAutoIncrement = true;


    protected $allowedFields = ['name','email','contact' , 'people'];
  
}
?>