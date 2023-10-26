<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function get_json(){
        $sample_data = [
            [
                'id'=>1,
                'name'=>'John Doe',
            ],
            [
                'id'=> 2,
                'name'=> 'Jane Johnson',
            ],
            [
                'id'=> 3,
                'name'=> 'Yani Akaja',
            ]
        ];

        return $sample_data;
    }

    public function show(){
        return view('users');
    }
}
