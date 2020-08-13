<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form12;
use App\productionmanager123;
use App\admins;
use App\analyst;

class checkrecordcontroller extends Controller
{
    public function index(Request $request){
        $request->session()->flush();
        $uname = $request->uname;
        $password = $request->pwd;
        $z = $request->z;
        if(empty($uname)){
            return "Please enter Username";
        }
        if(empty($password)){
            return "Please enter password to login to your account";
        }
        $y = $request->z;
        if($y == "!----Select From Below----!"){
            return "Please Select Loginas";
            if(empty($uname)){
                return "Please enter Username";
            }
        }
        else if($y == "productionmanager"){
           $uname1 = productionmanager123::where('uname',$uname)->first();
           if(empty($uname1)){
               return "No such user found";
           }else{
           if($password != $uname1->password){
                return "Password does not matched";
           }
           else{
               $request->session()->put('uname',$uname1->uname);
               $request->session()->put('user_id',$uname1->id);
               $request->session()->put('work',$y);
               $request->session()->put('timestamp',time());
               return "You made it right Sir!!!!!";

           }
        }
        }else if($y == "Reviewer"){
            $uname1 = form12::where('username',$uname)->first();
            if(empty($uname1)){
                return "No such user found";
            }else{
            if($password != $uname1->password){
                return "Password does not matched";
           }
           else{
               $request->session()->put('fname',$uname1->firstname);
               $request->session()->put('lname',$uname1->lastname);
               $request->session()->put('user_id',$uname1->id);
               $request->session()->put('email',$uname1->email);
               $request->session()->put('mno',$uname1->Mobileno);
               $request->session()->put('uname',$uname);
               $request->session()->put('work',$y);
               $request->session()->put('timestamp',time());
               return "You made it right Sir!!!!!";
           }
        }

        }else if($y == "AnalystExpert"){
            $uname1 =analyst::where('username',$uname)->first();
            if(empty($uname1)){
                return "No such user found";
            }else{
            if($password != $uname1->Password){
                return "Password does not matched";
           }else{
               $request->session()->put('uname',$uname1->username);
               $request->session()->put('timestamp',time());
               return "You made it right Sir!!!!!";
           }
        }
        }
        else{
            $uname1 = admins::where('uname',$uname)->first();
            if(empty($uname1)){
                return "No such user found";
            }
            else{
            if($password != $uname1->password){
                return "Password does not matched";
           }else{
            $request->session()->put('uname',$uname1->username);
            $request->session()->put('timestamp',time());
            return "You made it right Sir!!!!!";
        }
        }
        }

        
    }
}
