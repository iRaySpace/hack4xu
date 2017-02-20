<form method="POST" action="/students">
	
	{{ csrf_field() }}

	<label for="fName">First Name:</label>
	<input type="text" name="fName" id="fName" required>
	<br>

	<label for="lName">Last Name:</label>
	<input type="text" name="lName" id="lName" required>
	<br>

	<label for="college">College:</label>
	<input type="text" name="college" id="college" required>
	<br>

	<label for="course">Course:</label>
	<input type="text" name="course" id="course" required>
	<br>

	<label for="contNumber">Contact Number:</label>
	<input type="text" name="contNumber" id="contNumber" required>
	<br>

	<input type="submit" value="Submit">

</form>