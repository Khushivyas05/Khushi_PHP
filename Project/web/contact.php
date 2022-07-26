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
						<li><a href="addcar">Add your car</a></li>
						<li class="active"><a href="contact">Contact Us</a></li>
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
						<li class="active"><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			?>
		</div>
	</div>
	<!---->
	<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h2>Contact</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>
			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777264.905388331!2d69.07507789461297!3d22.40133564661689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1663238734231!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<div class="contact-text">
					<div class="col-md-3 contact-right">
						<div class="address">
							<h5>Address</h5>
							<p>The company name,
								<span><b>Rent My Car</b></span>Gujarat State Highway 7,Halvad-363330</p>
						</div>
						<div class="address">
							<h5>Address1</h5>
							<p>Tel:098 25 415226,
								<span>State:Gujarat,India</span> Email: <a href="mailto:example@email.com">contact@example.com</a></p>
						</div>
					</div>
					<div class="col-md-9 contact-left">
						<form action="" method="post" enctype="multipart/form-data">
							<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" />
							<input type="text" name="email_id" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
							<input type="text" name="cont_no" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" />
							<textarea name="message" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
							<div class="submit-btn">
								<input type="submit" name="submit" value="SUBMIT">
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<?php
	include_once('footer.php');
?>