<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;

class StudentController extends Controller
{
    //

    public function create()
	{
    	return view('/094056/student');
	}
	public function store(Request $request)
	{	
		
	    $student = new Student();
	    

	    $student->name=request('name');
	    $student->dob=request('dob');
	    $student->address=request('address');
	    $student->save();
	    return redirect('/');
	}
}
