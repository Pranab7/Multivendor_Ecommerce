<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserContact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\UserCategory;
use App\Models\UserCart;

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
        $userCart = UserCart::where('buyer_id',$request->get('user'))->get();
        return view("buying", compact('userInfo', "userCart"));
    }
    // seving buy data
    public function saveBuyData(Request $request) {
          $seller_id = $request->get('seller');
          $buyer_id = $request->get('buyer');
          $post_id = $request->get('post');
          $seller = User::where('id', $seller_id)->first();
          $buyer = User::where('id', $buyer_id)->first();
          $post = Post::where('id', $post_id)->first();
          $userCart = new UserCart;
          $userCart->seller_name = $seller->name;
          $userCart->seller_id = $seller->id;
          $userCart->buyer_name = $buyer->name;
          $userCart->buyer_id = $buyer->id;
          $userCart->game_name = $post->game_name;
          $userCart->email = $post->game_email;
          $userCart->status = "peinding";
          $userCart->game_password = $post->game_password;
          $userCart->security_q = $post->security_question;
          $userCart->bkash_no = $post->bkash_no;
          $userCart->save();
          $post = Post::where('id', $post_id);
          $post->update(['status' => 'sold']);
          return redirect('buying?user='.$buyer_id);
    }   

}