<?php 

namespace App\Enum; 

enum GameResultEnum:string
{
    case LOCAL = '1'; 
    case EMPATE = 'X'; 
    case VISITANTE = '2'; 
    case PENDIENTE = '-1';
     
}