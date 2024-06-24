<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index($id)
    {
        $name="Donald Trump";
        $age='75';
        $data=[
            "id"=>$id,
            "name"=>$name,
            "age"=>$age
        ];
        $minutes = 1;
        $path='/';
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httpOnly=true;
        $value='123-XYZ';
        $response=response()->json($data,200);
        $response->cookie('access_token',$value,$minutes,$path,$domain,$secure,$httpOnly);
        return $response;

    }
}
