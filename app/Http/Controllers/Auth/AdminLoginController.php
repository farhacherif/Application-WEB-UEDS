<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Evenement;
use Carbon\Carbon;
class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm(){
        $now = new Carbon();
        $evenement = Evenement::select('libelle', 'date')->where('date', '>', $now)->first();
        return view('auth.admin-login',compact("evenement", "now"));
    }
    public function login(Request $request){
    //validate the form data
    $this->validate($request, [
        'email' => 'required|email',
        'password'=> 'required|min:6',
    ]);
    //attempt to log the user in
    if(    Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    //return false or true 
        // if successful then redirect to their intended location 
  //      return redirect()->intended(route('proadmin'));
  return redirect('/admin');
  
    }
    // if unsuccessful then redirect back to the login with the form data
    return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'admin.login' ));
    }
    
}