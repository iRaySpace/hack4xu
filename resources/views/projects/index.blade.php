@foreach($projects as $project)

	Name of the Project:
	{{ $project->name }}
	<br>
	
	Project Head:
	{{ $project->head()->first()->fname }}
	{{ $project->head()->first()->lname }}

	<a href="{{ url('/projects/edit\/') . $project->id }}">Edit</a>
	
	<form method="POST" action="/projects/{{ $project->id }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="Delete">
	</form>

	<hr>

@endforeach