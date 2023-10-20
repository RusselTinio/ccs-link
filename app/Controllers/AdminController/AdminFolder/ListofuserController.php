<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Models\Profile\Mentoring;

class ListofuserController extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }

    public function index()
    {
        $userModel = new UserModel();
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        
        $userData = $userModel->where('status', 'active')->findall();
        $useDataArchive = $userModel->where('status', 'disabled')->findAll();

        $data = [
            'adminInfo' => $adminInfo,
            'userData' => $userData,
            'useDataArchive' => $useDataArchive
        ];
        return view('admin/admin/listofusers-admin', $data);
    }

    public function mentoring()
    {   
        $loggedUser = session()->get('loggedAdmin');
        $adminModel = new AdminModel();
        $adminInfo = $adminModel->find($loggedUser);

       $mentorModel = new Mentoring();
       $mentorData = $mentorModel->getMentorsWithInfo()->findAll();


       $data = [
        'adminInfo' => $adminInfo,
        'mentorData' => $mentorData,
       ];
        return view('admin/admin/listofmentors-admin', $data);
    }

    public function mentoringCheck($id)
    {   
        $loggedUser = session()->get('loggedAdmin');
        $adminModel = new AdminModel();
        $adminInfo = $adminModel->find($loggedUser);

       $mentorModel = new Mentoring();
       $mentorData = $mentorModel->getMentorsWithInfo()->where('users.id', $id)->first();

       $expModel = new Exp();
       $expData = $expModel->where('userId',$id)->findAll();

       $educModel = new Education();
       $educData = $educModel->where('userId',$id)->findAll();


       $data = [
        'adminInfo' => $adminInfo,
        'mentorData' => $mentorData,
        'expData' => $expData,
        'educData' => $educData
       ];
        return view('admin/admin/mentorProfile', $data);
       //var_dump($data['mentorData']);
       
    }
    public function mentorApproval($id,$status){
    $mentorModel = new Mentoring();
    $mentorData = $mentorModel->where('id', $id)->first();

    $data = ['approval'=> $status];
    $mentorModel->update($id,$data);
    return redirect()->to('adminController/AdminFolder/ListofUserController/mentoring')->with('success', 'Mentor Approval Complete!');
       
}
public function delete(){
    $id = $this->request->getPost('id');
    $userModel = new UserModel(); //passing model to an object
    $data = [
        'status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $userModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
    return redirect()->to(base_url('admin/user_list'))->with('status','Admin Deleted Successfully'); // redirecting to the given url
        
}


    
}
