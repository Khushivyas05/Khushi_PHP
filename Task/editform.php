<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h3>Edit Employee</h3>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
		<td>Emp Id:</td>
		<td><input type="text" name="emp_id" value="<?php echo $fetch->emp_id;?>"></td>
		</tr>
	
		<tr>
		<td>First name:</td>
		<td><input type="text" name="firstname" value="<?php echo $fetch->firstname;?>"></td>
		</tr>
		
		<tr>
		<td>Last name:</td>
		<td><input type="text" name="lastname" value="<?php echo $fetch->lastname;?>"></td>
		</tr>
		
		<tr>
		<td>Email:</td>
		<td><input type="text" name="email_id" value="<?php echo $fetch->email_id;?>" ></td>
		</tr>
		
		<tr>
		<td>Mobile:</td>
		<td><input type="text" name="mobile" value="<?php echo $fetch->mobile;?>"></td>
		</tr>
		
		
		
		<tr>
		<td><button name="submit" value="submit" class="btn btn-primary">Edit</button></td>
		</tr>
	</table>
</form>
</body>
</html>