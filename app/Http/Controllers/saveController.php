<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class saveController extends Controller
{
    function save(){
       return view("contact",["users"=>['Yasir','sohail']]);
    }
    function postHandler(Request $req){
        return $req->input();
    }
}
