<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Booking</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Booking_id</th>
						<th>Cust_id</th>
						<th>Car_id</th>
						<th>Book date</th>
						<th>Book time</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_booking_arr as $mb)
					{
					?>
					  <tr>
						<td><?php echo $mb->booking_id;?></td>
						<td><?php echo $mb->cust_id;?></td>
						<td><?php echo $mb->car_id;?></td>
						<td><?php echo $mb->book_date;?></td>
						<td><?php echo $mb->book_time;?></td>
						<td><a href="editbooking?edit_booking_id=<?php echo $mb->booking_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_booking_id=<?php echo $mb->booking_id;?>" class="btn btn-danger">Delete</a></td>
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