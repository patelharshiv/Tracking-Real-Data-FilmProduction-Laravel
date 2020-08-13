<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscribe;
use App\releasetrailer;
use App\movies;
use App\likedpost;
use App\comment;
use App\advertise;
use App\knowingpublic;
use App\profilepic;
use App\releaseposter;

class home1controller extends Controller
{
    public function index(Request $request){
        if(!empty($request->session()->get('user_id'))){
            $id = $request->session()->get('user_id');
        }else{
            $id = $request->session()->get('first');
        }
        $read = $request->read;
        if(!empty($read)){
        $query1 = profilepic::where('user_id',$id)->first();
        if($query1){
            $img_dir = $query1->img_name;
            $img_name = asset('storage/images/'.$img_dir);
            return $img_name;
          }
        }
        $read1 = $request->read1;
        if(!empty($read1)){
          $validator = Validator::make($req->all(), [
            'attachment1' => 'mimes:jpeg,png,bmp,gif,svg',
        ]);
           if($validator->fails()){
               $errorattacment = true;
           }
        else{
          $errorattachment=false;
        }
        if ($errorattachment == false) {
          $profilepic = new profilepic;
          $profilepic->img_name = $request->attachment1->getClientOriginalName();
          $profilepic->img_dir = asset('storage/images/'.$request->attachment1->getClientOriginalName());
          $path = $request->attachment1->storeAs('images', $img_name , 'public');
          $profilepic->save();
        if(! $profilepic->save())
        {
        $query1 = profilepic::where("user_id",$id)->first();
        if($query1){
            $img_dir = $query->img_dir;
            return $img_dir;
          } 
        }
        else
        {
        $query1 = profilepic::where("user_id",$id)->first();
        if($query1){
            $img_dir = $query1->img_dir;
            return $img_dir;
          } 
        }     
        }
      }
      
      $email123 = $request->email123;
      if(!empty($email123)){
        $value = "yes";
        $subscribe = new subscribe;
        $value = $request->value;
        $subscribe->user_id = $id;
        $subscribe->subscribe = $subscribe;
        $subscribe ->email = $email123;
        $subscribe -> save();
        if ( ! $subscribe->save())
        {
            App::abort(500, 'Error');
        }else{
        return "Done";
        }
      }

      $check = $request->check;
      if(!empty($check)){
         $query1 = subscribe::where("user_id",$id)->first();
        if($query1){
            $subscribe = $query1->subscribe;
            return $subscribe;
          } 
          else{
            return "No";
          }
      }

      $checkvideo = $request->checkvideo;
      if(!empty($checkvideo)){
        $data = "";
        $query1 = releasetrailer::orderBy('id','desc')->limit(7)->get();
        foreach($query1 as $row){
            $data .= "<li onclick = \"videoUrl('".asset('storage/images/'.$row->video_name)."')\"><img src='".asset('storage/images/'.$row->image_name)."'></li>";
      }
      return $data;
      }

      $checkslider = $request->checkslider;
      if(!empty($checkslider)){
        $data = "";
        $query1 = releasetrailer::orderBy('id','desc')->limit(7);
        foreach($query1 as $row){
            $data .= '<source src="'.asset('storage/images/'.$row->video_url).'" type="video/mp4" media="">';
         }
      return $data;
      }
      $checkmovie = $request->checkmovie;
      if(!empty($checkmovie)){
        $data = "";
        $yes = "yes";
        $query1 = movies::orderBy('movie_id','desc')->get();
        $query2 = likedpost::where('user_id',$id)->first();
        foreach($query1 as $row){
            $number = $row->movie_id;
            $data1 = $row->movie_id;
            $abcd =$this->checkcomment($row->movie_id, $id);
            $abcd1 =$this->countcomment($row->movie_id, $id);
            $query3 = likedpost::where([
                ['liked', $yes],
                ['movie_id', $id],
            ])->count();
            if($query3){
              $count = $query3;
            }else{
              $count = 0;
            }
            $connec = $count - 1;
            $query4 = comment::where([['commented',$yes],['movie_id',$id]])->get();
            $query5 = profilepic::where('user_id',$id);
           if($abcd1 >= 1){
            if($query2){
            $liked = $query2->liked;
            if($liked == "yes"){
             if($count >= 2){    
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row->movie_id.')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
                <div class="input-group">
                  <input type="text" class="form-control" id="movies'.$row->movie_id.'" placeholder="Add a review...">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
                <p class="w3-left w3-center" id="movie'.$row->movie_id.'">You and '.$connec.' others liked this</p> 
                <p class="w3-right w3-center" onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p>
                <p class="w3-clear"></p>
                 <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'.$abcd.'<hr>
                          </div>
            </div>
            </div>
            <hr>';
          }
          else{
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row->movie_id.')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
                          
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div> 
                </br>
                 <p class="w3-left w3-center" id="movie'.$row->movie_id.'">You liked this</p>
                 <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">View All  '.$abcd1.'  Review</p>
                <p class="w3-clear"></p>
               <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'.$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
          }
        }
            else{
              if($count >= 1){
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
                <p> '.$row->about_movie.'</p>
                <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                          
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
                 <p class="w3-left w3-center" id="movie'.$row->movie_id.'">'.$count.' people liked this</p>
                 <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p> 
                <p class="w3-clear"></p>
                <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'.$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
          }
          else{
                    $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                          
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
                 <p class="w3-left w3-center" id="movie'.$row->movie_id.'"></p> 
                 <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p>
                <p class="w3-clear"></p>
                 <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'
                          .$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
          }
        }  
        }  
            else{
              if($count >= 1){
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                          
                        <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
             <p class="w3-left w3-center" id="movie'.$row->movie_id.'">'.$count.' people liked this</p> 
             <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p> 
                <p class="w3-clear"></p>
              <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'
                          .$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
            }
            else{
            $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left" ><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
             <p class="w3-left w3-center" id="movie'.$row->movie_id.'"></p> 
             <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p>
                <p class="w3-clear"></p>
                <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>
                          '.$abcd.'
                          <hr>
                </div>
      
              </div>
            </div>
            <hr>';
            }
          }
           }else{
      
            if($query2){
            $liked = $query2->liked;
            if($liked == "yes"){
             if($count >= 2){    
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row->movie_id.')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
                <div class="input-group">
                  <input type="text" class="form-control" id="movies'.$row->movie_id.'" placeholder="Add a review...">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
                <p class="w3-left w3-center" id="movie'.$row->movie_id.'">You and '.$connec.' others liked this</p> 
                <p class="w3-right w3-center" onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
                <p class="w3-clear"></p>
                 <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'.$abcd.'
                            <hr>
                          </div>
            </div>
            </div>
            <hr>';
          }
          else{
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row->movie_id.')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
                          
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div> 
                </br>
                 <p class="w3-left w3-center" id="movie'.$row->movie_id.'">You liked this</p>
                 <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
                <p class="w3-clear"></p>
                 <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'.$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
          }
        }
            else{
              if($count >= 1){
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
                <p> '.$row->about_movie.'</p>
                <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                          
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
                 <p class="w3-left w3-center" id="movie'.$row->movie_id.'">'.$count.' people liked this</p>
                 <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p> 
                <p class="w3-clear"></p>
                  <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'.$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
          }
          else{
                    $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                          
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
                 <p class="w3-left w3-center" id="movie'.$row->movie_id.'"></p> 
                 <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
                <p class="w3-clear"></p>
                <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'
                          .$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
          }
        }  
        }  
            else{
              if($count >= 1){
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                          
                        <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
             <p class="w3-left w3-center" id="movie'.$row->movie_id.'">'.$count.' people liked this</p> 
             <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p> 
                <p class="w3-clear"></p>
              <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>'
                          .$abcd.'
                            <hr>
                          </div>
              </div>
            </div>
            <hr>';
            }
            else{
            $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
              <div class="w3-center">
                <h3>'.$row->movie_name.'</h3>
                <h5>'.$row->movie_category.' </br>
                  <span class="w3-opacity">'.$row->movie_release_date.'</span></h5>
              </div>
      
              <div class="w3-justify">
                <img src="'.$row->movie_img_dir.'"  style="width:100% "  class="w3-padding-16">
                <p><strong>Director :</strong> '.$row->movie_directed_by.' </p>
                <p><strong>Box office: </strong> '.$row->movie_box_office_collection.' </p>
                <p><strong>Budget: </strong> '.$row->movie_budget.'</p>
                <p><strong>Actor: </strong> ‎'.$row->movie_actor_name.' </p>
                <p><strong>Actress: </strong> ‎'.$row->movie_actress_name.' </p>
      
                <p> '.$row->about_movie.'</p>
                
                <p class="w3-left" ><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row->movie_id.')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row->movie_id.'">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row->movie_id.')"></i>
                    </span>
                  </div>
                </div>
              </br>
             <p class="w3-left w3-center" id="movie'.$row->movie_id.'"></p> 
             <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row->movie_id.')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
                <p class="w3-clear"></p>
                <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                          <hr>
                          '.$abcd.'
                          <hr>
                </div>
              </div>
            </div>
            <hr>';
            }
        }
    }
}
return $data;
}
        $movieidx = $request->movieidx;
        if(!empty($movieidx)){
        $query1 = likedpost::where([['user_id',$id],['movie_id',$movieidx]])->first();
        $yes = "yes";
        $no = "no";
          if($query1){
            $check = $query1->liked;
            if($check == "no"){
            $query11 = likedpost::where([['user_id',$id],['movie_id',$movieidx]])->first();
            $query11->liked = $yes;
            $query11->save();
            if ( ! $query11->save())
            {
                App::abort(500, 'Error');
            }else{
            return $yes;
            }
            }else{
            $query11=likedpost::where([['user_id',$id],['movie_id',$movieidx]])->first();
            $query11->liked = $no;
            $query11->save();
            if ( ! $query11->save())
            {
                App::abort(500, 'Error');
            }else{
            return $no;
            }
            }
          }
          else{
            $likedpost = new likedpost;
            $likedpost->movie_id = $movieidx;
            $likedpost->user_id = $id;
            $likedpost->liked = $yes;
            $likedpost->save();
            if ( ! $likedpost->save())
            {
                App::abort(500, 'Error');
            }else{
            return $yes;
        }
    }
          
}
    $countlikes = $request->countlikes;      
      if(!empty($countlikes)){
         $yes = "yes";
            $movieid = $request->countlikes;
            $query3 = likedpost::where([
                ['liked', $yes],
                ['movie_id', $id],
            ])->count();

            if($query3){
              $count = $query3;
            }else{
              $count = 0;
            }
      return $count;
      
      }
      
      $movieid = $request->movieid;
      $comment = $request->comment;
      if(!(empty($comment) && empty($y))){
            $yes = "yes";
            if(!empty($_SESSION['uname'])){
                $uname = $_SESSION['uname'];
            }else{
                $uname = "guest";
            }
            $time = date("l jS \of F Y h:i:s A");
            $comment = new comment;
            $comment->user_id = $id;
            $comment->movie_id = $movieid;
            $comment->comment = $comment;
            $comment->commented = $yes;
            $comment->uname = $uname;
            $comment->time1 = $time;
            $comment->save();
            if ( ! $likedpost->save())
            {
                App::abort(500, 'Error');
            }else  $data = "";
        $query4 = comment::where([['commented',$yes],['movie_id',$id]])->get();
        if($query4){
            foreach($query4 as $row4){   
          $userid = $row4->user_id;
          $query5 = profilepic::where('user_id',$id)->first();
        if($query5){
        $data .=
                        '<div class="w3-col l2 m3">
                            <img src="'.$row5->img_dir.'" style="width:90px;"">
                          </div>
                          <div class="w3-col l10 m9">
                          <h4>'.$row4->uname.'</br><span class="w3-opacity w3-medium">'.$row4->time1.'</span></h4>
                          <p>'.$row4->comment.'</p>
                          </div>';
      }else{
        '<div class="w3-col l2 m3">
        <img src="images/user.jpg" style="width:90px;"">
      </div>
      <div class="w3-col l10 m9">
      <h4>'.$row4->uname.'</br><span class="w3-opacity w3-medium">'.$row4->time1.'</span></h4>
      <p>'.$row4->comment.'</p>
      </div>';
    }
}
}
else{
        $data .="No review";
        
}
return $data;
}
      $abc = $request->abc;
      if(!empty($abc)){
         $yes = "yes";
            $movieid = $abc;
            $query3 = comment::where([['commented',$yes],['movie_id',$id]])->count();
            if($query3){
              $count = "View all ".$query3." Review";
            }else{
              $count = "No review";
            }
      return $count;    
      }
      $checkadvertise = $request->checkadvertise;
      if(!empty($checkadvertise)){
        $data = "";
        $query1 = advertise::orderBy('id','desc')->get();
        if($query1){
          $number1;
         foreach($query1 as $row){
            $data .= "<div class='w3-white w3-margin' id='advertise' style='height:auto;'>
            <div class='w3-container w3-padding w3-black'>
                <h4>Advertise</h4>
              </div>
              <div class='w3-white'>
                <div class='w3-section' style='height:200%;'>
                  <center><span><img src='".asset('storage/'.$row->image_dir)."' style='max-width:95%; max-height:100%;'></span></center>
                    <center><b class='w3-container'>Advertised By ".$row->advertise_by."</b></center>
                    <b class='w3-container'>".$row->about_info."</b>
                </div>
              </div>
              </div>
              ";
         }
        
      }
      return $data;
      }


      
}

