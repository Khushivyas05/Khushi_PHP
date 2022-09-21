<?php
include_once('header.php');
?>
<script>
function validate()
{
	var payment_id=document.forms["clientform"]["payment_id"].value;
	if(payment_id=="" || payment_id==null)
	{
		alert("Please fill out payment id");
		return false;
	}
	var cust_id=document.forms["clientform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out cust id");
		return false;
	}
	var booking_id=document.forms["clientform"]["booking_id"].value;
	if(booking_id=="" || booking_id==null)
	{
		alert("Please fill out booking id");
		return false;
	}
	var payment_type=document.forms["clientform"]["payment_type"].value;
	if(payment_type=="" || payment_type==null)
	{
		alert("Please fill out payment type");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Payment</span>
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
              <label class="control-label">Payment ID</label>
              <input type="text" name="payment_id" value="<?php echo $fetch->payment_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Booking ID</label>
              <input type="text" name="booking_id" value="<?php echo $fetch->booking_id;?>" placeholder="Username">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Payment type</label>
              <input type="text" name="payment_type" value="<?php echo $fetch->payment_type;?>"  placeholder="Email-id"><br>
            </div>
             <div class="clearfix"> </div>
			 
            <div class="vali-form">
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