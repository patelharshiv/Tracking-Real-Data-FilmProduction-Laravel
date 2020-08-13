<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\form12;
use App\productionmanager123;
use App\admins;
use App\analyst;

class unamecontroller extends Controller
{
    public function index(Request $request){
        $uname = $request->uname;
        if(empty($uname)){
            return "Please enter Username";
        }
        $y = $request->z;
        if($y == "!----Select From Below----!"){
            return "Please Select Loginas";
        }
        else if($y == "productionmanager"){
           $uname1 = productionmanager123::where('uname',$uname)->first();
           if(empty($uname1)){
               return "No such user found";
           }

        }else if($y == "Reviewer"){
            $uname1 = form12::where('username',$uname)->first();
            if(empty($uname1)){
                return "No such user found";
            }

        }else if($y == "AnalystExpert"){
            $uname1 =analyst::where('username',$uname)->first();
            if(empty($uname1)){
                return "No such user found";
            }
        }
        else{
            $uname1 = admins::where('uname',$uname)->first();
            if(empty($uname1)){
                return "No such user found";
            }
        }

    }
}
