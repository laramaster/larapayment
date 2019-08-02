<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Balence;
use Auth;

class BalenceController extends Controller
{
    public function index()
    {
    	$balence = Balence::where('user_id',Auth::User()->id)->first();
    	return view('admin.balence',compact('balence'));
    }
}
