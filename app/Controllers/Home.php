<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Common/header');
        echo view('home');
        echo view('Common/footer');
    }
}
