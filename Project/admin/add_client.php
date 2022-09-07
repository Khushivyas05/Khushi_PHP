<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Client</span>
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
              <label class="control-label">Name</label>
              <input type="text" name="name" placeholder="Name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Username</label>
              <input type="text" name="user_name" placeholder="Username" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Password</label>
              <input type="password" name="pass" placeholder="Password" required="">
            </div>
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email-id</label>
              <input type="text" name="email_id"  placeholder="Email-id" required=""><br>
            </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Contact Number</label>
              <input type="text" name="contact_no" placeholder="Contact Number" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
			<div class="col-md-12 form-group1">
			 <label class="control-label">Address</label>
			 <textarea class="form-control" name="address" placeholder="Address" required=""></textarea>
			 </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Aadhar card no.</label>
              <input type="text" name="a_no" placeholder="Aadhar card no." required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Driving license no.</label>
              <input type="text" name="dl_no" placeholder="Driving license no." required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">PUC No</label>
              <input type="text" name="puc_no" placeholder="PUC no." required="">
            </div>
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Insurance No.</label>
              <input type="text" name="insurance" placeholder="Insurance no." required="">
            </div>
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