<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Cartype</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Cartype</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Cate_id</th>
						<th>Category name</th>
						<th>Description</th>
						<th>Category Image</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_cartype_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->cate_id;?></td>
						<td><?php echo $m->cate_name;?></td>
						<td><?php echo $m->cate_des;?></td>
						<td><img src="img/cartype/<?php echo $m->cate_img;?>" height="80" width="80"></td>
						<td><a href="editcartype?edit_cate_id=<?php echo $m->cate_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cate_id=<?php echo $m->cate_id;?>" class="btn btn-danger">Delete</a></td>
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