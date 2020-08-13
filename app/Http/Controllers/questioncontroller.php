<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\knowingpublic;

class questioncontroller extends Controller
{
    public function index(Request $request){
        if(!empty($request->session()->get('user_id'))){
            $id = $request->session()->get('user_id');
        }else{
            $id = $request->session()->get('first');
        }
        $a = $request->a;
        if(!empty($a)){
        $question1 = $request->readRecord;
        $knowingpublic = knowingpublic::where('user_id',$id)->first();
        $knowingpublic->question1 = $question1;
        $knowingpublic->save();
        return $question1;
        }
        $b = $request->b;
        if(!empty($b)){
            $question2 = $request->readRecord1;
            $knowingpublic = knowingpublic::where('user_id',$id)->first();
            $knowingpublic->question2 = $question2;
            $knowingpublic->save();
            return $question2;
        }
        $c = $request->c;
        if(!empty($c)){
        $question3 = $request->readRecord2;
        $knowingpublic = knowingpublic::where('user_id',$id)->first();
        $knowingpublic->question3 = $question3;
        $knowingpublic->save();
        return $question3;
        }
        $d = $request->d;
        $e = $request->e;
        $f = $request->f;
        if(!(empty($d) || empty($e) || empty($f))){
        $question40 = $request->readRecord3;
        $question41 = $request->readRecord4;
        $question42 = $request->readRecord5;
        $knowingpublic = knowingpublic::where('user_id',$id)->first();
        $knowingpublic->question40 = $question40;
        $knowingpublic->question41 = $question41;
        $knowingpublic->question42 = $question42;
        $knowingpublic->save();
        return $question40."".$question41."".$question42;
        }
        $g = $request->g;
        $h = $request->h;
        $i = $request->i;
        $j = $request->j;
        if(!(empty($g) || empty($h) || empty($i) || empty($j))){
        $question50 = $request->readRecord6;
        $question51 = $request->readRecord7;
        $question52 = $request->readRecord8;
        $question53 = $request->readRecord9;
        $knowingpublic = knowingpublic::where('user_id',$id)->first();
        $knowingpublic->question50 = $question50;
        $knowingpublic->question51 = $question51;
        $knowingpublic->question52 = $question52;
        $knowingpublic->question53 = $question53;
        $knowingpublic->save();
        return $question50."".$question51."".$question52."".$question53;        
        }
        $k = $request->k;
        $l = $request->l;
        $m = $request->m;
        if(!(empty($k) || empty($l) || empty($m))){
        $question60 = $request->readRecord10;
        $question61 = $request->readRecord11;
        $question62 = $request->readRecord12;
        $knowingpublic = knowingpublic::where('user_id',$id)->first();
        $knowingpublic->question60 = $question60;
        $knowingpublic->question61 = $question61;
        $knowingpublic->question62 = $question62;
        $knowingpublic->save();
        return $question60."".$question61."".$question62;
        }
        $n = $request->n;
        if(!empty($n)){
        $question70 = $request->readRecord13;
        $knowingpublic = knowingpublic::where('user_id',$id)->first();
        $knowingpublic->question70 = $question70;
        $knowingpublic->save();
        return $question70;
        }

    }
}
