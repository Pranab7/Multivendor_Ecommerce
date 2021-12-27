<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFil;
use Illuminate\Http\Request;
use App\Models\UserContact;
use App\Models\User;


class UserController extends Controller
{
      
    public function getEditProfile(){
        $id = Auth::id();
        $userInfo = UserContact::where('user_id', $id)->first();
        return view("editProfile", compact('userInfo'));
    }

    public function postEditProfile(Request $request) {
        $token = $request->session()->token();
        $token = csrf_token();

        $user_name = $request->input('user_name');
        $user_email = $request->input('email');
        $user_phone = $request->input('phone_no');
        $id = (int)$request->input("user_id");

        if($request->hasFile('user_image')) {
            if($request->file('user_image')->isValid()) {

                $photo = $request->file('user_image');
                $extension = $photo->extension();
                $filename = date("Ydmhisa").$photo->getClientOriginalName();
                $photo->storeAs('public',"$filename");
                
                $user = User::find($id); 
                $userContact = UserContact::where("user_id",$id)->cursor();
               
                if(!empty($user)) {
                   $user->name = $user_name;
                   $user->email = $user_email;
                   $user->save();
                  
             
                   if(count($userContact)) {
                        $userContact = UserContact::where("user_id",$id);
                       $userContact->update(['user_image'=> $filename,"phone_no" => $user_phone]);
                   } else {
                       echo "contact not found";
                       $userContact = new UserContact;
                       $userContact->user_image = $filename;
                       $userContact->phone_no = $user_phone;
                       $userContact->user_id = $id;
                       $userContact->save();

                   }
                    return redirect('/editProfile');
                } else {
                    echo "user not found";
                }
            }      
        } else {
            return redirect('/editProfile');
        }
    }
}
