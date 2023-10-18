<?php

namespace App\Controllers;

use \App\Models\bookm;

use \App\Models\cbookm;




//include(APPPATH . 'path/to/Book.php');
//include('Book.php');

class Cbook extends  BaseController
{
    public function __construct(){
        helper(['form','url']);
    }  
    public function cbook()
    {
        
        echo view('common/header');
        echo view('cbook');
        echo view('common/footer');
    }

    public function stores($date)
    {
         echo $date;
    }

   public function store()
    {
        //$this->load->view('Book.php'); //this works and loads all the includes

        $inputs = $this->validate([
            'name'=> [
                'label'=> 'name',
                'rules'=>'required|min_length[7]',
                'errors'=>[ 
                    'required'=>'please enter your name',
                ]
                ],
            'email' => [
                'label' => 'email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Please enter your email address.',
                    'valid_email' => 'Please enter avalid email address.'
                ]
                ],  
            'contact' => [
                'label' => 'contact',                
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Please enter the Mobile Number.',
                    'min_length' => 'Please enter a valid mobile number.'
                ]
                ],
                'people' => [
                    'label' => 'people',                
                    'rules' => 'required|greater_than[0]',
                    'errors' => [
                        'required' => 'Please enter Number Of Peoples.',
                        'greater_than' => 'The number of people field must be a positive number .'
                     ]
                    ],
          
        ]);

        if (!$inputs) {
            echo view('common/header');
            return view('cbook',['validation' => $this->validator]);
            echo view('common/footer');

        }
        else{

        $book = new cbookm();
        //$this->$load->file('booking/Book.php');
       // $_POST['court']
        //$_POST['date']
       // $_POST['slot']
        //$day = $date;
        //$time = $slot;

        // Passing the value 
        //redirect('/book.php/store/date');
        $name = $this->request->getpost('name');
        $email_address = $this->request->getpost('email');
        $contact = $this->request->getpost('contact');
        $people = $this->request->getpost('people');

        // Retrieve flash data values
        $court = session()->getFlashdata('court');
        $date = session()->getFlashdata('date');
        $slot = session()->getFlashdata('slot');

        
// Set up the email parameters
       $mail = \config\services::email();
       $mail->setFrom('shweetharthy97@gmaIl.com','VEEGO');
       $mail->setTo($email_address);
       $mail->setSubject('Booking Confirmation');
       $mail->setMessage("Dear $name, thank you for booking with us. Your booking $court date $date at $slot has been confirmed.");
       $mail->send();

       //$mail->setdate($date);   
       //$mail->settimes($slot); 
       /*if($mail->send()){
        echo 'Confirmation email has been sent check.';
       }*/

       $data = ['name'=>$name,'email'=>$email_address,'contact'=>$contact,'people'=>$people];


       $book->save($data);


       $data = ['court' => $court, 'date' => $date, 'slot' => $slot];
         echo view('cbook', $data);

       //return redirect()->to(base_url('public/cbook'))->with('status', 'court booked')->with('court', $court)->with('date', $date)->with('slot', $slot);

        return redirect()->to(base_url('public/contacts'))->with('status', 'thankyou 4r booking ,please check ur mail');

}
    }
}                                                           
?>   