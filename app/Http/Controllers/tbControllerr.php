<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tb_user;
class tbControllerr extends Controller
{
    function getData(){
      return  User::all();
    }

    function postData(Request $req){
           $User=new User;
           $User->email=$req->email;
           $User->password=$req->password;
          //  $User->id="5";
           $User->save();
           return "Data Stored";
    }
    function deleteData(Request $req){
      $id=$req->input('id');
      $User=User::find($id);
      $User->delete();
      return "User Deleted";
    }
}
