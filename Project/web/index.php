<?php
	include_once('header.php');
?>

<body>
	<!-- banner -->
	<div class="banner">
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
						<li class="active"><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="category">Categories</a></li>
						<li><a href="booking">Booking</a></li>
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
						<li class="active"><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="category">Categories</a></li>
						<li><a href="cars">Available cars</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			?>
			<div id="top" class="callbacks_container">
				<form action="" method="post" enctype="multipart/form-data">
				<div class="col-md-4">
				<label style="color:#f66c53">Pickup Location</label>
				<input type="text" class="form-control">
				</div>
				<div class="col-md-4">
				<label style="color:#f66c53">Drop Location</label>
				<input type="text" class="form-control">
				</div>
				<div class="col-md-4">
				<label style="color:#f66c53">Pickup Date & Time</label>
				<input type="datetime-local" class="form-control">
				</div>
				<div class="col-md-4"><br>
				<label style="color:#f66c53">Drop Date & Time</label>
				<input type="datetime-local" class="form-control">
				</div>
				<div class="col-md-4"><br>
				<input type="button" style="background-color:#f66c53;color:black;margin-top:27px;" value="Search" class="btn btn-basic">
				</div>
				</form>
			</div>
		</div>
	</div>
	<!---->
	<div class="welcome">
		<div class="container">
			<div class="welcome_sec">
				<div class="col-md-6 welcome_info">
					<h3>Welcome</h3>
					<span></span>
					<h4>SELF DRIVE CAR RENTAL IN AHMEDABAD</h4>
					<p>Depending on the occasion and the number of passengers, RentMyCar allows you to hire a rental or self-drive car of your choice, and at an affordable rate. 
					   Sign up on our website, and decide on the rental duration, pickup location, and car type. You can use RentMyCar to select the right car for the right purpose in your city. 
					   For instance, choose a light and small car to travel during peak business hours, or a powerful SUV for highway driving from Ahmedabad to Udaipur or Mount Abu with your friends.</p>
					<p>Business travellers can drive into the city from the Sardar Vallabhai Patel International airport, by availing the Ahmedabad airport pick-and-drop service, which will provide a rental taxi at the airport, once your flight lands. 
					   Additionally, business users can use the self drive cars to pick up their clients or managers. RentMyCar offers the joy of driving a car, without any added responsibilities such as car maintenance, paying for car insurance etc. 
					   It also provides you with the flexibility and convenience of booking a car on the move and also provides Roadside assistance (RSA) in case the car breaks down.</p>
					<a href="about" class="hvr-bounce-to-bottom">Read More</a>
				</div>
				<div class="col-md-6 welcome_pic">
					<h2>Car Rental Services In Ahmedabad</h2>
					<img src="images/banner5.jpg" class="img-responsive" alt="" />
					<h3>Affordable as compared to self-owned or chauffeur-driven cars.</h3>
					<p>With the convenience of online booking on the website, RentMyCar vehicles have all-India permits. RentMyCar provides service from multiple parking sites across the city so that you can pick up the car you have chosen. 
					</p>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->
	<div class="auto_sec">
		<div class="container">
			<h3>RENT A CAR</h3>
			<span></span>
			<div class="auto_sec_grids">
				<div class="col-md-8 auto_sec_left">
					<img src="images/abc.jpeg" class="img-responsive" alt="" />
					<h5><a href="">SELF DRIVE CAR RENTAL IN AHMEDABAD</a></h5>
					<p>Ranked 3rd by Forbes in the fastest growing cities of the decade, Ahmedabad, is the largest city in Gujarat. In terms of population, Ahmedabad is the 6th largest city in India and is home to more than 6 million people. 
					   With the rise of business travellers in the city, there has been a gradual increase in the number of people opting for self drive cars in Ahmedabad. Ahmedabad self drive car rental services are ideal for both business and vacation in the city. </p>
				</div>
				<div class="col-md-4 auto_sec_right">
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->


	<div class="slider btm_sld">
		<div class="container">
			<div class="callbacks2_container">
				<ul class="rslides" id="slider2">
					<li>
						<p></p>
					</li>
					<li>
						<p></p>
					</li>
					<li>
						<p></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!---->

	<!---->
	<div class="feature_sec">
		<div class="container">
			<div class="feature_head">
				<h3>Available Cars</h3>
				<span></span>
			</div>
			<ul id="flexiselDemo3">
				<?php
				foreach($fetcharr as $data)
				{
				?>
				<li>
					<div class="biseller-column" height="500px">
						<a href="#"><img src="img/cartype/<?php echo $data->cate_img;?>" height="250px" style="width:100%" alt=""/></a>
						<h4><?php echo $data->cate_name;?></h4>
						<p><?php echo $data->cate_des;?>
							</p>
						<a class="more hvr-bounce-to-bottom" href="cars">Rent Now..</a>
					</div>
				</li>
				<?php
				}
				?>
			</ul>
			<div class="clearfix"></div>

		</div>
	</div>
<?php
	include_once('footer.php');
?>