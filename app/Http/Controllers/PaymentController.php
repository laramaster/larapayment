<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Balence;
use App\User;

class PaymentController extends Controller
{
	public function __construct(Request $request)
    {
       $secret_key = User::where('secret_key',$request->secret_key)->first();
		 $admin_balence = Balence::where('user_id',$secret_key->id)->first();
		if ($admin_balence == null) {
			$balences = new Balence();
			$balences->user_id =  $secret_key->id;
			$balences->balence = 0;
			$balences->save();
			
		}
    }


    public function payment(Request $request)
    {
    	 $card_number = Card::where('number',$request->number)->first();
    	 $card_date = Card::where('date', $request->date)->first();
    	 $card_key = Card::where('key',$request->key)->first();
    	 if ($card_number != null) {
    	 	if ($card_date != null) {
    	 		if ($card_key != null) {
    	 	 $balence = Balence::where('user_id',$card_number->user_id)->first();
    	 			if ($balence == null) {
    	 				$balences = new Balence();
    	 				$balences->user_id =  $card_number->user_id;
    	 				$balences->balence = 0;
    	 				$balences->save();
    	 				return "Your balence is null";
    	 			}else{
    	 				$balence_exists = Balence::where('user_id',$card_number->user_id)->first();
    	 				if ($balence_exists->balence < $request->amount) {
    	 					return "You do noy have enough money";
    	 				}
    	 				$balence->user_id = $balence->user_id;
    	 				$balence->balence = $balence->balence - $request->amount;
    	 				$balence->save();


    	 				$secret_key = User::where('secret_key',$request->secret_key)->first();
    	 				 $admin_balence = Balence::where('user_id',$secret_key->id)->first();
    	 				if ($admin_balence != null) {
    	 					$admin_balence->user_id = $secret_key->id;
	    	 				$admin_balence->balence = $balence->balence + $request->amount;
	    	 				$admin_balence->save();

	    	 				return "Your balence suessfully published";
    	 				}
    	 					
    	 				



    	 			}
    	 		}else{
    	 			return "Your Card key Doesn't Exists";
    	 		}
    	 	}else{
    	 		return "Your Card date Doesn't Exists";
    	 	}
    	 }else{
    	 	return "Your Card Number Doesn't Exists";
    	 }
    }
}
