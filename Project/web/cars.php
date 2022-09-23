<?php
include_once('header.php');
?>

<body>
	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/car.png" alt=""/>RENT<span>MY</span> <span>gallery</span></a></h1>
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
						<li class="active"><a href="cars">Available cars</a></li>
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
				<h2>Our Cars</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">cars</li>
				</ol>
			</div>
			<div class="gallery-bottom">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="single" data-largesrc="images/62.jpg" data-title="Maruti Suzuki Dzire" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/62.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/2.jpg" data-title="Audi" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/2.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/63.jpg" data-title="Mahindra Scorpio" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/63.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/64.jpg" data-title="Toyoto Fortuner" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/64.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/65.jpg" data-title="Maruti Suzuki Swift" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/65.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/66.jpg" data-title="MINI Cooper" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/66.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/7.jpg" data-title="Audi" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/7.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="single" data-largesrc="images/67.jpg" data-title="Honda city" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/67.jpg" alt="img01"/>
						</a>
					</li>
					<div class="clearfix"> </div>
				</ul>
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