@foreach($books as $book)
	
	Book Title:
	{{ $book->title }}
	<br>

	Book Description:
	{{ $book->description }}
	<br>

	Book Price:
	{{ $book->price }}
	<br>
	
	Book Owner:
	{{ $book->owner()->first()->fname }}
	{{ $book->owner()->first()->lname }}
	<br>
	
	<a href="{{ url('/books/edit\/') . $book->id }}">Edit</a>

	<form method="POST" action="/books/{{ $book->id }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="Delete">
	</form>

	<hr>

@endforeach


