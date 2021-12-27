<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFil;
use App\Models\Post;
use App\Models\UserContact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    //
    public function getPost(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view("post",compact('userInfo'));
    }
    public function postPost(Request $request) {
        $token = $request->session()->token();
        $token = csrf_token();

        if($request->hasFile('game_image')) {
            if($request->file('game_image')->isValid()) {

                $photo = $request->file('game_image');
                $extension = $photo->extension();
                $filename = date("Ydmhisa").$photo->getClientOriginalName();
                $photo->storeAs('public',"$filename");
                $post = new Post;
                $post->user_id = $request->input('user_id');
                $post->game_name = $request->input('game_name');
                $post->game_email = $request->input('game_email');
                $post->game_password = $request->input('game_password');
                $post->game_details	= $request->input('game_details');
                $post->game_image = $filename;
                $post->security_question = $request->input('question');
                $post->game_price = $request->input('price');
                $post->contact_info = $request->input('contact');
                $post->save();
                return redirect('/');
            }
            
            
        }
      
       
    }
}
