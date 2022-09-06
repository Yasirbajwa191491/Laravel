<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class postController extends Controller
{
    function postHandler(Request $req){
       $email=$req->input("email");
       $password=$req->input("password");
           DB::insert("INSERT INTO users(email,password) VALUES(?,?)",[$email,$password]);
           return "Data inserted";
    }
    function getHandler(){
        return DB::table("users")->select("users.*")->get();
    }
    function deleteHandler($id){
        return DB::table("users")->where("id",$id)->delete();
    }
    function getoneHandler($id){
        return DB::table("users")->where("id",$id)->select("users.*")->get();
    }
    function updateHandler(Request $req){
        $email=$req->input("email");
       $password=$req->input("password");
       $id=$req->input("id");
          DB::update("UPDATE users SET email=?,password=? WHERE id=?",[$email,$password,$id]);
       return "User Updated";
    }
}
