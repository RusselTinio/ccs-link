<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Libraries\Hash;

class UserEdit extends BaseController
{
    public function index()
    {
        //
    }

    public function edit($id){
        $userModel = new UserModel();
        $user = $userModel->find($id);
        $data = [
            'title' => 'Edit Account',
            'user' => $user
        ];
        return view('Pages/edit', $data);

    }
    public function update($id){
        $userModel = new UserModel();
        $accInfo = $userModel->find($id);

        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'password' => Hash::encrypt($password),
        ];
        $userModel-> update($id, $data);
        return redirect()->to(base_url('AdminController/Admin/superAdminView'))->with('status','User Updated Successfully'); 
        
    }

    public function delete($id){
        $userModel = new UserModel(); //passing model to an object
        $data = [
            'status' => 'disabled'     // changing the column "status" to "disabled"
        ];
        $userModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
        return redirect()->to(base_url('AdminController/SuperAdminController/'))->with('status','Admin Deleted Successfully'); // redirecting to the given url
            
    }

    public function restore($id){
        $userModel = new UserModel();
        $data = [
            'status' => 'active'  // same as the delete but changing the status to active
        ];
        $userModel-> update($id,$data);
        return redirect()->to(base_url('AdminController/SuperAdminController'))->with('status','Admin Deleted Successfully');
            
    }

}
