<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getGallery(){
        return view("pages.gallery");
    }
    public function getProduce(){
        return view("pages.produce");
    }
    public function getAbout(){
        return view("pages.about");
    }
    public function getNews(){
        return view("pages.news");
    }
}
