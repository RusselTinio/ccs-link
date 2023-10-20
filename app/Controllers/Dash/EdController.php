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

class EdController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index(){
        $audit = new AuditTrailController();
        $userModel = new userModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $educationModel = new Education();
        $program = $this->request->getPost('program');
        $school = $this->request->getPost('school');
        $startYear = $this->request->getPost('startYear');
        $endYear = $this->request->getPost('endYear');
        $degree = $this->request->getPost('degree');
     

        $data = [
            'userId' => $loggedUser,
            'program' => $program,
            'school' => $school,
            'startYear' => $startYear,
            'endYear' => $endYear
        ];

        $query = $educationModel->insert($data);
        
            if(!$query){
            return redirect()->back()->with('fail','Something went wrong');
        } else {
            $audit->index($loggedUser,$userInfo['username'],'Educational history recorded');
            return redirect()->to('Dash/ProfileController')->with('success','Education registered successfully');
            
        }

    }
    
    public function deleteEd($id){
        $edModel = new Education();
        $edModel->delete($id);
        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
    }


    public function editEd($id){
        $educModel = new Education();
        $educInfo = $educModel->find($id);
        $data = ['educ' => $educInfo];
        return view('Pages/editEduc', $data);
        
    }

    public function updateEd($id){
        $educModel = new Education();
        $expInfo = $educModel->find($id);

        $education = $this->request->getPost('education');
        $school = $this->request->getPost('school');
        $startYear = $this->request->getPost('startYear');
        $endYear = $this->request->getPost('endYear');

        $data = [
            'education' => $education,
            'school' => $school,
            'startYear' => $startYear,
            'endYear' => $endYear 
        ];

        $educModel->update($id, $data);
        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 



    }
}
