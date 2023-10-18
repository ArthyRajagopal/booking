<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        echo view("common/header");
        echo view('service');
        echo view("common/footer");
       // return view('book');
       
    }
    
    

}