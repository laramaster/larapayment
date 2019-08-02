<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
    	return $card_number = Card::where('number',$request->number)->first();
    }
}