    public function checkcomment($data1, $userid){
  $data = "";
  $yes = "yes";
  $result4 = comment::where([['commented',$yes],['movie_id',$data1]])->get();  
  if($result4){
   foreach($result4 as $row4){
    $userid = $row4->user_id;
    $query5 = profilepic::where('user_id',$userid)->first();
  if($query5){
  $data .=
                  '<div class="w3-col l2 m3">
                  <img src="'.$query5->img_dir.'" style="width:90px;"">
                  </div>
                    <div class="w3-col l10 m9">
                    <h4>'.$row4->uname.'</br><span class="w3-opacity w3-medium">'.$row4->time1.'</span></h4>
                    <p>'.$row4->comment.'</p>
                    </div>';
}else{
  '<div class="w3-col l2 m3">
  <img src="image/user.jpg" style="width:90px;"">
</div>
<div class="w3-col l10 m9">
<h4>'.$row4->uname.'</br><span class="w3-opacity w3-medium">'.$row4->time1.'</span></h4>
<p>'.$row4->comment.'</p>
</div>';
}
}
}else{
  $data .="No review";
}
return $data;
}

  public function countcomment($data1, $userid){
  $yes = "yes";
  $query3 = comment::where([['commented',$yes],['movie_id',$data1]])->count();
  if($query3){
        $count = $query3;
      }else{
        $count = "";
      }
  return $count;
}
}          


