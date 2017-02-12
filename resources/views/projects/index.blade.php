@foreach($projects as $project)

	Name of the Project:
	{{ $project->name }}
	<br>
	
	Project Head:
	{{ $project->head()->first()->fname }}
	{{ $project->head()->first()->lname }}
	<hr>

@endforeach