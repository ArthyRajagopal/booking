<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['pageTitle']='Home';
        echo view('dashboard/home',$data);
    }

    public function profile(){
        $data['pageTitle']='Profile';
        echo view('dashboard/profile',$data);

    }
}
