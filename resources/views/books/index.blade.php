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
	
	<hr>

@endforeach


