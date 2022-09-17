<!DOCTYPE html>
<html>
<head>
	<title>Add employee</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h3>Add Employee</h3>
<form name="empform" action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
		<td>First name:</td>
		<td><input type="text" name="firstname"></td>
		</tr>
		
		<tr>
		<td>Last name:</td>
		<td><input type="text" name="lastname"></td>
		</tr>
		
		<tr>
		<td>Email:</td>
		<td><input type="text" name="email_id"></td>
		</tr>
		
		<tr>
		<td>Mobile:</td>
		<td><input type="number" name="mobile"></td>
		</tr>
		
		<tr>
		<td>Address:</td>
		<td><textarea name="address" rows="5px" cols="30px"></textarea></td>
		</tr>
		
		<tr>
		<td>Gender:</td>
		<td><input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
		</td>
		</tr>
		
		<tr>
		<td>Password:</td>
		<td><input type="password" name="pass"></td>
		</tr>
		
		<tr>
		<td>Confirm password:</td>
		<td><input type="password" name="conpass"></td>
		</tr>
		
		<tr>
		<td><button name="submit" value="Submit" class="btn btn-primary">Submit</button></td>
		</tr>
	</table>
</form>
</body>
</html>