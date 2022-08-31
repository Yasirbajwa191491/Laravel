<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tb_user;
class tbControllerr extends Controller
{
    function getData(){
      return  tb_user::all();
    }
}
