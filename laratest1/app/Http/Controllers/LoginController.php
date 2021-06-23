<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
       $validation = Validator::make($req->all(), [

             'uname'=>'required',
             'password'=>'required|min:6'

       ]);

       if($validation->fails()){
           return redirect()->route('login.index')->with('errors', $validation->errors());
       }
       
       
        $user = User::where('username', $req->uname)
                    ->where('password', $req->password)
                    ->get();

        if(count($user) > 0)
        {
            $req->session()->put('uname',$req->uname);
            return redirect('/home');
        }
        else{
            $req->session()->flash('msg','invalid username or password');
            return redirect('/login');
        }
    }
}
