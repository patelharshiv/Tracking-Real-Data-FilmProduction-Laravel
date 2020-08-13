<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posterbackendcontroller extends Controller
{
    public function index(Request $request){
        if(!empty(session('user_id'))){
            $userid = session('user_id');
           }
           $attachment1 = $request->attachment1;
           $textarea12 = $request->textarea12;
           $text12 = $request->text12;

           if(!((empty($attachment) && empty($textarea12) && empty($text12)))){
            if(!empty($attachment)){
                $validator = Validator::make($request->all(), [
                  'attachment' => 'mimes:jpeg,png,bmp,gif,svg',
              ]);if($validator->fails()){
                     $errorattacment = true;
            }else{
               $errorattachment="false";
             }
             if ($errorattachment == "false") {
                $img_name = $request->file->getClientOriginalName();
                $img_dir = asset('storage/'.$request->file->getClientOriginalName());
                 $query3 = "INSERT INTO movies() VALUES('$first')";
                 if(!mysqli_query($conn,$query3))
                 {
                   echo "Something went wrong please try again later";
                 }
                 
             }
            }
           
           
           }
           
    }
}
