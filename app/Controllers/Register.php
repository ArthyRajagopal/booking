<?php
namespace App\Controllers;

use \App\Models\UserModel;


class Register extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo  view('register');
        echo view('common/footer');
    }




    public function do_register() 
    {
        helper(['form','url']);


        $validation = \Config\Services::validation();
        $check = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            
            'gender' => 'required',
            'password' => 'required',
            'cpassword' => 'required|matches[password]',
        ]);


        
        $userModel = new UserModel;

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $gender = $this->request->getPost('gender');
        $password = $this->request->getPost('password');
        $cpassword = $this->request->getPost('cpassword');

        $password = password_hash($password, PASSWORD_BCRYPT);

        $data = ['name'=>$name,'email'=>$email,'password'=>$password,'gender'=>$gender,'cpassword'=>$cpassword];

        

        if(!$check)
    {
        
        echo view('common/header');
        echo view('register',['validation' => $this->validator]);
    }

    else
    {
        $r =$userModel->insert( $data );
        return redirect()->to(base_url('public/login'));

    }


    }












/*

    public function do_register() 
    {
        $userModel = new UserModel;

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $gender=$this->request->getPost('gender');
        $password = password_hash($password, PASSWORD_BCRYPT);
       
        $data = ['name'=>$name,'email'=>$email,'password'=>$password , 'gender'=>$gender];
        $r = $userModel->insert( $data );
        if($r)
        {

            session()->setflashdata('status_text','thank u');
            return redirect()->to(base_url('public/login'))
                ->with('status_icon', "success")
                ->with('status','thank u 4r share ur feedback');

        }
        else{
            echo"fail";
        }
    }   */
}