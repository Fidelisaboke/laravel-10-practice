<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    //
    public function show(){
        return view("sign_in");
    }

    public function get_form_data(Request $req){
        // fields are validated below:
        $req->validate([
            'user_name'=>'required | max:10',
            'user_pass'=>'required | min:8'

        ]);
        
        return $req->input();
    }
}
