<?php
include_once('header.php');
?>
<script>
function validate()
{
	var Feedback_id=document.forms["clientform"]["Feedback_id"].value;
	if(Feedback_id=="" || Feedback_id==null)
	{
		alert("Please fill out feedback id");
		return false;
	}
	
	var cust_id=document.forms["clientform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out cust id");
		return false;
	}
	var com=document.forms["clientform"]["com"].value;
	if(com=="" || com==null)
	{
		alert("Please fill out comment");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Feedback</span>
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
              <label class="control-label">Feedback ID</label>
              <input type="text" name="Feedback_id" value="<?php echo $fetch->Feedback_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Cust ID</label>
              <input type="text" name="cust_id" value="<?php echo $fetch->cust_id;?>" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
			 <label class="control-label">Comment</label>
			 <textarea class="form-control" name="com" placeholder="Address"><?php echo $fetch->com;?></textarea>
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