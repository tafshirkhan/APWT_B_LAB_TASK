<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function verify(RegisterRequest $req)
    {
      $user = User::where('email', $req->email)
                    ->first();
     
     if($user){
         $req->session()->flash('msg', 'email alreadt exist');
         return redirect('/register');
     }
     else{
         $user = new User;
         $user->firstname = $req->fname;
         $user->username = $req->uname;
         $user->email = $req->email;
         $user->password = $req->password;
         $user->address = $req->address;
         $user->company = $req->company;
         $user->number = $req->phone;
         $user->country = $req->country;
         $user->city = $req->city;
         $user->type = $req->type;

         $user->save();
         $req->session()->flash('msg','register successful');
         return redirect()->route('login.index');
     }



    }
}
