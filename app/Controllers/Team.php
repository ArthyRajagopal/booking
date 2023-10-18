<?php

namespace App\Controllers;

//use \App\Models\ContactModel;

class Team extends BaseController
{
    public function __construct(){
        helper(['form','url']); 
    }
    public function index()
    {
        return view ('team');
    }
}