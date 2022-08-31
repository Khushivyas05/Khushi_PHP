<?php
include_once('../admin/model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			case '/gallery':
			include_once('gallery.php');
			break;
			case '/about':
			include_once('about.php');
			break;
			case '/contact':
			include_once('contact.php');
			break;
			case '/services':
			include_once('services.php');
			break;
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('customer',$where);
				$res=$run->num_rows;
				if($res==1)
				{
					$data=$run->fetch_object();
					$status=$data->status;
					if($status=="Unblock")
					{
						$_SESSION['user_name']=$user_name;
						echo "<script>
								alert('Login success')
								window.location='index';
							  </script>";
					}
					else
					{
						echo "<script>
							alert('login failed due to Blocked')
							window.location='login';
							</script>";
					}
				}
				else
				{
					echo "<script>
							alert('Login failed due to wrong credentials')
							window.location='index';
					     </script>";
				}
			}
			include_once('login.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$user_name=$_REQUEST['user_name'];
				$email_id=$_REQUEST['email_id'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$contact_no=$_REQUEST['contact_no'];
				$address=$_REQUEST['address'];
				
				$arr=array("name"=>$name,"user_name"=>$user_name,"email_id"=>$email_id,"pass"=>$pass,"contact_no"=>$contact_no,"address"=>$address);
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> 
					alert('Registered successfully') 
					window.location='index';
					</script>";
					
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('signup.php');
			break;
			
			case '/logout':
			unset($_SESSION['user_name']);
			echo "<script>
							alert('Logout success')
							window.location='index';
					     </script>";
						 
			case '/profile':
			$where=array("user_name"=>$_SESSION['user_name']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			case '/editprofile':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$user_name=$_REQUEST['user_name'];
					$email_id=$_REQUEST['email_id'];
					$contact_no=$_REQUEST['contact_no'];
					$address=$_REQUEST['address'];
					
					$arr=array("name"=>$name,"user_name"=>$user_name,"email_id"=>$email_id,"contact_no"=>$contact_no,"address"=>$address);
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('Update Success');
						window.location='profile';
						</script>";
					}
				}
			}
			include_once('editprofile.php');
			break;
			
			default:
			include_once('blog.php');
			break;
			
			
		}
	}
}

$obj=new control;
?>