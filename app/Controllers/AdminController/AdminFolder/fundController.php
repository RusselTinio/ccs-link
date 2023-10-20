<?php

namespace App\Controllers\AdminController\adminFolder;

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
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);

 

        $data = [
            'funds' => $fetchFund->where('status', 'active')->findall(),
            'archi' => $fetchFund->where('status', 'disabled')->findall(),
            'adminInfo' => $adminInfo
        ]; 

        return view('admin/admin/fundraising-admin', $data);
    }


    public function storeFund()
    {
        $fundModel = new fundModel();

        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $date = $this->request->getPost('date');
        $contact = $this->request->getPost('contact');
        $contactInfo = $this->request->getPost('contactInfo');
       

        if( $img = $this->request->getFile('cover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('upload/funds', $ImageName);      
                $data = array(
                    'fund_title' => $title,
                    'fund_enddate' => $date,
                    'fund_desc' => $description,
                    'fund_contactperson' => $contact,
                    'fund_contactinfo' => $contactInfo,
                    'fund_cover' => $ImageName
                );
               
                $fundModel->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/fundController')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                'fund_title' => $title,
                'fund_enddate' => $date,
                'fund_desc' => $description,
                'fund_contactperson' => $contact,
                'fund_contactinfo' => $contactInfo,
            );
           
            $fundModel->insert($data);
        
            return redirect()->to('AdminController/AdminFolder/fundController')->with('success', 'Job Added Successfully!');
        }
        
    } else echo "error";
    }



    public function updateFund()
    {
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $date = $this->request->getPost('date');
        $contact = $this->request->getPost('contact');
        $contactInfo = $this->request->getPost('contactInfo');
        $image = $this->request->getFile('cover');


        $fundModel = new FundModel();
        $fundData = $fundModel->find($id);
 
         if (!$fundData['fund_cover']) {
             $old_image = 'none';
         } else {
             $old_image = $fundData['fund_cover'];
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
                'fund_title' => $title,
                'fund_enddate' => $date,
                'fund_desc' => $description,
                'fund_contactperson' => $contact,
                'fund_contactinfo' => $contactInfo,
                'fund_cover' => $imageName
             ];
             $fundModel->update($id, $data);
             return redirect()->to('AdminController/AdminFolder/fundController')->with('success', 'News Updated Successfully!');
         } else {
             // Handle the case where the uploaded file is not valid
             // No file was uploaded, update other data
             $data = [
                'fund_title' => $title,
                'fund_enddate' => $date,
                'fund_desc' => $description,
                'fund_contactperson' => $contact,
                'fund_contactinfo' => $contactInfo,
             ];
             $fundModel->update($id, $data);
             return redirect()->to('AdminController/AdminFolder/fundController')->with('success', 'News Updated Successfully!');
         }
     
    }

    public function deletefund(){
        $id = $this->request->getPost('id');
        $fundModel = new FundModel(); //passing model to an object
        $data = [
            'status' => 'disabled'     // changing the column "status" to "disabled"
        ];
        $fundModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
       return redirect()->to('AdminController/AdminFolder/fundController')->with('success','Job Deleted Successfully'); // redirecting to the given url
             
    }

    public function restorefund($id){

        $fundModel = new FundModel(); //passing model to an object
        $data = [
            'status' => 'active'     // changing the column "status" to "disabled"
        ];
        $fundModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
       return redirect()->to('AdminController/AdminFolder/fundController')->with('success','Job Deleted Successfully'); // redirecting to the given url
             
    }



}
