<?php
include_once('header.php');
?>
<body>
	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/car.png" height="40px" width="40px" alt=""/>RENT<span>MY</span> <span>CAR</span></a></h1>
				</div>
				<div class="top_details">
				<ul>
					<?php
					if(isset($_SESSION['user_name']))
					{
					?>
					<button class="btn btn-light"><a href="logout">Logout</a></button>
					<button class="btn btn-light"><a href="profile">My profile</a></button>
					<?php
					}
					else
					{
					?>
					<button class="btn btn-light"><a href="login">Login</a></button>
					<button class="btn btn-light"><a href="signup">Signup</a></button>
					<?php
					}
					?>
				</ul><br>
					<div class="search">
						<form>
							<input type="text" value="" placeholder="Search Location">
							<input type="submit" value="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<?php 
			if(isset($_SESSION['user_name']))
			{
			?>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="category">Categories</a></li>
						<li><a href="booking">Booking</a></li>
						<li><a href="cars">Available cars</a></li>
						<li class="active"><a href="addcar">Add your car</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			else
			{
			?>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="category">Categories</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			?>
				
		</div>
	</div>
	<!---->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top gal_heading">
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">add car</li>
				</ol>
				<h2>Add your car</h2><br>
			</div>
			<div class="gallery-bottom">
			<form name="clientform"  action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	
            <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Description:</label>
              <input type="text" class="form-control" name="des" placeholder="Description"><br>
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Capacity:</label>
              <input type="text" class="form-control" name="capacity" placeholder="Capacity"><br>
            </div>
             <div class="clearfix"> </div>
			
			 <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Mileage:</label>
              <input type="text" class="form-control" name="mileage" placeholder="Mileage"><br>
            </div>
             <div class="clearfix"> </div>
			
            <div class="vali-form">
            <div class="col-md-12 form-group1"><br>
              <label class="control-label">Price:</label>
              <input type="text" class="form-control" name="price" placeholder="Price">
            </div>
            <div class="clearfix"> </div>
            </div>
			
             <div class="vali-form vali-form1">
            <div class="col-md-12 form-group1"><br>
              <label class="control-label">Image:</label>
              <input type="file" class="form-control" name="img" placeholder="Image">
            </div>
			
            <div class="col-md-12 form-group1 form-last"><br>
              <label class="control-label">Type:</label>
              <input type="text" class="form-control" name="type" placeholder="Type">
            </div>
            <div class="clearfix"> </div>
            </div>
			
             <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Fuel Type:</label>
              <input type="text" class="form-control" name="fuel_type" placeholder="Fuel Type">
            </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
			 
            <div class="col-md-12 form-group"><br>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
		  
        </form>
			
			<div class="clearfix"> </div>
				
			</div>
		</div>
	</div>
	<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/jquery.min.js"></script>
	<!----end-gallery---->
	<script src="js/grid.js"></script>
	<script>
		$(function () {
			Grid.init();
		});
	</script>
<?php
include_once('footer.php');
?>