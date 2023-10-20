<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;
use App\Controllers\AuditTrailController;
use App\Models\UserModel;
use App\Models\Predata;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('user/loginform');
    }

    public function Register(){
        return view('user/registration');
    }

    public function saveUser(){
        $userModel = new UserModel();
        $preData = new Predata();

        $validation =  $this->validate(
            [

                'firstname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'First name required',
                                
                                ],

                ],
                'lastname' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'Last name required',
                                 
                ],

                ],
                'username' => [
                    'rules' => 'required|is_unique[users.username]',
                    'errors' => ['required' => 'Username required',
                                'is_unique' => 'Username already taken',
                               
                
                    ],
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => ['required' => 'Password required',
                                'min_length' => 'minimum of 5 characters',
                    ],
                ],  
                'cpassword' => [
                    'rules' => 'required|min_length[8]|matches[password]',
                    'errors' => ['required' => 'Password need confirmation',
                                'min_length' => 'minimum of 5 characters',
                                'matches' => 'must be match to the password',
                    ],
                ],

                'privacy' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'must agree to privacy policy and terms and conditions']
                ]

            ]);
            // var_dump($validation);

               
            if(!$validation){
                return view('user/registration', ['validation'=>$this->validator]);
            } else  {
                $lastname = $this->request->getPost('lastname');
                $firstname = $this->request->getPost('firstname');
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $data = [
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'username' => $username,
                    'password' => Hash::encrypt($password),
                    
                ];

                $query = $userModel->insert($data);
                if(!$query){
                    return redirect()->back()->with('fail','Something went wrong');
                } else {
                        
                    $lastId = $userModel->insertID();
                    session()->set('loggedUser', $lastId);
                    return redirect()->to('Dashboard');
                }
                
                

               
            }
        
    }

    public function check(){
        $validation = $this->validate([
            'username' => [
                'rules' => 'required|is_not_unique[users.username]',
                'errors' => ['required' => 'Username required',
                            'is_not_unique' => 'No Account exists'
            
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => ['required' => 'Password required',
                            'min_length' => 'minimum of 5 characters',
                ],
            ],
           
        ]);

        if(!$validation){
            return view('user/loginform', ['validation'=>$this->validator]);
        } else{
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $userModel = new userModel();
            $userInfo = $userModel->where('username', $username)->first();
            $checkpassword = Hash::verify($password, $userInfo['password']);

            if(!$checkpassword){
                session()->setFlashdata('fail','Incorrect password');
                return redirect()->to('Login/Auth/index');
                
            }   else{  
                
                    $userId = $userInfo['id'];
                    $audit = new AuditTrailController();
                    $audit->index($userId,$username,'User login');
                    session()->set('loggedUser', $userId);
                    return redirect()->to('Dashboard');
                
               
            }
        }
    }

    
    public function logout(){
        $userModel = new userModel();
        $audit = new AuditTrailController();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);
        if(session()->has('loggedUser')){
            $audit->index($userInfo['id'],$userInfo['username'],'User logout');
            session()->remove('loggedUser');
            return redirect()->to('Login/Auth/index?access=out')->with('fail','You are logged out');
        }
    }

    public  function reset(){
        return view('user/reset');
    }
    public function resetPassword(){
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email address is required',
                    'valid_email' => 'Must be a valid email address',
                ],
            ],
        ]);
        if(!$validation){
            return view('user/reset', ['validation'=>$this->validator]);
        } 
    }
}
