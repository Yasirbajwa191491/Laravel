<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function show($user){
        return view("user",['slash'=>$user]);
    }
}
