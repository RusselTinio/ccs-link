<?php

namespace App\Controllers\AdminController\adminFolder;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\NewsModel;
use App\Models\EventsModel;
use App\Models\AdminModel;

class NewsController extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }

    public function index()
    {
        $adminModel = new AdminModel();
        $loggedUser = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedUser);

        $newsModel = new NewsModel();
        $eventsModel = new EventsModel();
        $newsData = $newsModel->where('Status', 'active')->findall();
        $newsDataArchive = $newsModel->where('Status', 'disabled')->findall();

        $eventsData = $eventsModel->where('status', 'active')->findall(); 
        $eventsDataArchive = $eventsModel->where('status', 'disabled')->findall();

        $data = [
            'adminInfo' => $adminInfo,
            'newsData' => $newsData,
            'eventsData' => $eventsData,

            'newsDataArchive' => $newsDataArchive,
            'eventsDataArchive' => $eventsDataArchive
        ];
        
        
        return view('admin/admin/listofevents-admin', $data);
    }

    public function createNews()
    {
        
        return view('newsevent/NewsAdd');
    }

    public function createEvents()
    {
        
        return view('newsevent/EventsAdd');
    }

    public function editNews()
    {
        $id = $this->request->getPost('editId');
        $fetchNews= new NewsModel();
        $data['news']=$fetchNews->where('id',$id)->first();

        return view('newsevent/NewsEdit',$data);
        return view('newsevent/MainPage', $data);
    }

    public function editEvents($id)
    {
        $fetchEvents= new EventsModel();
        $data['events']=$fetchEvents->where('id',$id)->first();

        return view('newsevent/EventsEdit',$data);
    }

    public function storeNews()
    {
        $newsModel = new NewsModel();
        $currentDate = date('F j, Y');
       

        if($img = $this->request->getFile('news-cover')){
           
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();
                $img->move('upload/news', $ImageName);
                $data = array(
                    'news_title' => $this->request->getPost('title'),
                    'news_desc' => $this->request->getPost('description'),
                    'date_posted' =>$currentDate,
                    'news_image' => $ImageName,

                );
               
                $newsModel->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                    'news_title' => $this->request->getPost('title'),
                    'news_desc' => $this->request->getPost('description'),
                    'date_posted' =>$currentDate,


            );
           
            $newsModel->insert($data);
        
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        }
        
    } 
    
        
    }

    public function storeEvents()
    {
        $eventsModel = new EventsModel();

        if($img = $this->request->getFile('eventsCover')){
           
            if($img->isValid() && ! $img->hasMoved()){
                $ImageName = $img->getRandomName();

                $img->move('upload/events', $ImageName);
                $data = array(
                    'events_title' => $this->request->getPost('eventsTitle'),
                    'events_desc' => $this->request->getPost('eventsDescription'),
                    'events_date' => $this->request->getPost('eventsDate'),
                    'events_image' => $ImageName,

                );

                $eventsModel->insert($data);
            
                return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        } else{
            $data = array(
                'events_title' => $this->request->getPost('eventsTitle'),
                'events_desc' => $this->request->getPost('eventsDescription'),
                'events_date' => $this->request->getPost('eventsDate'), 
              
 


            );
           
            $eventsModel->insert($data);
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'Job Added Successfully!');
        }
        
    } 
    }


    public function updateNews()
{
    $id = $this->request->getPost('id');
    $newsModel = new NewsModel();
    $newsData = $newsModel->find($id);
    $image = $this->request->getFile('newsCover');

    if (!$newsData['news_image']) {
        $old_image = 'none';
    } else {
        $old_image = $newsData['news_image'];
    }

    // Check if a file was uploaded
    if ($image !== null) {
        // File was uploaded
        if ($image->isValid() && !$image->hasMoved()) {
            if (file_exists('upload/news/' . $old_image)) {
                unlink('upload/news/' . $old_image);
            }

            $imageName = $image->getRandomName();
            $image->move('upload/news/', $imageName);

            $data = [
                'news_title' => $this->request->getPost('newsTitle'),
                'news_desc' => $this->request->getPost('newsDescription'),
                'news_image' => $imageName,
            ];
            $newsModel->update($id, $data);
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'News Updated Successfully!');
        } else {
             // No file was uploaded, update other data
        $data = [
            'news_title' => $this->request->getPost('newsTitle'),
            'news_desc' => $this->request->getPost('newsDescription'),
        ];
        $newsModel->update($id, $data);
        return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'News Updated Successfully!');
        }
    } 
}



    public function updateEvents()
    {
       $id = $this->request->getPost('id');
       $title = $this->request->getPost('eventsTitle');
       $description = $this->request->getPost('eventsDescription');
       $date = $this->request->getPost('eventsDate');
       $image = $this->request->getFile('eventsCover');

       $eventsModel = new EventsModel();
       $eventsData = $eventsModel->find($id);

        if (!$eventsData['events_image']) {
            $old_image = 'none';
        } else {
            $old_image = $eventsData['events_image'];
        }

        // Check if a file was uploaded

        // File was uploaded
        if ($image->isValid() && !$image->hasMoved()) {
            if (file_exists('upload/events/' . $old_image)) {
                unlink('upload/events/' . $old_image);
            }

            $imageName = $image->getRandomName();
            $image->move('upload/events/', $imageName);

            $data = [
                'events_title' => $title,
                'events_desc' => $description,
                'events_date' => $date,
                'events_image' => $imageName,
            ];
            $eventsModel->update($id, $data);
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'News Updated Successfully!');
        } else {
            // Handle the case where the uploaded file is not valid
            // No file was uploaded, update other data
            $data = [
                'events_title' => $title,
                'events_desc' => $description,
                'events_date' => $date,

            ];
            $eventsModel->update($id, $data);
            return redirect()->to('AdminController/AdminFolder/NewsController')->with('success', 'News Updated Successfully!');
        }

   
    } 
       

    

   public function deleteNews(){
        $id = $this->request->getPost('id');
   
       $newsModel = new NewsModel(); //passing model to an object
       $data = [
           'status' => 'disabled'     // changing the column "status" to "disabled"
       ];
       $newsModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
      return redirect()->to('AdminController/AdminFolder/NewsController/'); // redirecting to the given url
            
   }
   public function deleteEvents(){
    $id = $this->request->getPost('id');
    
    $eventsModel = new EventsModel(); //passing model to an object
    $data = [
        'status' => 'disabled'     // changing the column "status" to "disabled"
    ];
    $eventsModel-> update($id,$data); // passing the data which contains the status==disabled to the update function of the model
    return redirect()->to('AdminController/AdminFolder/NewsController/index')->with('success','Event Deleted Successfully'); // redirecting to the given url
         
}

   public function restoreNews($id){
       $restoreModel = new NewsModel();
       $data = [
           'status' => 'active'  // same as the delete but changing the status to active
       ];
       $restoreModel-> update($id,$data);
       return redirect()->to('admin/news_and_events')->with('success','News Restored Successfully');
            
   }
   public function restoreEvents($id){
    $restoreModel = new EventsModel();
    $data = [
        'status' => 'active'  // same as the delete but changing the status to active
    ];
    $restoreModel-> update($id,$data);
    return redirect()->to('admin/news_and_events')->with('success','News Restored Successfully');
         
}


}
