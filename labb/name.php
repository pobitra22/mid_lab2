<!DOCTYPE html>
<html>
<head>
	<title>PERSON PROFILE</title>
</head>
<body>
	

	<form method="POST" action="concate.php">
	
	<table border="1" width="40%" height="80%" align="center">
    	<tr>
		<td colspan='5'>
		<h1 align='center'>PERSON PROFILE</h1>
		</td>
		</tr>

	
		
	
		<tr>
			<td>Name:</td>
			<td><input type="text" name="uname" size="5" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="text" name="email"/></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
		<tr>
			<td>Date of Birth:</td>
			<td>
			<input type="text" size="4"  name="dd">/
			<input type="text" size="4"  name="mm">/
			<input type="text" size="4"  name="yyyy">
			(dd/mm/yyyy)
			</td>
		</tr>
		
		<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
					<option>B-</option>
					<option>O+</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSc
				<input type="checkbox" name="">MSc
			</td>
		</tr>
		<tr>
		<td>Photo</td>
		<td>
		<input type="file" name="photo_file">
		</td>
		</tr>
	
			<tr>
			<td colspan="3" align="right">
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>