<?php

namespace App\Controllers;

use \App\Models\ContactModel;

class Contacts extends BaseController
{
    public function __construct(){
        helper(['form','url']); 
    }
    public function index()
    {
        echo view('common/header');
        echo view ('contacts');
        echo view('common/footer');
    }
    public function message()
    {
        echo view ('common/header');
        
        $inputs = $this->validate([
            'name'=> [
                'label'=> 'name',
                'rules'=>'required|min_length[7]',
                'errors'=>[ 
                    'required'=>'please enter your name',
                ]
                ],
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Please enter your email address.',
                    'valid_email' => 'Please enter avalid email address.'
                ]
                ],  
            'message' => [
                'label' => 'Message',                
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Please enter the message.',
                    'min_length' => 'Please enter a message with atleast 200 character.'
                ]
                ],
          
        ]);

        if (!$inputs) {
            echo view('contacts',[
                'validation' => $this->validator]);
        }
        else{
            
        $ContactModel = new ContactModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        //$message = message_hash($message, PASSWORD_BCRYPT);

        $data = ['name'=>$name,'email'=>$email,'message'=>$message];
        
        $r = $ContactModel->insert( $data );

       if($r)
        {  
         //echo ("thank you");
        session()->setflashdata('status_text','Thank You');
        return redirect()->to(base_url('public/contacts'))
            ->with('status_icon', "success")
            ->with('status','thank u 4r share ur feedback');
           //->with('status','thank you for ur feedback');  
       }
        }    
    }
}
?>