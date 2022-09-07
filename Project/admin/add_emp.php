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
	 var pass=document.forms["empform"]["pass"].value;
	 if(pass==""|| pass==null)
	 {
		 alert("Please fill out password");
		 return false;
	 }
		
 }
 </script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Employee</span>
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
              <label class="control-label">Name</label>
              <input type="text" name="name" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <input type="text" name="user_name" placeholder="Username">
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" name="email_id" placeholder="Email">
            </div>
             <div class="clearfix"> </div>
			 <div class="col-md-12 form-group1">
			 <label class="control-label">Address</label>
			 <textarea class="form-control" name="address" placeholder="Address"></textarea>
			 </div>
             <div class="clearfix"> </div>
              
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" name="contact_no" placeholder="Mobile Number">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-12 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" name="pass" placeholder="Create a password">
            </div>
            <div class="clearfix"> </div>
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
