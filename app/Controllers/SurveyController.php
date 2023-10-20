<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Sample;

class SurveyController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $loggedUser = session()->get('loggedUser');
        $userInfo = $userModel->find($loggedUser);

        $data=[
            'userInfo' => $userInfo,
        ];

        return view('user/survey',$data);
    }

    public function dataCollection(){
        $sampleModel = new Sample();
        $selectValue = $this->request->getPost('sample_check');
            $serialize_value = implode(', ', $selectValue);
            $data = [
                'response' => $serialize_value
            ];
            $sampleModel->insert($data);
            return redirect()->to(base_url('SurveyController/dataPresentation'))->with('status','User Updated Successfully'); 
        
    }

    public function dataPresentation(){
        $sampleModel = new Sample();

        $sampleData = $sampleModel->findAll();


       // var_dump($data['sampleData']);
       foreach($sampleData as $dat){
         $array[]= $dat['response'];
       }
        var_dump($array);

        
    }
}
