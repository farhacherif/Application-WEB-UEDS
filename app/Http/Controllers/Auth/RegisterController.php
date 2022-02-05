<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Mail;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'], 
'sexe' => ['required'], 
'date' => ['required'], 
'tel' => ['required', 'integer'], 
'presentation' => ['required', 'string', 'max:255'], 
'perimetre' => ['required', 'string', 'max:255'], 
'pays' => ['required', 'string'], 
'code' => ['required', 'integer'], 
'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
'password' => ['required', 'string', 'min:6', 'confirmed'], 
]); 
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       
$user = User::create([
    'name' => $data['name'], 
'sexe' => $data['sexe'], 
'date' => $data['date'], 
'cadre' => $data['cadre'], 
'tel' => $data['tel'], 
'presentation' => $data['presentation'], 
'perimetre' => $data['perimetre'], 
'pays' => $data['pays'], 
'ville' => $data['ville'], 
'code' => $data['code'], 
'activite_id' => $data['activite_id'], 
'email' => $data['email'], 
'status' => 1, 
'password' => Hash::make($data['password']), 
]); 
return $user; 
    }   
    
    public function register(Request $request){
        $input = $request->all();
        $validator = $this->validator($input);
      
        if($validator->fails()){
            return back()->with('Error', $validator->errors());
        }
        
          $user = $this->create($input)->toArray();
          $user['link'] = str_random(30);
        DB::table('users_activations')->insert(['id_user' => $user['id'], 'token' => $user['link']]);
      Mail::send('mail.activation', $user, function($message) use ($user) {
       $message->to($user['email']);
       $message->subject('Activation Code');  
      });
       return redirect()->to('login')->with('success',"Nous avons envoyé le code d'activation, s il vous plaît vérifier votre mail");
        
      }  
      
      public function userActivation($token){
         $check = DB::table('users_activations')->where('token', $token)->first();
      if(!is_null($check)) {
          $user = User::find($check->id_user);
          if ($user->is_activated == 1){
              return redirect()->to('login')->with('success', "Vous etes déjà activé");
          }
          $user->update(['is_activated' => 1]);
          $user->update(['status' => 1]);

          DB::table('users_activations')->where('token', $token)->delete();
        return redirect()->to('login')->with('success', "Vous etes actif avec succès");
      }
      return redirect()->to('login')->with('warning, "Votre jeton est invalide');
     }
  
}
