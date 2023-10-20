<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\AdminModel;
use App\Models\UserModel;


class Admin extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {   
       
        return view('admin/loginform_admin');
    }

    public function check(){
        $validation = $this->validate([
            'username' => [
                'rules' => 'required|is_not_unique[admin.username]',
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
            return view('AdminView/Adminlogin', ['validation'=>$this->validator]);
        } else{
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $adminModel = new AdminModel();

            $adminInfo = $adminModel->where('username', $username)->first();
           $checkpassword = Hash::verify($password, $adminInfo['password']);
            if(!$checkpassword){
                session()->setFlashdata('fail','Incorrect password');
                return redirect()->to('AdminController/Admin');
                
            }   else{
                $adminId = $adminInfo['id'];
                $role = $adminInfo['role'];
                session()->set('loggedAdmin', $adminId);
                if($role=='superadmin'){
                    return redirect()->to('adminController/SuperAdminController');
                } else return redirect()->to('adminController/Admin/adminView');
                
              
            }
        }
    }

    public function adminView(){
        $adminModel = new AdminModel();
        $userModel = new UserModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        $userInfo = $userModel->findAll();
        $data = [
            'title' => 'Admin',
            'adminInfo' => $adminInfo,
            'userInfo' => $userInfo
        ];

        return view('adminView/adminPage',$data);
    }

    public function logout(){
        if(session()->has('loggedAdmin')){
            session()->remove('loggedAdmin');
            return redirect()->to('AdminController/Admin/index?access=out')->with('fail','You are logged out');
        }
    }

    public function delete($id){
        $adminModel = new AdminModel();
        $data = [
            'status' => 'disabled'
        ];
        $adminModel-> update($id,$data);
        return redirect()->to(base_url('AdminController/SuperAdminController'))->with('status','Admin Deleted Successfully');
            
    }
    public function editView($acc_num){
        $adminModel = new AdminModel();        
        $accInfo = $adminModel->find($acc_num);
        $data = [
            'title' => 'Update Admin',
            'admin' => $accInfo
        ];
        
        return view('adminView/adminUpdate',$data);
    }
    public function update($id){
        $adminModel = new AdminModel();
        $accInfo = $adminModel->find($id);
        
       
        $validation = $this->validate(
            [ 
                
               
                'password' => [
                    'rules' => 'required',
                    'errors' => ['required' =>'New password required']
                ],
                'cpassword' => [
                    'rules' => 'required|matches[password]',
                    'errors' => ['required' =>'Password must be confirmed',
                                'matches[password]' =>'Password need to confirm'],
                ],
                
            ]
            );
            
            $data = [
                'title' => 'Update Admin',
                'admin' => $accInfo,
                'validation' => $this->validator,
                'password' =>Hash::encrypt($this->request->getPost('password')), 
                
            ];

            if(!$validation){
                return view('adminView/adminUpdate',$data );
               
             } else  {
               
                $adminModel-> update($id,$data);
                return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','User Updated Successfully'); 
             }
       
    }

    
}
