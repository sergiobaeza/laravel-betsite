<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function ticketLines(){
        return $this->hasMany('App\Models\TicketLine'); 
    }
}
