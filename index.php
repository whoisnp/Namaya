<?php 
	require('config.php');
	session_start();
	
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			$sqlEmail = "select * from users where email = '".$email."'";
			$rs = mysqli_query($conn,$sqlEmail);
			$numRows = mysqli_num_rows($rs);
			
			if($numRows  == 1)
			{
				$row = mysqli_fetch_assoc($rs);
				
				if(password_verify($password,$row['password']))
				{
					$_SESSION['user_id'] = $row['id'];
					$_SESSION['first_name'] = $row['first_name'];
					$_SESSION['last_name'] = $row['last_name'];
					
					//echo "<pre>";
					//print_r($_SESSION);
					//echo "</pre>";
					//exit;
					
					header('location:dashboard.php');
					exit;
					
				}
				else
				{
					$errorMsg =  "Wrong Email Or Password";
				}
			}
			else
			{
				$errorMsg =  "No User Found";
			}
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page | PHP Login and logout example with session</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

    <div class="container">
        <h1>NAMAYA</h1>
        <?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
				
			}
			
			
			
		?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="field-container">
                <label>Email</label>
                <input type="email" name="email" required placeholder="Enter Your Email">
            </div>
            <div class="field-container">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Enter Your Password">
            </div>
            <div class="field-container">
                <button type="submit" name="submit">Submit</button>
            </div>

        </form>
    </div>
</body>

</html>