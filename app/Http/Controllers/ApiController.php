<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function submit2(Request $request){
        $name = $request->input("name");
        $email = $request->input("email");
        //return $email;

        return response([
            'name' => $name,
            'email' => $email
        ],200);
    }

    //api.php
    public function person(Request $request){
        $name = $request->input("name");
        $age = $request->input("age");

        return response([
            "name" => $name,
            "age" => $age
        ], 200);
    }
}
