<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserContact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\UserCategory;

class IndexController extends Controller
{
    public function getIndex() {
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        if(Auth::user() != null){
            $email = Auth::user()->email;
            $userCategory = UserCategory::where('email', $email)->first()->user_category;
        } else {
            $userCategory = "null";
        }
        // $userPost = Post::where('user_id', $id)->get();
        $userPost = Post::all();
        return view('index', compact('userInfo', 'userPost', 'userCategory'));
    }
  
  
    public function getselling(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view("selling",compact('userInfo'));
    }

    public function gethowtobuy() {
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view('howtobuy',compact('userInfo'));
    }
    public function getadmin() {
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        $userPost = Post::where('user_id', $id)->get();
        return view('admin', compact('userInfo', 'userPost'));
    }

    public function getpendingOrders() {
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view('pendingOrders', compact('userInfo'));
    }
    public function getallUserBuying(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view("allUserBuying", compact('userInfo'));
    }
    public function getallUserSelling(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view("allUserSelling", compact('userInfo'));
    }

    // buying
    public function getbuying(Request $request){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
      
        return view("buying", compact('userInfo',));
    }
    // seving buy data
    public function saveBuyData(Request $request) {
          $seller = $request->get('seller');
          $buyer = $request->get('buyer');
          $post = $request->get('post');
          
    }   

}