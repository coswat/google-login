<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
class SocialRegister extends Controller
{  
   public function googleLogin()
    {
     
      $key = Str::random(12);
      Session::put('googleKeyi',$key);
      return Socialite::driver('google')->redirect();
    }
  
   public function googleRegister()
   {
     return Socialite::driver('google')->redirect();
   }
   public function googleCallBack()
   {
     //Login Authentication
     
     $data = Socialite::driver('google')->user();
     $user = User::where('googleid',$data->id)->first();
    if(Session::has('googleKeyi'))
     {
       if(!$user){
         Session::forget('googleKeyi');
         return redirect()->route('login')->with('alert','The User Not Found Please Register');
       }
       else 
       {
         Session::forget('googleKeyi');
         Auth::login($user);
         return redirect()->route('dashboard');
       }
     }
     //Register Authentication
     if(!$user)
     {
       User::create([
         'name' => $data->name,
         'email' => $data->email,
         'password' => bcrypt(Str::random(8)),
         'googleid' => $data->id
         ]);
         
         return redirect()->route('register')->with('alert','Register Successfully');
     }
     else 
     {
       return redirect()->route('register')->with('alert','This Email Already Registered ! Please Login');
     }
     
   }
}
