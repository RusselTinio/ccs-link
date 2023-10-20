<?php

namespace App\Controllers\Dash;

use App\Controllers\AuditTrailController;
use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Libraries\Hash;


class ExpController extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index(){
        $audit = new AuditTrailController();
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $expModel = new Exp();  
        $position = $this->request->getPost('position');
        $org = $this->request->getPost('org');
        $startYear = $this->request->getPost('startYear');
        $endYear = $this->request->getPost('endYear');
        $description = $this->request->getPost('description');

        if(!$endYear){
            $endYear='Currently Working';
        }
     

        $data = [
            'userId' => $loggedUser,
            'position' => $position,
            'org' => $org,
            'startYear' => $startYear,
            'endYear' => $endYear,
            'description' => $description
        ];

        $query = $expModel->insert($data);
        if(!$query){
         return redirect()->back()->with('fail','Something went wrong');
     } else {
        $audit->index($loggedUser,$userInfo['username'],'Experience history recorded');
         return redirect()->to('Dash/ProfileController')->with('success','Experience registered successfully');
         
     }

    }
    public function editExp($id){
        $expModel = new Exp();
        $expInfo = $expModel->find($id);
        $data = ['exp' => $expInfo];
        return view('Pages/editExp', $data);
        
    }

    public function updateExp($id){
        $expModel = new Exp();
        $expInfo = $expModel->find($id);

        $position = $this->request->getPost('position');
        $org = $this->request->getPost('org');
        $startYear = $this->request->getPost('startYear');
        $endYear = $this->request->getPost('endYear');

        if(!$endYear){
            $endYear='Currently Working';
        }

        $data = [
            'position' => $position,
            'org' => $org,
            'startYear' => $startYear,
            'endYear' => $endYear
        ];

        $expModel->update($id, $data);
        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 



    }

    public function deleteExp($id){
        $expModel = new Exp();
        $expModel->delete($id);
        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
    }



}
