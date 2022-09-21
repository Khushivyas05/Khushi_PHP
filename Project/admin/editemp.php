<?php
include_once('header.php');
?>
 <script>
 function validate()
 {
	 var name=document.forms["empform"]["name"].value;
	 if(name=="" || name==null)
	 {
		 alert("Please fill out name");
		 return false;
	 }
	 var alpha=/^[A-Za-z]+$/;
	 if(!alpha.test(name))
	 {
		 alert("Please fill out only alpha characters");
		 return false;
	 }
	 
	 var user_name=document.forms["empform"]["user_name"].value;
	 if(user_name==""|| user_name==null)
	 {
		 alert("Please fill out username");
		 return false;
	 }
	 
	 var email_id=document.forms["empform"]["email_id"].value;
	 if(email_id==""|| email_id==null)
	 {
		 alert("Please fill out email");
		 return false;
	 }
	 var mail=/^[a-zA-z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	 if(!mail.test(email_id))
	 {
		 alert("Please fill out proper email id");
		 return false;
	 }
	 
	 var address=document.forms["empform"]["address"].value;
	 if(address==""|| address==null)
	 {
		 alert("Please fill out address");
		 return false;
	 }
	 
	 var contact_no=document.forms["empform"]["contact_no"].value;
	 if(contact_no==""|| contact_no==null)
	 {
		 alert("Please fill out contact number");
		 return false;
	 }
	 var phone=/^[0-9]{10,11}$/;
	 if(!phone.test(contact_no))
	 {
		 alert("Please fill out only digits");
		 return false;
	 }
 }
 </script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="empform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Emp_id</label>
              <input type="text" name="emp_id" value="<?php echo $fetch->emp_id;?>" placeholder="emp_id">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <input type="text" name="user_name" value="<?php echo $fetch->user_name;?>" placeholder="Username">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" name="email_id" value="<?php echo $fetch->email_id;?>" placeholder="Email">
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="Mobile Number">
            </div>
            <div class="clearfix"> </div>
			
			 <div class="col-md-12 form-group1">
			 <label class="control-label">Address</label>
			 <textarea class="form-control" name="address" placeholder="Address"><?php echo $fetch->address;?></textarea>
			 </div>
             <div class="clearfix"> </div>
              
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            
            </div>
             
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
