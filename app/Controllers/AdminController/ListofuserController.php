<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\FundModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class ListofuserController extends BaseController
{
    public function index()
    {
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        $data = [
            'loggedUser' => $adminInfo,
            
        ];


        return view('admin/superadmin/applicantList', $data);
    }
}
