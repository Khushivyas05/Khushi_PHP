<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cate_id=document.forms["clientform"]["cate_id"].value;
	if(cate_id=="" || cate_id==null)
	{
		alert("Please fill out category id");
		return false;
	}
	var cate_name=document.forms["clientform"]["cate_name"].value;
	if(cate_name=="" || cate_name==null)
	{
		alert("Please fill out category name");
		return false;
	}
	var cate_des=document.forms["clientform"]["cate_des"].value;
	if(cate_des=="" || cate_des==null)
	{
		alert("Please fill out category description");
		return false;
	}
	var cate_img=document.forms["clientform"]["cate_img"].value;
	if(cate_img=="" || cate_img==null)
	{
		alert("Please upload category image");
		return false;
	}
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit cartype</span>
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
              <label class="control-label">Cate ID</label>
              <input type="text" name="cate_id" value="<?php echo $fetch->cate_id;?>" placeholder="car_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Category name</label>
              <input type="text" name="cate_name" value="<?php echo $fetch->cate_name;?>" placeholder="client_id">
            </div>
            <div class="clearfix"> </div>
			
			 
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Description</label>
              <input type="text" name="cate_des" value="<?php echo $fetch->cate_des;?>"  placeholder="Description"><br>
            </div>
             <div class="clearfix"> </div>
			 
            <div class="vali-form">
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Image</label>
              <input type="file" name="cate_img" value="<?php echo $fetch->cate_img;?>" placeholder="Image">
			  <img src="img/cartype/<?php echo $fetch->cate_img;?>" height="80" width="80">
            </div>
			
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