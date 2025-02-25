<?php

namespace App\Http\Controllers;
use App\Models\article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index()
    {

        return view('index');
    }

    public function index2($id)
    {
       $arc=article::where('id', $id)->first();
        echo($arc->title);
      return view('site.mkl')->with("arc", $arc);;
    }

}
