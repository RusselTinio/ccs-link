<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\NewsModel;
class Home extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function index()
    {
       $newsModel = new NewsModel();
       $newsData = $newsModel->findAll();
       $data = [
        'newsData' => $newsData,
       ];
        return view('home',$data);
        
    }
    public function aboutUs(){
        return view('about-us');
    }
}
