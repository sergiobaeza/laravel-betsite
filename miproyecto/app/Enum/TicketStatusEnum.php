<?php 

namespace App\Enum; 

enum TicketStatusEnum:string
{
    case PENDIENTE = 'PENDIENTE'; 
    case GANADO = 'GANADO'; 
    case PERDIDO = 'PERDIDO'; 
    case VACIO = 'VACIO';
     
}