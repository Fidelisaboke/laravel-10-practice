<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function show(){
        return view("register");
    }

    public function get_json(){
        return [
            'name'=>'Fidel'
        ];
    }
}
