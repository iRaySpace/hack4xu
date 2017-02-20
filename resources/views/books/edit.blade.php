<form method="POST" action="/books/update">

	{{ csrf_field() }}
	
	<input type="hidden" name="_method" value="PUT">

	<label for="title">Book Title:</label>
	<input type="text" name="title" id="title" value="{{ $book->title }}" required>
	<br>

	<label for="description">Description:</label>
	<input type="text" name="description" id="description" value="{{ $book->description }}" required>
	<br>
	
	<label for="isAvailable">Availability:</label><br>
	@if($book->isAvailable)
		<input type="radio" name="isAvailable" id="isAvailable" value="1" checked>Available<br>	
		<input type="radio" name="isAvailable" id="isAvailable" value="0">Not available
	@else
		<input type="radio" name="isAvailable" id="isAvailable" value="1">Available<br>
		<input type="radio" name="isAvailable" id="isAvailable" value="0" checked>Not available
	@endif
	<br>

	<label for="price">Price:</label>
	<input type="text" name="price" id="price" value="{{ $book->price }}" required>
	<br>
	
	<label for="owner">Owner:</label>
	<select name="owner_id" id="owner">
		@foreach($students as $student)
			<option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
		@endforeach	
	</select>
	
	<input type="hidden" name="id" value="{{ $book->id }}">
	
	<input type="submit" value="Submit">

</form>