<form method="POST" action="/projects">

	{{ csrf_field() }}

	<label for="name">Project Name:</label>
	<input type="text" name="name" id="name" value="{{ $project->name }}" required>
	<br>

	<label for="description">Project Description:</label>
	<input type="text" name="description" id="description" value="{{ $project->description }}" required>
	<br>

	<label for="venue">Venue:</label>
	<input type="text" name="venue" id="venue" value="{{ $project->venue }}" required>
	<br>

	<label for="status">Status:</label>
	<input type="text" name="status" id="status" value="{{ $project->status }}" required>
	<br>

	<label for="budget">Budget Cost:</label>
	<input type="text" name="budget_cost" id="budget_cost" value="{{ $project->budget_cost }}" required>
	<br>

	<label for="projectHead">Project Head:</label>
	<select name="ph_id" id="projectHead" required>
		@foreach($students as $student)
			@if($student->id == $project->head()->first()->id)
				<option value="{{ $student->id }}" selected>{{ $student->fname }} {{ $student->lname }}</option>
			@else
				<option value="{{ $student->id }}">{{ $student->fname }} {{ $student->lname }}</option>
			@endif

		@endforeach	
	</select>

	<input type="submit" value="Submit">
</form>
