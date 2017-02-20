<form method="POST" action="/projects">

	{{ csrf_field() }}

	<label for="name">Project Name:</label>
	<input type="text" name="name" id="name" required>
	<br>

	<label for="description">Project Description:</label>
	<input type="text" name="description" id="description" required>
	<br>

	<label for="venue">Venue:</label>
	<input type="text" name="venue" id="venue" required>
	<br>

	<label for="status">Status:</label>
	<input type="text" name="status" id="status" required>
	<br>

	<label for="budget">Budget Cost:</label>
	<input type="text" name="budget_cost" id="budget_cost" required>
	<br>

	<label for="projectHead">Project Head:</label>
	<select name="ph_id" id="projectHead" required>
		@foreach($students as $student)
			<option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
		@endforeach	
	</select>

	<input type="submit" value="Submit">
</form>
