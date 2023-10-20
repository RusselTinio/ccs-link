<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Models\Profile\Mentoring;
use App\Libraries\Hash;

class Mentorship extends BaseController 
{   
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   $userModel = new UserModel();
        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);

       $mentorModel = new Mentoring();
       $mentorData = $mentorModel->getMentorsWithInfo()->where(array('mentoring.approval'=>'approve','mentoring.status'=>'active'))->findAll();
       $mentorProfile = $mentorModel->where('userId',$loggedUser)->first();
       $data = [
        'mentorData' => $mentorData,
        'mentorProfile' => $mentorProfile
       ];

       
        //var_dump($data['mentorData']);
        return view('user/mentorship',$data);
    }
    public function addMentor(){
        $contactModel = new Contact();  
        $profileModel = new Profile();
        $userModel = new userModel();
        $mentorModel = new Mentoring();

        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);
        $contactData = $contactModel->where('userId',$loggedUser)->first();
        $profileData = $profileModel->where('userId',$loggedUser)->first();

        $data = [
            'userId' => $loggedUser,
            'profileId' => $profileData['id'],
            'contactId' => $contactData['id'],
        ];

        $query = $mentorModel->insert($data);
        if(!$query){
            return redirect()->back()->with('fail','Something went wrong');
        } else {
            return redirect()->to('Dash/Mentorship')->with('success','Education registered successfully');
            
        }

        
    }

    public function displayMentor($id){
        $userModel = new userModel();
        $expModel = new Exp();
        $educModel = new Education();

        $loggedUser = session()->get('loggedUser');
        $userData = $userModel->find($loggedUser);
        $expData = $expModel->where('userId',$id)->first();
        $eductData = $educModel->where('userId',$id)->first();


        $mentorModel = new Mentoring();
        $mentorData = $mentorModel->getMentorsWithInfo()->where('mentoring.userId',$id)->first();

        $data = [
            'mentorData' => $mentorData,
            'experience' => $expData,
            'education' => $eductData
        ];
        //var_dump($data['mentorData']);
        return view('user/mentorProfile',$data);
    }    
}
