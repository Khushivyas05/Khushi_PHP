<!DOCTYPE html>
<html>
	<head>
		<title>Employee table</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<script>
		function confirm_fun()
		{
			var ans=confirm("Are you sure want to Delete....");
			if(ans==true)
			{
				alert("Delete success");
				window.location='view_emp';
			}
			else
			{
				alert("Delete Failed");
			}
		}
		</script>
	</head>
<body>
<div class="container">
<h1 align="center">Employee Table</h1>
	<table align="center" class="table table-striped">
		<tr>
			<th>Emp_id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>E-mail</th>
			<th>Mobile</th>
			<th>Edit</th>
			<th>Delete</th>			
		</tr>
		<?php 
			foreach($view_emp_arr as $vemp)
			{
		?>
		<tr>
			 <td><?php echo $vemp->emp_id;?></td>
			 <td><?php echo $vemp->firstname;?></td>
			 <td><?php echo $vemp->lastname;?></td>
			 <td><?php echo $vemp->email_id;?></td>
			 <td><?php echo $vemp->mobile;?></td>
			 <td><a href="editform?edit_emp_id=<?php echo $vemp->emp_id;?>" class="btn btn-primary">Edit</td>
			 <td><a href="delete?del_emp_id=<?php echo $vemp->emp_id;?>" class="btn btn-danger" onclick="confirm_fun()">Delete</td>
			 
		</tr>
		<?php
			}
		?>
	</table>
	</div>
</body>
</html>