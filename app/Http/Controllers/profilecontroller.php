<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function index(Request $request){
        if(empty($request->session()->get('uname'))){
            return redirect('/');
        }
        return view('profile');
    }
}
