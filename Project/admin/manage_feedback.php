<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Feedback</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Feedback</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Feedback_id</th>
						<th>Cust_id</th>
						<th>Comment</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_feedback_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->Feedback_id;?></td>
						<td><?php echo $m->cust_id;?></td>
						<td><?php echo $m->com;?></td>
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
