<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //protected $fillable = ['name','email','password','balance'];  
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

    public function addSaldo($saldo){
        $this->balance = $saldo + $this->balance; 
    }

    public function removeSaldo($saldo){
        if(($this->balance-$saldo) >= 0){
            $this->balance = ($this->balance-$saldo);
            return true; 
        }
        else{
            return false; 
        }
    }
}
