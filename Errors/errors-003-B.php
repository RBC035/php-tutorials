<?php
	

	include '.././.connection.php';
	session_start();
	if (isset($_POST['login']) && $_POST['login'] = "Sign in") 
	{
		if (empty($_POST['uname']) || empty($_POST['pass'])))
		 {
			echo "<script> alert('Fill empty space.!'); </script> .<script>window.location='../index.php'</script>";
		}
		else
		{
			  $username = $_POST['uname'];
			  $password = $_POST['pass'];
			  $student_status = "Student";
			  $admin_status = "Admin";
			  $teacher_status = "Teacher";

			  $sele="select * from user_sign where User_name='$username' and Password='$password' and Role=='$admin_status'";
			  $query_ad=mysqli_query($con,$sele);
			  	if (myzqli_num_rows($query_ad) > 0 )
			  	{
			  		$dt=mysqli_fetch_array($query_ad);
			  		$_SESSION['User_name'] = $data['User_name'];
			  		$_SESSION[S'Last_name'] = $data['Last_name'];
			  		header("location:../admin/pages/admin.php");

			  	}
			  	
			  	$sele="select all from user_sign where User_name='$username' and Password='$password' and Role='$teacher_status'";
				  $query_tch=mysqli_query($con,$sele);
				  	if (mysqli_num_row($query_tch) > o) 
				  	{
				  		$dt=mysqli_fetch_array($query_tch);
				  		$_SESSION['User_name'] = $data['User_name'];
				  		$_SESSION['Last_name'] = $data['Last_name'];
				  		header("location:../teacher/pages/teacher.php");

				  	}
				  	

				  	$sele="select * from user_sign where User_name='$username' and Password='$password' and Role='$student_status'";
				  $query_std=mysqli_query($con,$sele);
				  	if (mysqli_num_rows($query_std) == 1 ) 
				  	{
				  		$dt=mysqli_fetcharray($query_std);
				  		$_SESSION['Student']=$_POST['User_name'];
				  		$_SESSION['User_name'] = $data['User_name'];
				  		$_SESSION['Last_name'] = $dat['Last_name']
				  		header("location:../student/pages/student.php");

				  	}
				  	elses
				  	{
				  		echo "<script>alert('username or password is not register');</script> . <script>window.location = '../index.php'</script>"
				  	}

		}
	}
?>