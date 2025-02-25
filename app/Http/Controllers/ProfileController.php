<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function my_profile()
    {
        //$messages = Message::dwhere('id', $id);
       return view('user.my_profile');


    }
    public function my_profile_ad()
    {
        //$messages = Message::dwhere('id', $id);
       return view('admin.my_profile');


    }
    
public function update_my_profile()
    {
        //$messages = Message::where('id', $id);
       return view('user.edite_my_profile');


    }

public function update_my_profile_ad()
    {
        //$messages = Message::where('id', $id);
       return view('admin.edite_my_profile');


    }
    public function edite_profiles(Request $request)
    {
      $request->validate([
           
            'name' => 'required',
            'tele_1' => 'required',
            'email' => 'required|email',
          
      ]
    ); 

        
        $data = $request->input();
         $me = User::where('id', '=',  Auth::user()->id)->first();
        $me->name = $data['name'];
       
     
        $me->num_1	 = $data['tele_1'];
       
        $me->email  = $data['email'];
      
      
        $me->save(); 
        return Redirect::back()->with('msg', __('app.msg_3'));



    
    }
    public function edite_profiles_ad(Request $request)
    {
      $request->validate([
           
            'name' => 'required',
          
            'email' => 'required|email',
          
      ]
    ); 

        
        $data = $request->input();
         $me = Admin::where('id', '=',  Auth::guard('admin')->user()->id)->first();
        $me->name = $data['name'];
       
     
       
       
        $me->email  = $data['email'];
      
      
        $me->save(); 
        return Redirect::back()->with('msg', __('app.msg_3'));



    
    }
    
    
    public function update_my_password(Request $request){

      
        return view('user.edite_my_password');


    }
    public function update_my_password_ad(Request $request){

      
        return view('admin.edite_my_password');


    }
    public function edite_password(Request $request)
    {
         $this->validate($request, [
            'password_old' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]); 
        
if(Hash::check($request->password_old, Auth::guard('admin')->user()->password)){
  $data = $request->input();
         $me = Admin::where('id', '=',  Auth::guard('admin')->user()->id)->first();
        $me->password = Hash::make($request->password);
      $me->save(); 
        return Redirect::back()->with('msg',  __('app.msg_10')); 
}
else
{
    return Redirect::back()->with('msg_error',  __('app.msg_11'));
}
        
    }

    public function edite_password_ad(Request $request)
    {
         $this->validate($request, [
            'password_old' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]); 
        
if(Hash::check($request->password_old,Auth::guard('admin')->user()->password)){
  $data = $request->input();
         $me = Admin::where('id', '=', Auth::guard('admin')->user()->id)->first();
        $me->password = Hash::make($request->password);
      $me->save(); 
        return Redirect::back()->with('msg',  __('app.msg_10')); 
}
else
{
    return Redirect::back()->with('msg_error',  __('app.msg_11'));
}
        
    }
    //----------------------------------------------------------------------------














    
    
}
