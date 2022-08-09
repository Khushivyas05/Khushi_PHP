<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Contact</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Cont_id</th>
						<th>Name</th>
						<th>Email-id</th>
						<th>Contact_no</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_contact_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->cont_id?></td>
						<td><?php echo $m->name?></td>
						<td><?php echo $m->email_id?></td>
						<td><?php echo $m->cont_no?></td>
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