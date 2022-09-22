<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cont_id=document.forms["clientform"]["cont_id"].value;
	if(cont_id=="" || cont_id==null)
	{
		alert("Please fill out contact Id");
		return false;
	}
	
	var name=document.forms["clientform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out name");
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
	var message=document.forms["clientform"]["message"].value;
	if(message=="" || message==null)
	{
		alert("Please fill out Message");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Contact</span>
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
              <label class="control-label">Contact ID</label>
              <input type="text" name="cont_id" value="<?php echo $fetch->cont_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Name">
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
              <input type="text" name="cont_no" value="<?php echo $fetch->cont_no;?>" placeholder="Contact Number">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			 <label class="control-label">Message</label>
			 <textarea class="form-control" name="message" placeholder="Address"><?php echo $fetch->message;?></textarea>
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