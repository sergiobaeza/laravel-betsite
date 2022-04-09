<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enum\TicketStatusEnum; 

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['dineroApostado']; 


    public function ticketLines(){
        return $this->hasMany('App\Models\TicketLine'); 
    }

    public function user(){
        return $this->belongsTo('App\Models\User'); 
    }

    public function getMultiplicador(){
        $mult = 0; 
        foreach ($this->ticketLines as $tl){
            if($mult == 0){
                $mult = $tl->cuotaElegida; 
            }
            else{
                $mult = $mult * $tl->cuotaElegida; 
            }
        }
        return round($mult, 2); 
    }

    public function getPremio(){
        return round($this->dineroApostado * $this->getMultiplicador(), 2); 
    }

    public function status(){
        $findPendiente = false; 
        if(($this->ticketLines->isEmpty())){
            return TicketStatusEnum::VACIO; 
        }
        foreach ($this->ticketLines as $tl){
            if($tl->status() == TicketStatusEnum::PERDIDO){
                return TicketStatusEnum::PERDIDO;
            }
            if($tl->status() == TicketStatusEnum::PENDIENTE){
                $findPendiente = true; 
            }
        }
        // Si llegamos hasta aquí NO HA HABIDO NINGUN PARTIDO PERDIDO por lo que o es pendiente o ganada.
        if($findPendiente){
            return TicketStatusEnum::PENDIENTE;
        }
        else{
            return TicketStatusEnum::GANADO; 
        }

    }
}
