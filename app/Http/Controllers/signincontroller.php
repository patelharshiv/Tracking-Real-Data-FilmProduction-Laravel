<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form12;
use App\analyst;
use App\productionmanager123;
use App\admin;

class signincontroller extends Controller
{
    public function index(Request $request){
  $errorfname = true;
  $errorlname = true;
  $erroremail = true;
  $errormno = true;
  $erroruname = true;
  $errorpwd = true;
  $first= "guest";
  $second= "Reviewer";
  $third= "AnalystExpert";
  $fourth= "Admin";
  $fifth = "productionmanager";
/*if(!empty($uname))
{
	$uname=$uname);
	session('uname)=$uname;
}*/
$fname = $request->fname;
$lname = $request->lname;
$email = $request->email;
$mno = $request->mno;
$uname1 = $request->uname1;
$pwd1 = $request->pwd1;
$pwd2 = $request->pwd2;
$rpwd = $request->rpwd;
if(!empty($fname))
{
	if(empty($fname)){
		$errorfname=true;
		return "Please Enter firstname..";
	}
	else{
		$errorfname=false;
	}
}
if(!empty($lname))
{
	if(empty($lname)){
		$errorlname=true;
		return "Please Enter Lastname..";
	}
	else{
		$errorlname=false;
	}
}
if(!empty($email))
{
    $row = form12::where('email',$email)->first();
	if(empty($email)){
		$erroremail=true;
		return "Please Enter email..";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$erroremail=true;
		return "Please Enter valid email..";	
	}
	elseif(!empty($row)){
		$erroremail=true;
		return "Already A registered email";
	}
	else{
		$erroremail=false;
	}
}
if(!empty($mno))
{
	$mno=$mno;
	$mno1 = strlen($mno);
	if(empty($mno)){
		$errormno=true;  
		return "Please Enter mobile no..";
	}
	elseif (($mno1)<10) {
		# code...
		$errormno=true;
		return "enter valid no";
	}
	elseif (!is_numeric($mno)) {
		# code...
		$errormno=true;
		return "enter Valid No Please";
	}
	else{
		$errormno=false;
	}
}
if(!empty($uname1))
{
    $row = form12::where('username',$uname1)->first();
	$uname=$uname1;
	if(!empty($row)){
		$erroruname=true;
		return "Already a user found";
	}
	elseif(preg_match('/[\s]/i', $uname)){
		$erroruname=true;
		return "space is not allowed";
	}
	elseif (preg_match('/[^a-zA-Z0-9]/i', $uname)) {
		$erroruname=true;
		return "Only letters and numbers are allowed";
	}
	elseif(empty($uname)){
		$erroruname=true;
		return "Please Enter username..";
	}
	else{
		$erroruname=false;
	}
}
if(!empty($pwd1)){
	$pwd = $pwd1;
	$pwd2 = strlen($pwd);
	if(preg_match('/[\s]/i', $pwd)){
		$errorpwd=true;

		return "space not allowed";
	}
	elseif(empty($pwd)){
		$errorpwd=true;
		return "Please Enter Password";
	}
	elseif(($pwd2)<8){
		$errorpwd=true;
		return "Password length too small";
	}
	elseif(!preg_match('/[0-9]/i', $pwd)) {
		# code...
		return "One number compulsary";
	}
	elseif(!preg_match('/[\!\@\#\$\%\^\&\*]/i', $pwd)) {
		# code...
		return "Special Character Required";
	}
	elseif(!preg_match('/[A-Z]/i', $pwd)) {
		# code...
		return "Uppercasr Letter Required";
    }
	else{
		$errorpwd=false;
	}
	
}
if(!empty($pwd2)&&!empty($rpwd))
{
	$pwd=$pwd2;
	$rpwd=$rpwd;
	if($pwd == $rpwd){
		$errorpwd=false;
	}
	else{
		$errorpwd=true;
		return "Password Mismatched";
	}
}
if(!(empty($fname) && empty($lname) && empty($mno) && empty($email) && empty($pwd1) && empty($uname1) && empty($rpwd) && empty($pwd2))){
if(($errorfname==false) && ($errorlname==false) && ($erroremail==false) && ($errormno==false) && ($erroruname==false)&& ($errorpwd==false))
{
    $form12 = new form12;
    $form12->firstname = $fname;
    $form12->lastname = $lname;
    $form12->Mobileno = $mno;
    $form12->email = $email;
    $form12->username = $uname1;
    $form12->password = $pwd1;
    $form12->save();
    if ( ! $form12->save())
    {
        App::abort(500, 'Error');
    }else
	{
        return "You are Successfully Registered..";
        $row = form12::where('username',$uname1)->first();
		if($row){
			$userid = $row->id;
		}
		else{
			$userid = 0;
			return $userid;
		}
        $profilepic = new profilepic;
        $profilepic->user_id = $userid;
        $profilepic->save();
        if(! $profilepic->save() ){
            App::abort(500, 'Error');
        } 
        $knowingpublic = new knowingpublic;
        $knowingpublic->user_id = $userid;
        if(! $knowingpublic->save() ){
            App::abort(500, 'Error');
        }
	}
}
}
$checkanswered = $request->checkanswered;
if (!empty($checkanswered)) {
	if(($request->session()->get('work') == "productionmanager")){
		return "productionmanager";
	}
	else{
		if(!empty(session('uname'))){
		$uname1 = session('uname');
		$row = form12::where('username',$uname1);
		if($row){
			$answer = $row->answered;
		}
		return $answer;
	}
	else {
		return "guest";
	}	
	}
	
		
}

}
}
