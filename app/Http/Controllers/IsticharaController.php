<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Consultations;
use App\Models\reponce;
use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IsticharaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public $t1 = 0;
  public $t2 = 0;
  public $t3 = 0;
    public function index()
    {
         
        return view('user.istichara');
    }
    
    public function upd(Request $request)
    {
        $d = reponce::find($request->id);
        if( $d){
           
            reponce::where('id', $request->id)->update([
             'reponce' => $request->upd]);
        return  redirect()->back()->with('msg', __('app.msg_3') );
        }
       else
        return  redirect()->back()->with('msg2',__('app.msg101'));
     
    }


    public function send($id ,Request $request){
        $request->validate([
            //'sher_number' => 'required|integer|min:1',
            //'name' => 'required|string|min:3',
            
        ]); 
 $add = new reponce;
 $add->id_talab=$request->id;
 $add->reponce=$request->rad;
 $add->save();

 Consultations::where('id', $id)
 ->update([
     'is_valide' => 'oui'
  ]);

  $no_v = DB::table('consultations')->where('is_valide','no')->get();
 
 return view('admin.Consultations')->with("no_v", $no_v)->with('msg', __('app.msg102'));
 
    
   }
    



 public function add_arc(Request $request){

        $request->validate([
           //'sher_number' => 'required|integer|min:1',
           'name' => 'required|string|min:3|max:255',
           'titele' => 'required|min:3',
       
           'sujet' => 'required',
           
       ]); 


   
 $data = $request->input();
 $add = new article;
$add->usuer_mo = $request->input('name');
$add->title = $request->input('titele');
$add->sujet = $request->input('sujet');
   $add->save();
   return Redirect::back()->with('msg',__('app.msg103'));
 }
   

    public function istichara(Request $request){

        $request->validate([
           //'sher_number' => 'required|integer|min:1',
           'name' => 'required|string|min:3|max:255',
           'tele1' => 'required',
           'email' => 'required|string|email|max:255', 
           'contry' => 'required',
           'sttate' => 'required',
           'ville' => 'required',
           'type1' => 'required',
           'type2' => 'required',
           'type3' => 'required',
           'naw3' => 'required',
           'mochkila' => 'required',
       ]); 

   $data = $request->input();
   $add = new Consultations;
  $add->user_id = Auth::user()->id;
   $add->name = $request->input('name');
  $add->tele = $request->input('tele1');
$add->email  = $request->input('email');
$add->	contry  = $request->input('contry');
$add->	sttate  = $request->input('sttate');
$add->	ville  = $request->input('ville');
$add->tybe_1  = $request->input('type1');
$add->tybe_2  = $request->input('type2');
$add->tybe_3  = $request->input('type3');
 $add->nawe3  = $request->input('naw3');
  $add->problem  = $request->input('mochkila');
  $add->is_valide  = 'no';
  $add->save();
  return Redirect::back()->with('msg',__('app.msg104'));
  //-------------------------------------------
   //-------------------------------------------

  
}

 public function details($id)
    { $user = DB::table('consultations')->where('id', $id)->where('user_id', Auth::user()->id)->first();
          
        if( $user ){
           $rad = DB::table('reponces')->where('id_talab', $id)->first();
             if( $rad ){
              return view('user.dtay_reponc')->with(["rad"=> $rad,"user"=> $user]);  
             
             }
               else return view('404');
        }
    
        else return view('404');
        
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_con()
    {
        
        $my_col = DB::table('consultations')->where('user_id', Auth::user()->id)->get();
        return view('user.my_con')->with("my_col", $my_col);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function parfait()
    {
        $rps=  DB::table('reponces')->get();
        return view('admin.consultation_kamla')->with("rps", $rps);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\istichara  $istichara
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $d = reponce::find($id);
        if( $d){
           $d->delete();  
           Consultations::where('id', $id)
 ->update([
     'is_valide' => 'no'
  ]);
        return  redirect()->back()->with('msg',__('app.msg_3'));
        }
       else
        return  redirect()->back()->with('msg2',__('app.msg101'));
    }

    public function update($id)
    {
        
      $reponc = DB::table('reponces')->where('id', $id)->first();

        $talab = DB::table('consultations')->where('id', $reponc->id_talab)->first();
          
        
          
             
             
             return view('admin.dupdate_reponce')->with(["reponc"=> $reponc,"talab"=> $talab]);
            

    }








    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\istichara  $istichara
     * @return \Illuminate\Http\Response
     */
    public function edit(istichara $istichara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\istichara  $istichara
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\istichara  $istichara
     * @return \Illuminate\Http\Response
     */
    public function destroy(istichara $istichara)
    {
        //
    }
}
