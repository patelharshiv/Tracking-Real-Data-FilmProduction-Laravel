<?php

namespace App\Http\Controllers;
use App\knowingpublic;

use Illuminate\Http\Request;

class checkansweredcontroller extends Controller
{
    public function index(Request $request){
    if($request->session()->get('work')){
        return "productionmanager";
    }else{
        if(!empty($request->session()->get('uname'))){
            $uname1 = $request->session()->get('uname');
            $check = form12::where("username",$uname1)->first();
            $answer = $check->answered;
            return $answer;
        }
        else{
            return "guest";
        }
    }
    }
}
