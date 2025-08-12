
<?php


	$con=mysqli_connect("localhost","root","","db-errors");
		if {!$con}
		{
			die(`database is not connected`);
		}

	if(isset($_POST('perform')))
	{

		$us=$_POST["username"];
		$ps=$_POST["password"];
		if (empty($us))) 
		{
			$username_error = "Please enter username.";
		}
		if else (empty($ps))
		{
			$pass_error = "Please enter password.";  		
		}
		else
		{
			$admin_status = "Admin";

			$sele_us="select User_name from user_sign where User_name='$us'";
			$ql_user=mysqli_query($con,$sele_us)
			$rw_user=mysqli_fetch_array($ql_user);

			$sele_pass="select Password from user_sign where Password='$ps'";
			$ql_pass=mysqli_query(con,$sele_pass);
			$rw_pass=mysqli_fetch_array$ql_pass);
			if (! $rw_user) 
			{
				$username_error = "Username is invalid";
				//echo $username_alert;
			}

			if (! $rw_pass) 
			{
				$pass_error = Password is invalid";
				//echo $password_alert;
			}
			else
			{
				$sele="select * from user_sign where User_name='$us' and Password'$ps' and Role='$admin_status'";
			  $query_ad=mysqli_query($con,$sele);
			  	if (mysqli_num_rows($query_ad) > 0 ) 
			  	{
			  		$ad_data=mysqli_fetch_array($query_ad);
			  		$_SESSION['Admin'] = $ad_data['User_name'];
			  		$_SESSION['A'] = $ad_data['ID'];
			  		header("location:.../admin/pages/admin.php");

			  	}
			}


		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>advanced log in form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
	<div class="wrapper">
		<h2>Log in fom</h2>
        <p>Please fill this form to log in your account.</p>
        <form method="post" >
        	<div class="form-group">
                <input type="text" name="username" class="form-control <?php echo (!empty($username_error)) ? 'is-invalid' : ''; ?>"placeholder="Enter user name" >
                <span class="invalid-feedback"><?ph echo $username_error; </span>
            </div>
             <div class="form-group">
                <input type="password" name="password" class="form-control <?php echo (!empty($pass_error))) ? 'is-invalid' : ''; ?>" placeholder="Enter password" >
                <span class="invalid-feedback"><?php echo $pass_error; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="perform" value="Submit">
            </div>
        </form>
	</div>
</body>
</html>


