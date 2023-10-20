<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\AuditTrailModel;
use App\Models\AdminModel;

class AuditTrailController extends BaseController
{
    public function index($id,$username,$activity)
    {
        
            $auditModel = new AuditTrailModel();

            $data = [
                'userId' => $id,
                'username' => $username,
                'activity' => $activity
            ];

            $query = $auditModel->insert($data);

    }

    public function display(){
        $adminModel = new AdminModel();
        $loggedAdminId = session()->get('loggedAdmin');
        $loggedAdmin = $adminModel->find($loggedAdminId);
        $auditModel = new AuditTrailModel();
        $auditData = $auditModel->findAll();


        $data = [
            'loggedUser' => $loggedAdmin,
            'auditData' => $auditData
        ];

        return view('admin/superadmin/audittrail',$data);
    }

    public function userActivities($id){
        $userModel = new UserModel();
        $userInfo = $userModel->find($id);
        $currentDate = date('Y-m-d');


        $auditModel = new AuditTrailModel();
        $auditData = $auditModel->where('userId',$id)
        ->where('DATE(timestamp)',$currentDate)->findAll();
        $data = [
            'userInfo' => $userInfo,
            'auditData' => $auditData
        ];

        return view('user/activityLog',$data);
    }
}
