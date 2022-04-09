<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enum\GameResultEnum; 
use App\Enum\TicketStatusEnum; 

class TicketLine extends Model
{
    use HasFactory;

    public function ticket(){
        return $this->belongsTo('App\Models\Ticket'); 
    }

    public function game(){
        return $this->belongsTo('App\Models\Game'); 
    }

    public function status(){
        $resultadoPart = $this->game->resultado(); 
        if($resultadoPart == GameResultEnum::PENDIENTE){
            return TicketStatusEnum::PENDIENTE; 
        }
        if($this->resultado == $resultadoPart->value){
            return TicketStatusEnum::GANADO; 
        }
        else{
            return TicketStatusEnum::PERDIDO; 
        }
    }
}
