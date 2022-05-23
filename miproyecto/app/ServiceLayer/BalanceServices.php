<?php 
namespace App\ServiceLayer;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket; 
use App\Models\Game; 
use App\Models\TicketLine; 


class BalanceServices {

    public static function addBalance($user, $creditCardId, $balance) {
        // Revisar si tiene dinero suficiente
        if($balance < 5){
            return null;
        }

        DB::beginTransaction(); 

        // Deberiamos de hacer el cobro aquí 


        $user->addSaldo($balance); 
        $user->save();
        


        DB::commit(); 
        return true; 
    }


    public static function withdrawBalance($user, $creditCard, $balance){
        // Revisar si tiene dinero suficiente
        if($user->balance < $balance){
            return -1;
        }

        DB::beginTransaction(); 

        // Deberiamos de hacer el cobro aquí 


        $user->removeSaldo($balance); 
        $user->save();
        


        DB::commit(); 
        return 1; 
    }
}
