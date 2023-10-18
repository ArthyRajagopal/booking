<?php

namespace App\Controllers;

class Facilities extends BaseController
{
    public function index()
    {
        echo view('Common/header');
        echo view('facilities');
        echo view('Common/footer');
    }
    public function cafe()
    {
        echo view('Common/header');
        echo view('cafe');
        echo view('Common/footer');
    }
    public function croom()
    {
        echo view('Common/header');
        echo view('croom');
        echo view('Common/footer');
    }
}
