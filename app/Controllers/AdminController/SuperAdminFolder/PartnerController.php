<?php


namespace App\Controllers\AdminController\SuperAdminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\JobModel;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\PartnerModel;



class PartnerController extends BaseController
{
    public function index()
    {
        $fetchJob = new JobModel();
        $adminModel = new AdminModel();
        $PartnerModel = new PartnerModel();
        $joblist = $PartnerModel->orderBy("CASE WHEN approval = 'pending' THEN 0 ELSE 1 END, approval ASC")->findAll();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);
        $loggedAdmin = $adminModel->find( $loggedUser);

        $data = [
            'adminInfo' => $adminInfo,
            'joblist' => $joblist,
            'jobData' => $fetchJob->where(array('status'=> 'active','partnerId'=>$loggedUser))->orderBy("CASE WHEN approval = 'pending' THEN 0 ELSE 1 END, approval ASC")->findall(),
            'archi' => $fetchJob->where('status', 'disabled')->findall(),
            'loggedUser' => $loggedAdmin
        ];
        //var_dump($data['adminInfo']); 
        return view('admin/superadmin/joblist', $data);
    }

    public function storejobPartner()
    {
        $insertJob = new PartnerModel();
        $insertToAdmin = new JobModel();
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
        }
        
    }
    
        $data = array(
            'partner_title' => $this->request->getPost('jobTitle'),
            'partner_company' => $this->request->getPost('jobCompany'),
            'partner_desc' => $this->request->getPost('jobDescription'),
            'partner_category' => $this->request->getPost('jobCategory'),
            'partner_address' => $this->request->getPost('jobAddress'),
            'partner_city' => $this->request->getPost('jobCity'),
            'partner_salary' => $jobSalary,
            'partner_email' => $this->request->getPost('jobEmail'),
            'partner_contacts' => $this->request->getPost('jobContacts'),
            'partner_website' => $this->request->getPost('jobWebsite'),
            'partner_cover' => $ImageName,

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
        $insertToAdmin->insert($data);
        
       

        return redirect()->to('superadmin/job_list')->with('success', 'Another Job Added Successfully!');
    }

    public function updateJobPartner()
    {
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

       

        $jobPartner = new PartnerModel();
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
                'job_city' => $city,
                'job_salary' => $salary,
                'job_email' => $email,
                'job_contact' => $contact,
                'job_website' => $website,
                'job_cover' => $imageName
             ];
             $jobPartner->update($id, $data);
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
                'job_city' => $city,
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
