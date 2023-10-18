<?php

namespace App\Controllers;

use \App\Models\bookm;


class Book extends BaseController
{
    public function __construct(){
        helper(['form','url']);
    }

     public function index()
    {
        echo view("common/header");
        echo view('book');
        echo view('common/footer');
    }   

    /*public function get_slots($date) {
        // Code to fetch the available slots for the specified date
        $availableSlots = [
            '10:00 AM - 11:00 AM',
           ' 11:00 AM - 12:00 AM',
           ' 12:00 AM - 01:00 AM',
            '01:00 AM - 02:00 AM',
            '02:00 AM - 03:00 AM',
            '04:00 AM - 05:00 AM',
        ];
        
        return $this->response->setJSON($availableSlots);
    }*/
    public function store()
    { 
        $bookappointments = new bookm(); 

        $court = $this->request->getPost('court');
        $date = $this->request->getPost('date');
        $slot = $this->request->getPost('slot');

        $data = ['court'=>$court,'date'=>$date,'slot'=>$slot];

        $bookappointments->save($data);
       // return redirect()->to(base_url('public/cbook'))->with('status', 'court booked');
        return redirect()->to(base_url('public/cbook'))->with('status', 'court booked')->with('court', $court)->with('date', $date)->with('slot', $slot);

    }
    }



?> 
