<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Validator;
class connect extends Controller
{
     function dbConn($id=null){
        // return DB::table("users")->join("tb_users","users.id","=","tb_users.id")->where("users.id",5)->get();
        //   return $id? User::find($id): User::all();
        return $id? User::where("id",$id)->get(): User::all();
    }
    function postHandler(Request $req){
    $validations=array(
        "email"=>"required | max:60 | min:3 ",
        "password"=>"required | min:6"
    );
    $validate=Validator::make($req->all(), $validations);
    if($validate->fails()){
        return $validate->errors();
    }else{
        $user=new User;
        $user->email=$req->email;
        $user->password=$req->password;
        $storeUser=$user->save();
       if($storeUser){
        return response()->json(['success'=>'Data stored successfully.'],201);
       }    else{
        return "Post failed";
       }
    }
    }
}
