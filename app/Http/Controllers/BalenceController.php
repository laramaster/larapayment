<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Balence;

class BalenceController extends Controller
{
    public function index()
    {
    	$balence = Balence::where('user_id',Auth::User()->id)->first();
    	return view('admin.balence',compact('balence'));
    }

    public function payment_check(Request $request)
    {
    	return	"hello";
    }
}
