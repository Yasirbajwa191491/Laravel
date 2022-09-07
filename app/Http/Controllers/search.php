<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class search extends Controller
{
    function dbConn($id=null){
        // return DB::table("users")->join("tb_users","users.id","=","tb_users.id")->where("users.id",5)->get();
        //   return $id? User::find($id): User::all();
        return $id? User::where("id",$id)->get(): User::all();
    }
}
