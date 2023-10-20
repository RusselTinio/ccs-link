<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Models\ApplicantModel;
use App\Libraries\Hash;
use App\Models\AdminModel;
use App\Models\JobModel;

class ApplicantController extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        $userModel = new UserModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminModel = new AdminModel();
        $adminInfo = $adminModel->find($loggedUser);

       $ApplicantModel = new ApplicantModel();
       $applicantData = $ApplicantModel->getApplicantsWithInfo()->findAll();
       $applicantProfile = $ApplicantModel->where('userId',$loggedUser)->first();

       $userData = $userModel->where('status', 'active')->findall();
        $useDataArchive = $userModel->where('status', 'disabled')->findAll();

       $data = [
        'loggedUser' => $adminInfo,
        'applicantProfile' => $applicantProfile,
        'userData' => $userData,
        'applicantData' => $applicantData,
        'adminInfo' => $adminInfo
       ];
       //var_dump($data['applicantProfile']);
        return view('admin/superadmin/applicantList', $data);

    }

    public function addApplicant($id){
        $userModel = new userModel();
        $applicantModel = new ApplicantModel();
        $jobModel = new JobModel();

        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);
        $applicantProfile = $applicantModel->where(array('userId'=>$loggedUser,'jobId'=>$id))->first();

        
        

        $data = [
            'userId' => $loggedUser,
            'jobId' => $id,
            'appProfile' => $applicantProfile
        ];

        if(!$data['appProfile']){
            $query = $applicantModel->insert($data);
            if(!$query){
                return redirect()->back()->with('fail','Something went wrong');
            } else {
                return redirect()->to('Jobs')->with('success','You have successfully applied for the job.');      
            }
        } else{
            return redirect()->to('Jobs')->with('fail','You already submitted applicationfor this job');
        }
       

        
    }

    public function applicant()
    {   
        $loggedUser = session()->get('loggedAdmin');
        $adminModel = new AdminModel();
        $adminInfo = $adminModel->find($loggedUser);

       $applicantModel = new ApplicantModel();
       $applicantData = $applicantModel->getMentorsWithInfo()->findAll();

       $jobModel = new JobModel();
       $jobData = $jobModel->where('status','active')->findAll();


       $data = [
        'adminInfo' => $adminInfo,
        'applicantData' => $applicantData,
       ];
        return view('admin/superadmin/applicantList', $data);
    }
    public function ApplicantCheck($id)
    {   
        $loggedUser = session()->get('loggedAdmin');
        $adminModel = new AdminModel();
        $adminInfo = $adminModel->find($loggedUser);

       $applicantModel = new ApplicantModel();
       $applicantData = $applicantModel->getApplicantsWithInfo()->where('users.id', $id)->first();


       $expModel = new Exp();
       $expData = $expModel->where('userId',$id)->findAll();

       $educModel = new Education();
       $educData = $educModel->where('userId',$id)->findAll();


       $data = [
        'adminInfo' => $adminInfo,
        'applicantData' => $applicantData,
        'expData' => $expData,
        'educData' => $educData
       ];
        return view('admin/superadmin/applicantProfile', $data);
       //var_dump($data['mentorData']);
       
    }
    public function applicantApproval($id,$status){
        $applicantModel = new ApplicantModel();
        $applicantData = $applicantModel->where('id', $id)->first();
    
        $data = ['status'=> $status];
        $applicantModel->update($id,$data);
        return redirect()->to('superadmin/applicant_list')->with('success', 'Mentor Approval Complete!');
           
    }
    
}
