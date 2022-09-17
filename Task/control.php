<?php
include_once('model.php');
class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/task':
			include_once('task.php');
			break;
			
			case '/add_employee':
			if(isset($_REQUEST['submit']))
			{
				$firstname=$_REQUEST['firstname'];
				$lastname=$_REQUEST['lastname'];
				$email_id=$_REQUEST['email_id'];
				$mobile=$_REQUEST['mobile'];
				$address=$_REQUEST['address'];
				$gender=$_REQUEST['gender'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$password=$_REQUEST['conpass'];
				$conpass=md5($password);
				$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"email_id"=>$email_id,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"pass"=>$pass,"conpass"=>$conpass);
				$res=$this->insert('employee',$arr);
				if($res)
				{
					echo "<script> alert('Registered successfully')
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('add_employee.php');
			break;
			
			case '/editform':
			if(isset($_REQUEST['edit_emp_id']))
			{
				$emp_id=$_REQUEST['edit_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employee',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$firstname=$_REQUEST['firstname'];
					$lastname=$_REQUEST['lastname'];
					$email_id=$_REQUEST['email_id'];
					$mobile=$_REQUEST['mobile'];
					$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"email_id"=>$email_id,"mobile"=>$mobile);
					$res=$this->update('employee',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('Update Success');
						window.location='view_emp';
						</script>";
					}
				}
			}
			include_once('editform.php');
			break;
			
			
			
			
			case '/view_emp':
			$view_emp_arr=$this->selectall('employee');
			include_once('view_emp.php');
			break;
			
			
			
			case '/delete':
			if(isset($_REQUEST['del_emp_id']))
			{
				$emp_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee',$where);
				if($res)
				{
					echo "<script>
					alert('Delete success')
					window.location='view_emp';
					</script>";
				}
			}
			
			default:
			include_once('task.php');
			break;
			
		
			
			
			
			
		}
	}
}

$obj=new control;
?>