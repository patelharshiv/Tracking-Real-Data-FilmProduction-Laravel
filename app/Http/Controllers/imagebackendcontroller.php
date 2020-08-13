<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imagebackendcontroller extends Controller
{
    public function index(Request $request){
        if(!empty(session('user_id'))){
            $userid = session('user_id');
           }
           $file = $request->file;
           $myfile = $request->myfile;
           $myfile12 = $request->myfile12;
           $myfile13 = $request->myfile13;
           if(!empty($file)){
              $validator = Validator::make($request->all(), [
                'file1' => 'mimes:jpeg,png,bmp,gif,svg',
            ]);
               if($validator->fails()){
                   $errorattacment = true;
               }
             else{
               $errorattachment="false";
             }
             if ($errorattachment == "false") {
              $img_name = $request->file->getClientOriginalName();
              $img_dir = asset('storage/images/'.$request->file->getClientOriginalName());
               $query = profilepic::where('user_id',$userid)->first();
               $query->img_name = '$img_name';
               $query->img_dir = '$img_dir';
               $path = $request->file->storeAs('images', $img_name , 'public');
               $query->save();
             if(!$query->save())
             {
              $query1 = profilepic::where('user_id',$userid)->first();
             if($query1){
                 $img_dir = $query1->img_name;
                 return $img_dir;
               } 
             }
             else
             {
              $row = profilepic::where('user_id',$userid)->first();
             if($row){
                 $img_dir = $row->img_name;
                 return $img_dir;
               } 
             }
                 
             }
           
           
           }
           
           
           if(!empty($myfile)){
            $validator = Validator::make($request->all(), [
              'myfile' => 'mimes:jpeg,png,bmp,gif,svg',
          ]);
             if($validator->fails()){
                 $errorattacment = "true";
             }else{
               $errorattachment="false";
             }
             return $errorattachment;
           }
           
           
           if(!empty($myfile12)){
            $img_name = $request->myfile12->getClientOriginalName();
            $img_dir = asset('storage/images/'.$request->myfile12->getClientOriginalName());
            $validator = Validator::make($request->all(), [
              'myfile12' => 'mimes:jpeg,png,bmp,gif,svg',
          ]);
             if($validator->fails()){
                 $errorattacment = "true";
             }
             else{
               $errorattachment="true";
             }
           return $errorattachment;
           }
           
           if(!empty($myfile13)){
            $video_name = $request->myfile13->getClientOriginalName();
            $video_url = asset('storage/images/'.$request->myfile13->getClientOriginalName());
            $validator = Validator::make($request->all(), [
              'myfile13' => 'mimes:m4v,avi,flv,mp4,mov',
          ]);
             if($validator->fails()){
                 $errorattacment = "true";
             }
             else{
               $errorattachment="true";
             }
           return $errorattachment;
           }
           
           if (!(empty($myfile12) && empty($myfile13))) {
           if($errorattachment == "false"){
             $releasetrailer = new releasetrailer;
             $releasetrailer->user_id = $userid;
             $releasetrailer->image_name = $img_name;
             $releasetrailer->image_dir = $img_dir;
             $releasetrailer->video_name = $vide_name;
             $releasetrailer->video_url = $video_url;
             $path = $request->myfile12->storeAs('images', $image_name , 'public');
             $path = $request->myfile13->storeAs('images', $video_name , 'public');
             $releasetrailer->save();
                 if(! $releasetrailer->save())
                 {
                   return "Something went wrong please try again later";
                 }
                 else{
                   return "done";
                 }
           
           }
           
           }
    }
}
