<?php

namespace App\Controllers\AdminController\SuperAdminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\JobModel;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\PartnerModel;

class JobController extends BaseController
{
    public function index()
    {
        $loggedAdminId = session()->get('loggedAdmin');
        $loggedAdmin = $adminModel->find($loggedAdminId);
        $adminModel = new AdminModel();
        $jobModel = new JobModel();
        $PartnerModel = new PartnerModel();
        $jobData = $jobModel->where('partnerId',$loggedAdminId)->findAll();
        $joblist = $PartnerModel->orderBy("CASE WHEN approval = 'pending' THEN 0 ELSE 1 END, approval ASC")->findAll();
       
       

        $data = [
            'jobData' => $jobData,
            'joblist' => $joblist,
            'adminInfo' => $loggedAdmin
            
        ];
        
        return view('superadmin/joblist', $data);
    }

    public function createJob()
    {
        
        return view('jobposting/jobadd');
    }

    public function editJob($id)
    {
       $fetchJob= new JobModel();
        $data['jobs']=$fetchJob->where('id',$id)->first();

        return view('jobposting/jobedit',$data);
    }

    public function storeJob($Pid)
    {
        
        $insertJob = new JobModel();
        $jobSalary = $this->request->getPost('jobSalary');
        if(isset($jobSalary)&&!empty($jobSalary)){
            number_format($jobSalary, 2, '.', ',');
        } else{
            $jobSalary = '';
        }

        if($img = $this->request->getFile('job_cover')){
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('upload/jobs', $ImageName);      
                $data = array(
                    'partnerId' => $id,
                    'job_title' => $this->request->getPost('jobTitle'),
                    'job_company' => $this->request->getPost('jobCompany'),
                    'job_description' => $this->request->getPost('jobDescription'),
                    'job_category' => $this->request->getPost('jobCategory'),
                    'job_address' => $this->request->getPost('jobAddress'),
                    'city' => $this->request->getPost('jobCity'),
                    'job_salary' => $jobSalary,
                    'job_email' => $this->request->getPost('jobEmail'),
                    'job_contacts' => $this->request->getPost('jobContacts'),
                    'job_website' => $this->request->getPost('jobWebsite'),
                    'job_cover' => $ImageName,

                );
               
                $insertJob->insert($data);
            
                return redirect()->to('superadmin/job_list')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                'partnerId' => $Pid,
                'job_title' => $this->request->getPost('jobTitle'),
                'job_company' => $this->request->getPost('jobCompany'),
                'job_description' => $this->request->getPost('jobDescription'),
                'job_category' => $this->request->getPost('jobCategory'),
                'job_address' => $this->request->getPost('jobAddress'),
                'job_salary' => $jobSalary,
                'job_email' => $this->request->getPost('jobEmail'),
                'job_contacts' => $this->request->getPost('jobContacts'),
                'job_website' => $this->request->getPost('jobWebsite'),


            );
           
            $insertJob->insert($data);
        
            return redirect()->to('superadmin/job_list')->with('success', 'Job Added Successfully!');
        }
        
    }
    
        
    }

    public function approval(){
        $id = $this->request->getPost('id');
        $approval = $this->request->getPost('approval');
        $jobModel = new JobModel(); //passing model to an object
        $data = [
            'approval' => $approval     // changing the column "status" to "disabled"
        ];
        $jobModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
        return redirect()->to('superadmin/job_list')->with('success','Job Deleted Successfully'); // redirecting to the given url
            
    }

   public function deleteJob(){
    $id = $this->request->getPost('id');
    $deleteModel = new JobModel(); //passing model to an object
    $data = [
        'status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $deleteModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
   return redirect()->to('superadmin/job_list')->with('success','Job Deleted Successfully'); // redirecting to the given url
         
}

public function restore($id){
    $restoreModel = new JobModel();
    $data = [
        'status' => 'active'  // same as the delete but changing the status to active
    ];
    $restoreModel-> update($id,$data);
    return redirect()->to('superadmin/job_list')->with('success','Job Restored Successfully');
         
}
public function updateJob()
    {
        // for admin
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('jobTitle');
        $company = $this->request->getPost('jobCompany');
        $description = $this->request->getPost('jobDescription');
        $category = $this->request->getPost('jobCategory');
        $address = $this->request->getPost('jobAddress');
        $city = $this->request->getPost('jobCity');
        $salary = $this->request->getPost('jobSalary');
        $email = $this->request->getPost('jobEmail');
        $contact = $this->request->getPost('jobContacts');
        $website = $this->request->getPost('jobWebsite');
        $image = $this->request->getFile('job_cover');

       

        $jobModel = new JobModel();
        $jobData = $jobModel->find($id);
 
         if (!$jobData['job_cover']) {
             $old_image = 'none';
         } else {
             $old_image = $jobData['job_cover'];
         }
        
 
         // Check if a file was uploaded
 
         // File was uploaded
         if ($image->isValid() && !$image->hasMoved()) {
             if (file_exists('upload/jobs/' . $old_image)) {
                 unlink('upload/jobs/' . $old_image);
             }
 
             $imageName = $image->getRandomName();
             $image->move('upload/jobs/', $imageName);
 
             $data = [
                'job_title' => $title,
                'job_company' => $company,
                'job_description' => $description,
                'job_category' => $category,
                'job_address' => $address,
                'city' => $city,
                'job_salary' => $salary,
                'job_email' => $email,
                'job_contact' => $contact,
                'job_website' => $website,
                'job_cover' => $imageName
             ];
             $jobModel->update($id, $data);
             return redirect()->to('superadmin/job_list')->with('success', 'News Updated Successfully!');
         } else {
             // Handle the case where the uploaded file is not valid
             // No file was uploaded, update other data
             $data = [
                'job_title' => $title,
                'job_company' => $company,
                'job_description' => $description,
                'job_category' => $category,
                'job_address' => $address,
                'city' => $city,
                'job_salary' => $salary,
                'job_email' => $email,
                'job_contact' => $contact,
                'job_website' => $website,
             ];
             $jobModel->update($id, $data);
             return redirect()->to('superadmin/job_list')->with('success', 'News Updated Successfully!');
         }


        
     
    }
}
