<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller{

    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function blog(){
        return view('blog');
    }

    public function blog_card(){
        return view('blog_card');
    }

    public function blog_single(){
        return view('blog_single');
    }

    public function gallery(){
        return view('gallery');
    }

    public function faq(){
        return view('faq');
    }

    public function contact(){
        return view('contact');
    }
}