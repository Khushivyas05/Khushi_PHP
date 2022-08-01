<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Client</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="table-responsive container mt-3">
				  <h2>Manage Client</h2>

				  <table class="table ">
					<thead>
					  <tr>
						<th>Client_id</th>
						<th>Name</th>
						<th>User_name</th>
						<th>Email_id</th>
						<th>Contact_no</th>
						<th>Address</th>
						<th>Aadhar card no.</th>
						<th>Driving license no.</th>
						<th>PUC no.</th>
						<th>Insurance policy no.</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_client_arr as $mc)
					{
					?>
					  <tr>
						<td><?php echo $mc->client_id;?></td>
						<td><?php echo $mc->name;?></td>
						<td><?php echo $mc->user_name;?></td>
						<td><?php echo $mc->email_id;?></td>
						<td><?php echo $mc->contact_no;?></td>
						<td><?php echo $mc->address;?></td>
						<td><?php echo $mc->a_no;?></td>
						<td><?php echo $mc->dl_no;?></td>
						<td><?php echo $mc->puc_no;?></td>
						<td><?php echo $mc->insurance;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
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