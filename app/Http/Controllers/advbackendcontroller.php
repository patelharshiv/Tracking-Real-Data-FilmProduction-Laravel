<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class advbackendcontroller extends Controller
{
    public function index(Request $request){
        if(!empty(session('user_id'))){
            $userid = session('user_id');
        }
        if(!empty(session('fname')) && !empty(session('lname'))){
          $fname = session('fname');
          $lname = session('lname');
          $fullname = $fname." ".$lname;
        
        }
        $textarea12 = $request->textarea12;
        $ta1 = $request->ta1;
        $upload1 = $request->upload1;
        if(!(empty('upload1') && empty($textarea12) && empty($ta1))){
          $validator = Validator::make($req->all(), [
            'upload1' => 'mimes:jpeg,png,bmp,gif,svg',
        ]);
           if($validator->fails()){
               return redirect()->back();
           }else{
          $name = $request->upload1->getClientOriginalName();
          $advertise = new advertise;
          $advertise->image_dir = asset('storage/'.$name);
          $advertise->advertise_by = $fullname;
          $advertise->about_info = $textarea12;
          $advertise->user_id = $userid;
          $advertise->save();
          if(! $advertise->save()){
            App::abort(500, 'Error');
          }
          else{
              echo "success";
          }
        } 
      }else{
            $errorattachment="true";
        }
    }
}
