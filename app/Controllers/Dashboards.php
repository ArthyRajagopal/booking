<?php 

namespace App\Controllers;

use App\Models\bookm;

use App\Models\cbookm;

class Dashboards extends BaseController
{

   // protected $db;-

    public function __construct()
    {
        //$this->db = \Config\Database::connect();
    
        $session = session();
        if (session()->get('user')!='Admin' ) {
            echo 'Access denied';
            echo view('common/header');
            echo view('login');
            echo view('common/footer');
            exit;
        }
        helper(['form','url']);
        helper('session');
    }
    /*
    public function index()
    {


        $Bookm = new bookm();
        if($this->request->getGet('new')){
            $new=$this->request->getGet('new');
            $data['Bookm']=$Bookm->like('date',$new)->findAll();
            
            $end=$this->request->getGet('end');
            $data['Bookm']=$Bookm->like('date',$end && $new)->findAll();


        }
        else{
            $data['Bookm']=$Bookm->findAll();
        }
        return view('dashboards', $data);
        //echo view('Common/footer');
    }*/
    public function index()
    {
        $Bookm = new bookm();
        
        $cBookm = new cbookm();
        
        $data['Bookm'] = $Bookm->findAll();
        
        $dataa['cBookm'] = $cBookm->findAll();
        $startDate = $this->request->getVar('start_date');
        $endDate = $this->request->getVar('end_date');
        if(!empty($startDate) && !empty($endDate)){
            $Bookm->where('date >=', $startDate)->where('date <=', $endDate);
        }
       
        return view('dashboards', [
            'data' => $Bookm->findAll(),
            'dataa'=>$cBookm->findAll()
        ]);
    }
    
    public function edit($id){
        echo view('Common/header');
        $Bookm = new bookm();
        $data['Bookm'] = $Bookm->find($id);
        $cbookm = new cbookm();
        $data['cbookm'] = $cbookm->find($id);
        return view('court/edit',$data);
    }
    public function update($id){
        $bookm = new bookm();
        $bookm->find($id);

        $data=['court' => $this->request->getPost('court'),
        'date' => $this->request->getPost('date'),
        'slot' => $this->request->getPost('slot')
        ];
        $bookm->update($id,$data);
        return redirect()->to(base_url('public/index'));
    }

    public function delete($id){
        echo view('Common/header');
        $bookm = new bookm();
        $bookm->delete($id);
        return redirect()->to(base_url('public/index'));
    }
    /*public function delete($id = null)
    {
        $bookm = new bookm();
        $bookm->delete($id);
        //$cbookm = new cbookm();
        //$cbookm->delete($id);
        $data = [
            'status' => 'deleted successfully',
            'status_text' => 'you data has been deleted successfully',
            'status_icon' => 'success',
        ];
        return $this->response->setJSON($data) ;
    }*/
}
?>