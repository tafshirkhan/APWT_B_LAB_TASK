<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
       if($req->session()->has('uname')){

        return view('/home.index');

       }
       else{
           $req->session()->flash('msg', 'invalid request');
           return redirect('/login');
       }
        
    }
}
