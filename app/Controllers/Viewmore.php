<?php namespace App\Controllers;

use App\Models\cbookm;

use App\Models\bookm;

class Viewmore extends BaseController
{
    public function viewindex($id)
    {
 
        $Bookm = new cbookm();
        $data['Bookm'] = $Bookm->where('id',$id)->findAll();
        return view('viewmore', $data);
    }
    
    public function editt($id){
        echo view('Common/header');
        $Bookm = new bookm();
        $data['Bookm'] = $Bookm->findAll();
        $cbookm = new cbookm();
        $data['cbookm'] = $cbookm->find($id);
       // $Cbookm = new cbookm();
        //$data['cbookm'] = $Cbookm->findAll();
        return view('detail/edit',$data);
    }
    public function update($id){
        $cbookm = new cbookm();
        $cbookm->find($id);
        $data=['name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'contact' => $this->request->getPost('contact'),
        'people' => $this->request->getPost('people')
        ];
        $cbookm->update($id,$data);
        return redirect()->to(base_url('public/index'));
    }
    /*public function delete($id){
        echo view('Common/header');
        $cbookm = new cbookm();
        $cbookm->delete($id);
        return redirect()->to(base_url('public/index'));
    }*/
}
?>

