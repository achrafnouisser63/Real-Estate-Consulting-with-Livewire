<?php

 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use App;
use Illuminate\Support\Facades\DB;
use App\Models\article;

class HomeController extends Controller
{
   function index(){
    
      return view("welcome");
   }
   
   function changeLang($langcode){
    
      App::setLocale($langcode);
      session()->put("lang_code",$langcode);
      return redirect()->back();
  } 
   function article($id){
      $db=DB::table('articles')->where('id','=',$id)->first() ;
      
       return view("site2.article")->with('db',$db);  
   }
}