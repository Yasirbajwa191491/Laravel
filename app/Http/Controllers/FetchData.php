<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FetchData extends Controller
{
    function save(){
          return DB::table("users")->join("tb_users","users.id","=","tb_users.id",)->get();
    }
}
