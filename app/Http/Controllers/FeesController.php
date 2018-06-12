<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;

class FeesController extends Controller
{
    //
    public function pay()
	{
    	return view('/094056/fees');
	}

	public function add()
	{	
		
	    $fees = new Fees();
	    

	    $fees->student_id=request('student_id');
	    $fees->paymentdate=request('paymentdate');
	    $fees->amount=request('amount');
	    $fees->save();
	    return redirect('/');
	}
}
