<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class connect extends Controller
{
     function dbConn(){
        return DB::select("select * from tb_users");
    }
}
