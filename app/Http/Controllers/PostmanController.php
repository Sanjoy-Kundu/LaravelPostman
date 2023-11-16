<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostmanController extends Controller
{
    public function postman_test(){
        return "This is postmnan get request";
    }

    public function create_form(){
        return view('form');
    }


    public function submit(Request $request){
        //return $request->file("image");
        $imageCatch = $request->file("image");
        //$imageName = $imageCatch->getClientOriginalName();
        //return $imageName;
        if($imageCatch){
            $imageName = time()."-".$imageCatch->getClientOriginalName();
            //return $imageName;
            $imageCatch->move(public_path("images"),$imageName);
        }else{
            return "Not found";
        }
        die();
        $name = $request->input("name");
        $email = $request->input("email");
        //return $name;
        //return $email;
        //return response($request->all());
        return response([
            "name" => $name,
            "email" => $email
        ],200);
    }


    
    public function submitCopy(Request $request){
        $name = $request->input("name");
        $email = $request->input("email");
        //return $name;
        //return $email;
        //return response($request->all());
        return response([
            "name" => $name,
            "email" => $email
        ],200);
    }
}
