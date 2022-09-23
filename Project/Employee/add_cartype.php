<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cate_name=document.forms["cartypeform"]["cate_name"].value;
	if(cate_name=="" || cate_name==null)
	{
		alert("Please fill out category name");
		return false;
	}
	var cate_des=document.forms["cartypeform"]["cate_des"].value;
	if(cate_des=="" || cate_des==null)
	{
		alert("Please fill out category description");
		return false;
	}
	var cate_img=document.forms["cartypeform"]["cate_img"].value;
	if(cate_img=="" || cate_img==null)
	{
		alert("Please fill out category Image");
		return false;
	}
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Cartype</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="cartypeform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="cate_name" placeholder="Name">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Description</label>
              <input type="text" name="cate_des" placeholder="Description">
            </div> 
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Image</label>
              <input type="file" name="cate_img">
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