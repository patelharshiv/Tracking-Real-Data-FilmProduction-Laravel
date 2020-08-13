<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usersession;
use App\knowingpublic;

class guestcontroller extends Controller
{
    public function index(Request $request)
    {

        $var = $request->input('y');
        if($var == "guest"){    
        $usersession = usersession::orderBy('id','desc')->limit(1)->get();
        if(empty($usersession))
        {
                $first = 507;
                $request->session()->put('first',$first);
                $info = $request->session()->get('first');
                try{
                $usersessions = new usersession;
                $usersessions->guest_session = $request->session()->get('first');
                $usersessions->timestamps = false;
                $usersessions->save();
            }catch(\Exception $e){
                echo $e->getMessage();
            }
            try{
                $know = new knowingpublic;
                $know->user_id = $request->session()->get('first');
                $know->timestamps = false;
                $know->save();
            }catch(\Exception $e){
                echo $e->getMessage();
            }
            }
            else{
                foreach($usersession as $user){
                    $sess = $user->guest_session;
                }
                $first = ($sess + (507+3));
                $request->session()->put('first',$first);
                $info = $request->session()->get('first');
                try{
                $usersessions = new usersession;
                $usersessions->guest_session = $request->session()->get('first');
                $usersessions->timestamps = false;
                $usersessions->save();
            }catch(\Exception $e){
                echo $e->getMessage();
            }
                try{
                $know = new knowingpublic;
                $know->user_id = $request->session()->get('first');
                $know->timestamps = false;
                $know->save();
            }catch(\Exception $e){
                echo $e->getMessage();
            }
            }
            return $var;
        }
        else{
            return $var;
        }
    }
}
