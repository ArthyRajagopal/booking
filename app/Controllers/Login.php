<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Login extends BaseController
{

    public function __construct(){
        $session = session();
        helper('$_session');
    }

    public function index()
    {
        $session = session();
        echo view('common/header');
        echo view('login');
        echo view('common/footer');
    }

    public function do_login()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'user' => 'Admin',
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/public/index');
            
            }else{
                $session->setFlashdata('msg','Password is incorrect');
                return redirect()->to('/public/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/public/login');
        }
    }
    public function logout(){
            
        $session = session();
        $session->destroy();
        
        echo view('common/header');
        echo view('logout');

    }

}
?>