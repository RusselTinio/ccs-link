<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Controllers\AuditTrailController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Models\Profile\Mentoring;   
use App\Models\AdminModel; 
use App\Models\EventsModel; 
use App\Libraries\Hash;

class ProfileController extends BaseController
{   
    public function __construct(){
        helper(['url', 'form']);
    }

    public function index(){
        $educationModel = new Education();
        $expModel = new Exp();                         //for profile
        $skillsModel = new Skills();               
        $userModel = new userModel();
        $mentorModel = new Mentoring(); 
        $eventsModel = new EventsModel();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);
        $eventsData = $eventsModel->findAll();
        $education = $educationModel->where(array('userId'=> $loggedUser,'status' => 'active'))->findAll();
        $exp = $expModel->where(array('userId'=> $loggedUser,'status' => 'active'))->findAll();
        $skills = $skillsModel->find($loggedUser);
        $mentorProfile = $mentorModel->where(array('userId'=> $loggedUser,'status' => 'approve'))->first();

                $data = [
                    'title' => 'Profile',
                    'userInfo' => $userInfo,
                    'experience' => $exp,
                    'education' => $education,
                    'mentorProfile' => $mentorProfile,
                    'eventsData' => $eventsData
                    ];
               // var_dump($data['mentorProfile']);  
              return view('user/profile',$data);
               
            
            
            


    }


    public function updateProfile($id){          
        $educationModel = new Education();
        $expModel = new Exp();                         //for profile
        $skillsModel = new Skills();              
        $userModel = new userModel();
        $mentorModel = new Mentoring(); 
        $eventsModel = new EventsModel();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);  // user 
        
        $audit = new AuditTrailController(); //audit

        $eventsData = $eventsModel->findAll();
        $education = $educationModel->where(array('userId'=> $loggedUser,'status' => 'active'))->findAll();
        $exp = $expModel->where(array('userId'=> $loggedUser,'status' => 'active'))->findAll();
        $skills = $skillsModel->find($loggedUser);
        $mentorProfile = $mentorModel->where(array('userId'=> $loggedUser,'status' => 'approve'))->first();

                $firstname = $this->request->getPost('firstname');
                $lastname = $this->request->getPost('lastname');
                $ext = $this->request->getPost('suffix');
                $title = $this->request->getPost('title');
                $password = $this->request->getPost('password');
                $address = $this->request->getPost('address');
                $description = $this->request->getPost('description');
  
                // var_dump($firstname);
                // var_dump($lastname);
                // var_dump($ext);
                // var_dump($title);
                // var_dump($password);
                // var_dump($address);
                // var_dump($description);

              
                if(!$userInfo['image']){
                    $old_image = 'none';
                } else $old_image = $userInfo['image'];   //for image
        
                $image = $this->request->getFile('image');
                
        
                if($image->isValid()&& !$image->hasMoved()){
                        
                    if(file_exists('upload/profile'.$old_image)){
                        unlink('upload/profile'.$old_image);
                    }
        
                    $imageName = $image->getRandomName();
                    $image ->move('upload/profile',$imageName);
        
                    $data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'title' => $title,
                    'suffix ' => $ext,
                    'address' => $address,
                    'description' => $description,
                    'image' => $imageName
                    ];
                    
           
                    $userModel -> update($loggedUser, $data);
                    $audit->index($loggedUser,$userInfo['username'],'profile update successfully');
                    return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
                }else{
                    $data = [
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'title' => $title,
                        'suffix' => $ext,
                        'address' => $address,
                        'description' => $description
                    ];

                    $userModel -> update($loggedUser, $data);
                    $audit->index($loggedUser,$userInfo['username'],'profile update successfully');
                    return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 
                  
                }  
            
    
}

    public function profileView($id){     
        $educationModel = new Education();
        $expModel = new Exp();                         //for profile
        $skillsModel = new Skills();                //************************************ */
        $mentorModel = new Mentoring(); 
        $userModel = new userModel();
        

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        
        $userProfile = $userModel->find($id);
        $education = $educationModel->where(array('userId'=> $id,'status' => 'active'))->findAll();
        $exp = $expModel->where(array('userId'=> $id,'status' => 'active'))->findAll();
        $skills = $skillsModel->where('userId',$id)->findAll();
        $mentorProfile = $mentorModel->where(array('userId'=> $id,'status' => 'approve'))->first();

        $data = [
            'title' => 'Profile',
            'userInfo' => $userProfile,
            'experience' => $exp,
            'education' => $education,
            'mentorProfile' => $mentorProfile
            ];


        return view('user/searchProfile',$data);
    }

    public function updateContact($id){
        $userModel = new userModel();
        $audit = new AuditTrailController(); //audit

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $website = $this->request->getPost('website');
        $email = $this->request->getPost('email');
        $linkin  = $this->request->getPost('linkin');
        $facebook = $this->request->getPost('facebook');
        $contact = $this->request->getPost('cNumber'); 

        $data = [
            'website' => $website,
            'email' => $email,
            'linkin' => $linkin,
            'facebook' => $facebook,
            'contact' => $contact
        ];

        $userModel->update($id,$data);
        $audit->index($loggedUser,$userInfo['username'],'Contact update successfully');
        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 

    }
}
