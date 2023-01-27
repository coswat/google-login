<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(RegisterFormRequest $request) {
 
        User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => bcrypt($request->input('password'))
          ]);
          
          return redirect()->back()->with('alert','Register Successfuly');
      
    }
}
