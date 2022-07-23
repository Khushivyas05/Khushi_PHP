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
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Name" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Username</label>
              <input type="text" placeholder="Username" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Password</label>
              <input type="password" placeholder="Password" required="">
            </div>
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email-id</label>
              <input type="text" placeholder="Email-id" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Contact Number</label>
              <input type="text" placeholder="Contact Number" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
			<div class="col-md-12 form-group1">
			 <label class="control-label">Address</label>
			 <textarea class="form-control" placeholder="Address" required=""></textarea>
			 </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Aadhar card no.</label>
              <input type="text" placeholder="Aadhar card no." required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Driving license no.</label>
              <input type="text" placeholder="Driving license no." required="">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">PUC No</label>
              <input type="text" placeholder="PUC no." required="">
            </div>
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Insurance No.</label>
              <input type="text" placeholder="Insurance no." required="">
            </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
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