<?php

namespace App\Controllers\Dash;

use App\Controllers\BaseController;
use App\Models\userModel;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Exp;
use App\Models\Profile\Profile;
use App\Models\Profile\Skills;
use App\Libraries\Hash;

class ContactController extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }

    public function index(){
        $profileModel = new Profile();
        $contactModel = new Contact();
        $userModel = new userModel();

        
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);
        $contactInfo = $contactModel->where('userId',$loggedUser)->first();
        
        if(!$contactInfo){
            $data = [
                'title' => 'Profile',
                'userInfo' => $userInfo,
                ];
            return view('Pages/newContact',$data);
        } else{
            $data = [
                'userInfo' => $userInfo,
                'contact' => $contactInfo
                ];
            return view('Pages/updateContact',$data);
        }       
    }
    public function createContact(){
        $userModel = new userModel();
        $contactModel = new Contact();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $website = $this->request->getPost('website');
        $email = $this->request->getPost('email');
        $linkin = $this->request->getPost('linkin');
        $facebook = $this->request->getPost('facebook');
        $number = $this->request->getPost('number');

        $data = [
            'userId' => $loggedUser,
            'website' => $website,
            'email' => $email,
            'linkin' => $linkin,
            'facebook' => $facebook,
            'number' => $number
        ];
        

        $query = $contactModel->insert($data);
        if(!$query){
         return redirect()->back()->with('fail','Something went wrong');
     } else {
         return redirect()->to('Dash/ProfileController')->with('success','Contact registered successfully');
         
     }
                
        

    }

    public function updateContact($id){
        $userModel = new userModel();
        $contactModel = new Contact();

        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        

        $website = $this->request->getPost('website');
        $email = $this->request->getPost('email');
        $linkin = $this->request->getPost('linkin');
        $facebook = $this->request->getPost('facebook');
        $number = $this->request->getPost('number');

        $data = [
            'userId' => $loggedUser,
            'website' => $website,
            'email' => $email,
            'linkin' => $linkin,
            'facebook' => $facebook,
            'number' => $number
        ];
        $contactModel->update($id, $data);
        return redirect()->to(base_url('Dash/ProfileController'))->with('status','User Updated Successfully'); 



    }
}
