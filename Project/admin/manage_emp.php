<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Employee</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Emp_id</th>
						<th>Name</th>
						<th>User_name</th>
						<th>Email_id</th>
						<th>Contact_no</th>
						<th>Address</th>
						<th>Edit</th>
						<th>Delete</th>
						<th>Status</th>
					  </tr>
					</thead>
					<tbody>
					<?php
						foreach($manage_emp_arr as $m)
						{
					?>
					  <tr>
						<td><?php echo $m->emp_id;?></td>
						<td><?php echo $m->name;?></td>
						<td><?php echo $m->user_name;?></td>
						<td><?php echo $m->email_id;?></td>
						<td><?php echo $m->contact_no;?></td>
						<td><?php echo $m->address;?></td>
						<td><a href="editemp?edit_emp_id=<?php echo $m->emp_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_emp_id=<?php echo $m->emp_id;?>" class="btn btn-danger">Delete</a></td>
						<td><a href="status?status_emp_id=<?php echo $m->emp_id;?>" class="btn btn-primary"><?php echo $m->status;?></a></td>
					  </tr>
					  <?php
						}
					  ?>
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
