<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class apiController extends Controller
{
    function get(){
       $posts= Http::get("https://jsonplaceholder.typicode.com/posts");
       $jsonData = $posts->json();
      return view("user",["posts"=>$jsonData]);
    }
    function post(Request $req){
       $data= $req->input('email');
       $req->session()->flash("user-email",$data);
       $req->session()->put("logged",$data);
       $res=Http::post("https://jsonplaceholder.typicode.com/users",[
        'email' => $req->input('email'),
        'phone' => $req->input('password'),
       ]);
    //    $res->accepts(['Content-Type', 'application/json']);
       $data=$res->json();
       return $data;
    }
    function delete(Request $req){
        // if(session()->has("logged")){
        //    return session()->pull("logged",null);
        // }
        $id=$req->input('id');
        
        $res=Http::delete("https://jsonplaceholder.typicode.com/users/".$id);
        $res->json();
        $data=$res->status();
        if($data==200){
           
            return $req->file("file")->store("uploaded file");
        }
        else{
            return $data;
        }
    }
}
