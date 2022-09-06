<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    // function getEmailAttribute($value){
    //     return ucfirst($value);
    // }
    public function setEmailAttribute($value){
        return $this->attributes["email"]="email".$value;
    }
}
