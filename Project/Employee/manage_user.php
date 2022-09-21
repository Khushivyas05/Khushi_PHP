<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage User</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage User</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Cust_id</th>
						<th>Name</th>
						<th>User_name</th>
						<th>Email_id</th>
						<th>Contact_no</th>
						<th>Address</th>
						<th>Aadhar card no.</th>
						<th>Driving license no.</th>
						<th>Edit</th>
						<th>Delete</th>
						<th>Status</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_user_arr as $mu)
					{
					?>
					  <tr>
						<td><?php echo $mu->cust_id;?></td>
						<td><?php echo $mu->name;?></td>
						<td><?php echo $mu->user_name;?></td>
						<td><?php echo $mu->email_id;?></td>
						<td><?php echo $mu->contact_no;?></td>
						<td><?php echo $mu->address;?></td>
						<td><?php echo $mu->a_no;?></td>
						<td><?php echo $mu->dl_no;?></td>
						<td><a href="edituser?edit_cust_id=<?php echo $mu->cust_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cust_id=<?php echo $mu->cust_id;?>" class="btn btn-danger">Delete</a></td>
						<td><a href="status?status_cust_id=<?php echo $mu->cust_id;?>" class="btn btn-primary"><?php echo $mu->status;?></a></td>
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
