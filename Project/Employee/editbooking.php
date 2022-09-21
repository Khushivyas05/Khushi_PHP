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
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="clientform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Booking ID</label>
              <input type="text" name="booking_id" value="<?php echo $fetch->booking_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Car ID</label>
              <input type="text" name="car_id" value="<?php echo $fetch->car_id;?>" placeholder="Username">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Booking date</label>
              <input type="text" name="book_date" value="<?php echo $fetch->book_date;?>"  placeholder="Email-id"><br>
            </div>
             <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Booking time</label>
              <input type="text" name="book_time" value="<?php echo $fetch->book_time;?>" placeholder="Contact Number">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			
            <div class="clearfix"> </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>