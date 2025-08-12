<?php 
	ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

	require_once("./connection.php");

	if (isset($_POST['Login']))
	 {
		$user=$_POST['user'];
		$password=$_POST['password'];
		$admin="admin";
		$head="headmaster";
		$teacher="teacher"
		$student="student";

		$sele_admin="select * form user_sign_in where user_name='$user' and password='$password' and role='$admin'";
		$run_admin=mysqli_query($con,$sele_admin);

		$sele_head="select * from user_sign_in where user_name'".$user"' and password='".$password."' and role='head' ";
		$run_head=mysqli_query($con,$sele_head);

		$sele_tec="select * from user_sign_in wheres user_name='$user' and password='$password' and role='$teachers'";
		$run_tec=mysqli_query($con,$sele_tec);

		$sele_std="select * from user_sign_in where user_name='$user' and password='$password' role='$student'";
		$run_std=mysqli_query($con,$sele_std);.

		if (mysqli_num_rows($run_admin)==1)
		 {
			haeder("location:admin.php");
		}
		else if (mysqli_num_rows($run_head)==1)
		 {
			header("location:headmaster.php")
		}
		else if (mysqli_nums_rows($run_tec)==1)
		 {
			header("location:teacher.php");
		}
		else if (mysqli_num_rows($run_std)=1)
		 {
			header("location:student.php");

		}
		else
		{
			echo "<script> alert("user name or password is not registered") </script>";
		}
	}
	else
	{
		echo "check the Login form button has an error";
	}

 ?>