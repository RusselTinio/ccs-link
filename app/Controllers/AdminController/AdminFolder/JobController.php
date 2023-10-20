<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\JobModel;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\PartnerModel;

class JobController extends BaseController
{
    public function index()
    {
        $fetchJob = new JobModel();
        $adminModel = new AdminModel();
        $PartnerModel = new PartnerModel();
        $joblist = $PartnerModel->orderBy("CASE WHEN approval = 'pending' THEN 0 ELSE 1 END, approval ASC")->findAll();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        $loggedAdmin = $adminModel->find( $loggedUser);

        $data = [
            'adminInfo' => $adminInfo,
            'joblist' => $joblist,
            'jobData' => $fetchJob->where('Status', 'active')->orderBy("CASE WHEN approval = 'pending' THEN 0 ELSE 1 END, approval ASC")->findall(),
            'archi' => $fetchJob->where('Status', 'disabled')->findall(),
            'loggedUser' => $loggedAdmin
        ];

        return view('admin/admin/listofjobs', $data);
    }



    #public function deleteJob($id)
    #{
       # $deleteJob = new JobModel();
         #   $deleteJob->delete($id);
    
           # return redirect()->to('/jobposting/joblist')->with('success', 'Job Details Deleted Successfully!');
   # }

   public function deleteJob(){
    $id = $this->request->getPost('id');
    $deleteModel = new JobModel(); //passing model to an object
    $data = [
        'status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
   return redirect()->to('admin/job_list')->with('success','Job Deleted Successfully'); // redirecting to the given url
         
}

public function restore($id){ 
    $restoreModel = new JobModel();
    $data = [
        'status' => 'active'  // same as the delete but changing the status to active
    ];
    $restoreModel-> update($id,$data);
    return redirect()->to('admin/job_list')->with('success','Job Restored Successfully');
         
}

public function approval(){
    $id = $this->request->getPost('id');
    $approval = $this->request->getPost('approval');
    $jobModel = new JobModel();
    $jobPartner = new PartnerModel(); //passing model to an object
    $data = [
        'approval' => $approval     // changing the column "status" to "disabled"
    ];
    $jobModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
    
    return redirect()->to('admin/job_list')->with('success','Job Deleted Successfully'); // redirecting to the given url
        
}



}
