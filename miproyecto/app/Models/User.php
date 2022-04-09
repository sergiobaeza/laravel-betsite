<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class User extends Model
{
    use HasFactory;

    public function tickets(){
        return $this->hasMany('App\Models\Ticket'); 
    }

    public function creditCards(){
        return $this->hasMany('App\Models\CreditCard'); 
    }

    public function scopeName($query, $name){
        if($name)
            return $query->where('name', 'LIKE', '%$name%'); 
    }

    public function scopeEmail($query, $email){
        if($email)
            return $query->where('email', '=', '$email'); 
    }
}
