<?php
	include_once('header.php');
?>
<script>
function validate()
{
	var booking_id=document.forms["clientform"]["booking_id"].value;
	if(booking_id=="" || booking_id==null)
	{
		alert("Please fill out booking id");
		return false;
	}
	var cust_id=document.forms["clientform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out cust id");
		return false;
	}
	var car_id=document.forms["clientform"]["car_id"].value;
	if(car_id=="" || car_id==null)
	{
		alert("Please fill out car id");
		return false;
	}
	var book_date=document.forms["clientform"]["book_date"].value;
	if(book_date=="" || book_date==null)
	{
		alert("Please fill out booking date");
		return false;
	}
	var book_time=document.forms["clientform"]["book_time"].value;
	if(book_time=="" || book_time==null)
	{
		alert("Please fill out booking time");
		return false;
	}
	
}
</script>
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
					<button class="btn btn-light"><a href="signup">My profile</a></button>
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
						<li class="active"><a href="booking">Booking</a></li>
						<li><a href="cars">Available cars</a></li>
						<li><a href="addcar">Add your car</a></li>
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
						<li><a href="cars">Available cars</a></li>
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
	<div class="services">
		<div class="container">
			<h2>Booking</h2>
			<ol class="breadcrumb">
				<li><a href="index">Home</a></li>
				<li class="active">Booking</li>
			</ol>
			<form name="clientform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Booking ID</label>
              <input type="text" class="form-control" name="booking_id" placeholder="Booking ID">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1"><br>
              <label class="control-label">Cust ID</label>
              <input type="text" class="form-control" name="cust_id" placeholder="Customer ID">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Car ID</label>
              <input type="text" class="form-control" name="car_id" placeholder="Car id">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Booking date</label>
              <input type="text" class="form-control" name="book_date" placeholder="Booking date"><br>
            </div>
             <div class="clearfix"> </div>
			 
            
            <div class="col-md-12 form-group1"><br>
              <label class="control-label">Booking time</label>
              <input type="text" class="form-control" name="book_time" placeholder="Booking Time">
            </div>
            <div class="clearfix"> </div>
            
			
			
            <div class="clearfix"> </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group"><br>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
			
				<div class="clearfix"></div>
			
		</div>
	</div>
<?php
include_once('footer.php');
?>