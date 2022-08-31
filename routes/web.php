<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\saveController;
use App\Http\Controllers\connect;
use App\Http\Controllers\tbControllerr;
use App\Http\Controllers\apiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/users/{user}",[userController::class,'show']);
// Route::post("/savedata",[saveController::class,'save']);
Route::get('/user', function () {
    return view('user');
});
Route::get('/save/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('save');
});
// Route::view("save","/save");
Route::get("/contact",[saveController::class,"save"]);
Route::get("/connection",[connect::class,"dbConn"]);
Route::post("/data",[saveController::class,"postHandler"]);
Route::get("/getdata",[tbControllerr::class,"getData"]);
Route::get("/get",[apiController::class,"get"]);
Route::post("send",[apiController::class,"post"]);
Route::delete("del",[apiController::class,"delete"]);
Route::group(["middleware"=>["protected"]],function(){
Route::get("/contact",[saveController::class,"save"]);
});
Route::view("form","data");