<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Consultations;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no_v = DB::table('consultations')->where('is_valide','no')->get();
        return view('admin.Consultations')->with("no_v", $no_v);
      





        /* if(view()->exists($id)){
            return view($id);
        }
        else
        {
            return view('404');
        }
 */
     //   return view($id);
    }


    public function admins_show($id ,Request $request){
    
        $dd = Consultations::where('id', $id)->first();
       
       return view('admin.show_onsultations',compact("dd"));
           
        
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function article()
    {
        return view('admin.add_article');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
