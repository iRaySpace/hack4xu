<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentsController extends Controller
{
    
    //
    public function index()
    {
    	return view('students.index')->with('students', Student::all());
    }

    public function new()
    {
    	return view('students.new');
    }

    public function insert(Request $request)
    {
    	$student = new Student;

    	$student->fname = $request->input('fName');
		$student->lname = $request->input('lName');
		$student->college = $request->input('college');
		$student->course = $request->input('course');
		$student->cont_number = $request->input('contNumber');
		$student->save();

		return redirect('/students');

    }

    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect('/students');
    }

}
