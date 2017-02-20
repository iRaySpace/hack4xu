<form method="POST" action="/students/update">
	
	{{ csrf_field() }}

	<input type="hidden" name="_method" value="PUT">

	<label for="fName">First Name:</label>
	<input type="text" name="fName" id="fName" value="{{ $student->fname }}" required>
	<br>

	<label for="lName">Last Name:</label>
	<input type="text" name="lName" id="lName" value="{{ $student->lname }}" required>
	<br>

	<label for="college">College:</label>
	<input type="text" name="college" id="college" value="{{ $student->college }}" required>
	<br>

	<label for="course">Course:</label>
	<input type="text" name="course" id="course" value="{{ $student->course }}" required>
	<br>

	<label for="contNumber">Contact Number:</label>
	<input type="text" name="contNumber" id="contNumber" value="{{ $student->cont_number }}" required>
	<br>
	
	<input type="hidden" value="{{ $student->id }}" name="id">

	<input type="submit" value="Submit">

</form>