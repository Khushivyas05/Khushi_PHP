<?php
include_once('header.php');
?>
<script>
function validate()
{
	var car_id=document.forms["clientform"]["car_id"].value;
	if(car_id=="" || car_id==null)
	{
		alert("Please fill out car id");
		return false;
	}
	var client_id=document.forms["clientform"]["client_id"].value;
	if(client_id=="" || client_id==null)
	{
		alert("Please fill out client id");
		return false;
	}
	var name=document.forms["clientform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out name");
		return false;
	}
	var des=document.forms["clientform"]["des"].value;
	if(des=="" || des==null)
	{
		alert("Please fill out description");
		return false;
	}
	var capacity=document.forms["clientform"]["capacity"].value;
	if(capacity=="" || capacity==null)
	{
		alert("Please fill out capacity");
		return false;
	}
	var mileage=document.forms["clientform"]["mileage"].value;
	if(mileage=="" || mileage==null)
	{
		alert("Please fill out mileage");
		return false;
	}
	var price=document.forms["clientform"]["price"].value;
	if(price=="" || price==null)
	{
		alert("Please fill out price");
		return false;
	}
	var img=document.forms["clientform"]["img"].value;
	if(img=="" || img==null)
	{
		alert("Please upload image");
		return false;
	}
	var type=document.forms["clientform"]["type"].value;
	if(type=="" || type==null)
	{
		alert("Please fill out type");
		return false;
	}
	var fuel_type=document.forms["clientform"]["fuel_type"].value;
	if(fuel_type=="" || fuel_type==null)
	{
		alert("Please fill out Fuel type");
		return false;
	}
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit car</span>
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
              <label class="control-label">Car ID</label>
              <input type="text" name="car_id" value="<?php echo $fetch->car_id;?>" placeholder="car_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Client Id</label>
              <input type="text" name="client_id" value="<?php echo $fetch->client_id;?>" placeholder="client_id">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="name">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Description</label>
              <input type="text" name="des" value="<?php echo $fetch->des;?>"  placeholder="Description"><br>
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Capacity</label>
              <input type="text" name="capacity" value="<?php echo $fetch->capacity;?>"  placeholder="Capacity"><br>
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Mileage</label>
              <input type="text" name="mileage" value="<?php echo $fetch->mileage;?>"  placeholder="Mileage"><br>
            </div>
             <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Price</label>
              <input type="text" name="price" value="<?php echo $fetch->price;?>" placeholder="price">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Image</label>
              <input type="file" name="img" value="<?php echo $fetch->name;?>" placeholder="Image">
			  <img src="../web/img/car/<?php echo $fetch->img;?>" height="80" width="80">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Type</label>
              <input type="text" name="type" value="<?php echo $fetch->type;?>" placeholder="Driving license no.">
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Fuel Type</label>
              <input type="text" name="fuel_type" value="<?php echo $fetch->fuel_type;?>" placeholder="PUC no.">
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