<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Support\Str;
use App\Mail\PasswordRestMail;
use App\Models\User;
use Mail;

class LoginController extends Controller
{
   public function index(Request $request)
   {
    $mode = $request->badge == 'on' ? true : false;
    $request->validate([
      'email' => 'required|email|max:40',
      'password' => 'required|max:40'
      ]);
      $credentials = $request->only('email','password');
      if(Auth::attempt($credentials,$mode))
      {
      return redirect()->route('dashboard');
      }
      else
      {
        return redirect()->back()->with('alert','Invalid Credentials');
      }
   }
   public function forgetPassAction(Request $request)
   {
     $request->validate([
       'email' => 'required|email|max:45'
       ]);
       $user = User::where('email',$request->input('email'))->first();
       if($user)
       {
         $email = $request->input('email');
        $token = Str::random(30);
        PasswordReset::updateOrCreate(
          [
            'email' => $email
            
            ],
            [
              'email' => $email,
              'token' => $token
              
              ]);
          Mail::to($request->input('email'))->send(new PasswordRestMail($user,$token));
          return redirect()->back()->with('alert','Password Reset Link Successfully Sended On Your Email');
       }
       else 
       {
         return redirect()->back()->with('alert','This Email Not Registered With Us');
       }
   }
   public function resetPass($token)
   {
     $user = PasswordReset::where('token',$token)->first();
   
     if($user)
     {
     
       return view('password-reset',['email' => $user->email,
       'token' => $token
       ]);
     }
     else 
     {
       return redirect()->route('forget.pass')->with('alert','Invalid Token Or Link Already Used');
     }
   }
   public function changePass(Request $request)
   {
     $request->validate([
       'password' => 'required|min:8|max:40',
       'confirm_password' => 'required_with:password|same:password|'
       ]);
       $email = decrypt($request->input('usermail'));
       
       $user = User::where('email',$email)->first();
       $getToken = PasswordReset::where('token',decrypt($request->token));
       if($user && $getToken){
         $user->update(['password' => bcrypt($request->input('password'))]);
         $getToken->update(['token' => 'used']);
         return redirect()->route('login')->with('alert','Password Changed Successfully , Please Login');
       }
       else 
       {
         return redirect()->route('forget.pass')->with('alert','Link Already Used');
       }
   }
}
