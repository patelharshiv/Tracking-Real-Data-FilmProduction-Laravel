<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function index(Request $request){
        $request->session()->flush();
        return redirect('/index.php');
    }
}
