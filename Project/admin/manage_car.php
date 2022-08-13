<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Car</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Car</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>car_id</th>
						<th>client_id</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Image</th>
						<th>Type</th>
						<th>Fuel type</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_car_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->car_id;?></td>
						<td><?php echo $m->client_id;?></td>
						<td><?php echo $m->name;?></td>
						<td><?php echo $m->des;?></td>
						<td><?php echo $m->price;?></td>
						<td><?php echo $m->img;?></td>
						<td><?php echo $m->type;?></td>
						<td><?php echo $m->fuel_type;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_car_id=<?php echo $m->car_id;?>" class="btn btn-danger">Delete</a></td>
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