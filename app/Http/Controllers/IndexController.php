<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex() {
        return view('index');
    }
    public function getPost(){
        return view("post");
    }
    public function geteditProfile(){
        return view("editProfile");
    }
    public function getselling(){
        return view("selling");
    }
}
