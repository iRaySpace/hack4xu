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

    public function edit($id)
    {
        $students = Student::all();
        $project = Project::find($id);

        return view('projects.edit', ['project' => $project, 'students' => $students]);
    }

    public function update(Request $request)
    {
        $project = Project::where('id', $request->input('id'));

        $project->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'venue' => $request->input('venue'),
            'status' => $request->input('status'),
            'budget_cost' => $request->input('budget_cost'),
            'ph_id' => $request->input('ph_id')
        ]);


    }

    public function destroy($id)
    {
        
        $project = Project::find($id);

        $project->delete();

        return redirect('/projects');

    }

    public function insert(Request $request)
    {
    	
        $project = new Project;

    	$project->name = $request->input('name');
		$project->description = $request->input('description');
		$project->venue = $request->input('venue');
		$project->status = $request->input('status');
		$project->budget_cost = $request->input('budget_cost');
        $project->ph_id = $request->input('ph_id');
        
        $project->save();

        return redirect('/projects');

    }
}
