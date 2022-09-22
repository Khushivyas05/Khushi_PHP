<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cust_id=document.forms["clientform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out customer id");
		return false;
	}
	var name=document.forms["clientform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out name");
		return false;
	}
	var user_name=document.forms["clientform"]["user_name"].value;
	if(user_name=="" || user_name==null)
	{
		alert("Please fill out user name");
		return false;
	}
	var email_id=document.forms["clientform"]["email_id"].value;
	if(email_id=="" || email_id==null)
	{
		alert("Please fill out email id");
		return false;
	}
	var contact_no=document.forms["clientform"]["contact_no"].value;
	if(contact_no=="" || contact_no==null)
	{
		alert("Please fill out contact number");
		return false;
	}
	var address=document.forms["clientform"]["address"].value;
	if(address=="" || address==null)
	{
		alert("Please fill out address");
		return false;
	}
	var a_no=document.forms["clientform"]["a_no"].value;
	if(a_no=="" || a_no==null)
	{
		alert("Please fill out aadhar card number");
		return false;
	}
	var dl_no=document.forms["clientform"]["dl_no"].value;
	if(dl_no=="" || dl_no==null)
	{
		alert("Please fill out driving license number");
		return false;
	}
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit user</span>
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
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Username</label>
              <input type="text" name="user_name" value="<?php echo $fetch->user_name;?>" placeholder="Username">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email-id</label>
              <input type="text" name="email_id" value="<?php echo $fetch->email_id;?>"  placeholder="Email-id"><br>
            </div>
             <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Contact Number</label>
              <input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="Contact Number">
            </div>
            <div class="clearfix"> </div>
            </div>
			<div class="col-md-12 form-group1">
			 <label class="control-label">Address</label>
			 <textarea class="form-control" name="address" placeholder="Address"><?php echo $fetch->address;?></textarea>
			 </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Aadhar card no.</label>
              <input type="text" name="a_no" value="<?php echo $fetch->a_no;?>" placeholder="Aadhar card no.">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Driving license no.</label>
              <input type="text" name="dl_no" value="<?php echo $fetch->dl_no;?>" placeholder="Driving license no.">
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