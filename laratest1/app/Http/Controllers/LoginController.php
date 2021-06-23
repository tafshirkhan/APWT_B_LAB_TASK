<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function verify(LoginRequest $req){

        $user = User::where('email', $req->email)
                     ->where('password', $req->password)
                     ->first();
        if($user){
            $req->session()->put('uname', $req->username);
            $req->session()->put('type', $req->type);
            return redirect()->route('home.index');
 
        }
        else{
            $req->session()->flash('msg', 'invalid email or password ');
            return redirect()->route('login.index');
        }

    }
}
