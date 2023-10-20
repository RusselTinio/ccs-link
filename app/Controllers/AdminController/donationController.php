<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\DonationModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class donationController extends BaseController
{
    public function index()
    {
        $fetchDonation = new DonationModel();

        #$data['jobs'] =$fetchJob->findall();
        $data['funds'] = $fetchdonation->where('status', 'active')->findall();
        $data['archi'] = $fetchdonation->where('status', 'disabled')->findall();
        return view('donation/donationList', $data);
    }

    public function createFund()
    {
        return view('donation/adddonation');
    }

    public function storeFund()
    {
        $insertDonation = new DonationModel();

        if($img = $this->request->getFile('donationCover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('uploads/', $ImageName);
        }
        
    }
    
        $data = array(
            'donation_title' => $this->request->getPost('donationTitle'),
            'donation_enddate' => $this->request->getPost('donationdate'),
            'donation_desc' => $this->request->getPost('donationDescription'),
            'donation_cover' => $ImageName,
        );

        $insertDonation->insert($data);

        return redirect()->to('AdminController/fundController/index')->with('success', 'Another Fund Added Successfully!');
    }

    public function editFund($id)
    {
       $fetchDonation= new DonationModel();
        $data['funds']=$fetchdonation->where('id',$id)->first();

        return view('donation/editdonation',$data);
    }

    public function updateFund($id)
    {
        $updateDonation= new DonationModel();
        $db = \db_connect();

        if($img=$this->request->getfile('fundCover')){
            if($img->isValid() &&! $img->hasMoved()){
                $imageName=$img->getRandomName();
                $img->move('uploads/',$imageName);
            }
        }

        if(!empty($_FILES['jobCover']['name'])){
            $db->query("UPDATE tbl_fund SET donation_cover = '$imageName' WHERE id = '$id'");
        }   
    
    
        $data = array(
            'donation_title' => $this->request->getPost('donationTitle'),
            'donation_date' => $this->request->getPost('donationEnddate'),
            'donation_desc' => $this->request->getPost('donationDescription'),
            
            
            
            
            
        );
    
        $updateDonation->update($id, $data);
    
        return redirect()->to('AdminController/fundController/index')->with('success', 'Fund Details Updated Successfully!');
        }

        public function deleteFund($id){
            $deleteModel = new DonationModel(); //passing model to an object
            $data = [
                'status' => 'disabled'     // changing the column "status" to "disabled"
            ];
            $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
           return redirect()->to('AdminController/fundController/index')->with('success','Fund Deleted Successfully'); // redirecting to the given url
                 
        }
        
        public function restore($id){
            $restoreModel = new DonationModel();
            $data = [
                'status' => 'active'  // same as the delete but changing the status to active
            ];
            $restoreModel-> update($id,$data);
            return redirect()->to('AdminController/fundController/index')->with('success','Fund Restored Successfully');
                 
        }




}
