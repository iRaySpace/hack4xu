<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Student;

class ProjectsController extends Controller
{
    public function index(){
    	return view('projects.index')->with('projects', Project::all());
    }

    public function new()
    {
    	return view('projects.new')->with('students', Student::all());
    }

    public function insert(Request $request)
    {
    	
        $project = new Project;

    	$project->name = $request->input('name');
		$project->description = $request->input('description');
		$project->venue = $request->input('venue');
		$project->status = $request->input('status');
		$project->budget_cost = $request->input('budget_cost');

        $student = Student::where('id', $request->input('ph_id'))->get();

        echo $student->projects();

    }
}
