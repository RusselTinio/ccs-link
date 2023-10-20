<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\FundModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class FundController extends BaseController
{
    public function index()
    {
        $fetchFund = new FundModel();

        #$data['jobs'] =$fetchJob->findall();
        $data['funds'] = $fetchFund->where('status', 'active')->findall();
        $data['archi'] = $fetchFund->where('status', 'disabled')->findall();
        return view('fundraising/fundraisingList', $data);
    }

    public function createFund()
    {
        return view('fundraising/addfund');
    }

    public function storeFund()
    {
        $insertFund = new FundModel();

        if($img = $this->request->getFile('fundCover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('uploads/', $ImageName);
        }
        
    }
    
        $data = array(
            'fund_title' => $this->request->getPost('fundTitle'),
            'fund_enddate' => $this->request->getPost('fundEnddate'),
            'fund_desc' => $this->request->getPost('fundDescription'),
            'fund_contactperson' => $this->request->getPost('fundContactperson'),
            'fund_contactinfo' => $this->request->getPost('fundContactinfo'),
            'fund_othercontact' => $this->request->getPost('fundOtherContactinfo'),
            'fund_cover' => $ImageName,
        );

        $insertFund->insert($data);

        return redirect()->to('AdminController/fundController/index')->with('success', 'Another Fund Added Successfully!');
    }

    public function editFund($id)
    {
       $fetchFund= new FundModel();
        $data['funds']=$fetchFund->where('id',$id)->first();

        return view('fundraising/editfund',$data);
    }

    public function updateFund($id)
    {
        $updateFund= new FundModel();
        $db = \db_connect();

        if($img=$this->request->getfile('fundCover')){
            if($img->isValid() &&! $img->hasMoved()){
                $imageName=$img->getRandomName();
                $img->move('uploads/',$imageName);
            }
        }

        if(!empty($_FILES['jobCover']['name'])){
            $db->query("UPDATE tbl_fund SET fund_cover = '$imageName' WHERE id = '$id'");
        }   
    
    
        $data = array(
            'fund_title' => $this->request->getPost('fundTitle'),
            'fund_enddate' => $this->request->getPost('fundEnddate'),
            'fund_desc' => $this->request->getPost('fundDescription'),
            'fund_contactperson' => $this->request->getPost('fundContactperson'),
            'fund_contactinfo' => $this->request->getPost('fundContactinfo'),
            'fund_othercontact' => $this->request->getPost('fundOtherContactinfo'),
            
            
            
            
            
        );
    
        $updateFund->update($id, $data);
    
        return redirect()->to('AdminController/fundController/index')->with('success', 'Fund Details Updated Successfully!');
        }

        public function deleteFund($id){
            $deleteModel = new FundModel(); //passing model to an object
            $data = [
                'status' => 'disabled'     // changing the column "status" to "disabled"
            ];
            $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
           return redirect()->to('AdminController/fundController/index')->with('success','Fund Deleted Successfully'); // redirecting to the given url
                 
        }
        
        public function restore($id){
            $restoreModel = new FundModel();
            $data = [
                'status' => 'active'  // same as the delete but changing the status to active
            ];
            $restoreModel-> update($id,$data);
            return redirect()->to('AdminController/fundController/index')->with('success','Fund Restored Successfully');
                 
        }




}
