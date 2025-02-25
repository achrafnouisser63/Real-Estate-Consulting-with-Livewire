<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\message;
use App\Models\msg;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class MessageController extends Controller
{
    public function send_message(Request $req){
        $req->validate([
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
        ]);
        $msg = new msg;
       
           $msg->name = $req->name;
            
            $msg->email =$req->email;
            $msg->msg =$req->message;
            $msg->is_valid ='no';
            $msg->save();
            return Redirect::back()->with('msg', 'The message has been sent successfully');
        }
       public function messages(){

       return view('user.messages');

       }
       public function message(){

        return view('user.msg');
 
        }
        //------------------------send_msg to tbl msg
  public function send_msg(Request $req){
        $req->validate([
        'user_id' => 'required',
        'message' => 'required',
       
        ]);
        $data = $req->input();
        $user=User::where('id', $req->user_id)->first();
        if($user  ){
           if($user->id !=Auth::user()->id){
             $msg = new msg;
       
            $msg->user_id = Auth::id();
             $msg->user_id_2 = $req->user_id;
            
             $msg->msg =$req->message;
             $msg->save();
             return Redirect::back()->with('msg',  __('app.m_msg'));
           }
           else
           return Redirect::back()->with('msg_2', __('app.no_my_msg') );

        }
        else{
            return Redirect::back()->with('msg_2', __('app.msg_9'));
  
        }
        
        }
        public function show_message($id ,Request $request){

            $msg = msg::where('id', $request->id)->first();
            $msg->is_valid='oui';
            $msg->save();
            return view('admin.show_message')->with('msg',$msg);
        
        }
        public function messag($id ,Request $request){

            $msg = msg::where('id', $request->id)->first();
            return view('user.msg')->with('msg',$msg);
        
        }

//---------------------------------admin---------------------
public function messages_admin(){

    return view('admin.messages');

    }
    public function show_message_admin($id ,Request $request){

        $msg = message::where('id', $request->id)->first();
        $msg->vu='oui';
        $msg->save();
        return view('admin.show_message')->with('msg',$msg);
    
    }



























}
