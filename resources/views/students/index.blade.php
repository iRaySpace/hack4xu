@foreach($students as $student)
	Name:
	{{ $student->fname }} {{ $student->lname }}
	<br>

	College:
	{{ $student->college }}
	<br>

	Course:
	{{ $student->course }}
	<br>
	
	<a href="{{ url('/students/edit\/') . $student->id }}">Edit</a>

	<form method="POST" action="/students/{{ $student->id }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="Delete">
	</form>

	<hr>

@endforeach