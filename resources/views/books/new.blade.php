<form method="POST" action="/books">

	{{ csrf_field() }}

	<label for="title">Book Title:</label>
	<input type="text" name="title" id="title" required>
	<br>

	<label for="description">Description:</label>
	<input type="text" name="description" id="description" required>
	<br>


	<label for="price">Price:</label>
	<input type="text" name="price" id="price" required>
	<br>
	
	<label for="owner">Owner:</label>
	<select name="owner_id" id="owner">
		@foreach($students as $student)
			<option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
		@endforeach	
	</select>

	<input type="submit" value="Submit">

</form>