<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\DonationModel;
use App\Models\AdminModel;
use App\Models\UserModel;

class DonationController extends BaseController
{
    public function index()
    {
        $fetchDonation = new DonationModel();
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);

 

        $data = [
            'dons' => $fetchDonation->where('status', 'active')->findall(),
            'archi' => $fetchDonation->where('status', 'disabled')->findall(),
            'adminInfo' => $adminInfo
        ]; 

        return view('admin/admin/donation-admin', $data);
    }


    public function storeDonation()
    {
        $DonationModel = new DonationModel();

        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $date = $this->request->getPost('date');

       

        if( $img = $this->request->getFile('cover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('upload/funds', $ImageName);      
                $data = array(
                    'donation_title' => $title,
                    'donation_date' => $date,
                    'donation_desc' => $description,
                    'donation_cover' => $ImageName
                );
               
                $DonationModel->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/DonationController')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                'donation_title' => $title,
                'donation_date' => $date,
                'donation_desc' => $description,
            );
           
            $DonationModel->insert($data);
        
            return redirect()->to('AdminController/AdminFolder/DonationController')->with('success', 'Job Added Successfully!');
        }
        
    } else echo "error";
    }



    public function updateDonation()
    {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $date = $this->request->getPost('date');
        $image = $this->request->getFile('cover');


        $DonationModel = new DonationModel();
        $DonationData = $DonationModel->find($id);
 
         if (!$DonationData['donation_cover']) {
             $old_image = 'none';
         } else {
             $old_image = $DonationData['donation_cover'];
         }
 
         // Check if a file was uploaded
 
         // File was uploaded
         if ($image->isValid() && !$image->hasMoved()) {
             if (file_exists('upload/funds/' . $old_image)) {
                 unlink('upload/funds/' . $old_image);
             }
 
             $imageName = $image->getRandomName();
             $image->move('upload/funds/', $imageName);
 
             $data = [
                'donation_title' => $title,
                'donation_date' => $date,
                'donation_desc' => $description,
                'donation_cover' => $imageName
             ];
             $DonationModel->update($id, $data);
             return redirect()->to('AdminController/AdminFolder/DonationController')->with('success', 'News Updated Successfully!');
         } else {
             // Handle the case where the uploaded file is not valid
             // No file was uploaded, update other data
             $data = [
                'donation_title' => $title,
                'donation_date' => $date,
                'donation_desc' => $description,
             ];
             $DonationModel->update($id, $data);
             return redirect()->to('AdminController/AdminFolder/DonationController')->with('success', 'News Updated Successfully!');
         }
     
    }

    public function deletedonation(){
        $id = $this->request->getPost('id');
        $DonationModel = new DonationModel(); //passing model to an object
        $data = [
            'status' => 'disabled'     // changing the column "status" to "disabled"
        ];
        $DonationModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
       return redirect()->to('AdminController/AdminFolder/DonationController')->with('success','Job Deleted Successfully'); // redirecting to the given url
             
    }

    public function restoredonation($id){

        $DonationModel = new DonationModel(); //passing model to an object
        $data = [
            'status' => 'active'     // changing the column "status" to "disabled"
        ];
        $DonationModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
       return redirect()->to('AdminController/AdminFolder/DonationController')->with('success','Job Deleted Successfully'); // redirecting to the given url
             
    }



}
