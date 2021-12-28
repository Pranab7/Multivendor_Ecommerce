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

    // all pending orders
    public function getpendingOrders() {
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        $userSell = UserCart::all();
        return view('pendingOrders', compact('userInfo','userSell'));
    }
    // get edit order
    public function getEditOrder(Request $request) {
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        $cart = UserCart::where('id',$request->get('cart_id'))->first();
        return view('edit-order', compact('userInfo','cart'));
    }
     // post edit order
     public function postEditOrder(Request $request) {
         $status = $request->input('status');
         $cart = UserCart::where('id', $request->input('cart_id'));
         $cart->update(['status' => $status]);
         return redirect("pendingOrders");
     }
    public function getallUserBuying(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        $userCart = UserCart::all();
        return view("allUserBuying", compact('userInfo'));
    }
    public function getallUserSelling(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view("allUserSelling", compact('userInfo'));
    }

      // get selling by conditaion
      public function getselling(Request $request){
        $id = Auth::id();
        $seller_id = $request->get('user');
        $userSell = post::where('user_id', $seller_id)->get();
        
        $userInfo = UserContact::where('user_id', $id)->first();
        
        return view("selling",compact('userInfo', 'userSell'));
    }
    // buying
    public function getbuying(Request $request){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        $userCart = UserCart::where('buyer_id',$request->get('user'))->get();
        return view("buying", compact('userInfo', "userCart"));
    }
    // saving buy data
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
          $userCart->status = "pending";
          $userCart->game_password = $post->game_password;
          $userCart->security_q = $post->security_question;
          $userCart->bkash_no = $post->bkash_no;
          $userCart->game_id = $post->id;
          $userCart->save();
          $post = Post::where('id', $post_id);
          $post->update(['status' => 'sold']);
          return redirect('buying?user='.$buyer_id);

    }   

    public function cancelOrder(Request $request) {
        $cart_id = $request->get('cart_id');
        $post_id = $request->get('post_id');
        
        $cart = UserCart::where('id', $cart_id)->cursor();

        if(count($cart)) {
            $cart_buyer = UserCart::where('id', $cart_id)->first();
        
    
            if(Auth::id() != $cart_buyer->buyer_id) {
                return abort(404);
            }
            
            $delete_cart = UserCart::where('id', $cart_id)->delete();
            $update_post_status = Post::where('id', $post_id);
            $update_post_status->update(['status' => 'unsold']);
            return redirect('buying?user='.Auth::id());
        }
        else {
            return abort(404);
        }
        
       
    }

}