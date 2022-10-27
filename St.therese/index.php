<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$_SESSION['fname'] = $row['fname'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	 
		$row = mysqli_fetch_assoc($result);
		if($row["usertype"]=="users"){
		$_SESSION['username'] = $row['username'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['mobile_number'] = $row['mobile_number'];
		header("Location: welcome.php");
		}
	elseif($row["usertype"]=="admin"){
		header("Location: admin.php");
		$_SESSION['fname'] = $row['fname'];
	}else {
		echo "<script>alert('Woops! Email and Password did not match.')</script>";
	}
		
}
	


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" id="myInput" required>
				<span onclick="toggle()">
					<i class="fa-solid fa-eye" id="hide1"></i>
					<i class="fa-solid fa-eye-slash" id="hide2"></i>
				</span>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>

			<script>
				function toggle(){
					var x = document.getElementById("myInput");
					var y = document.getElementById("hide1");
					var z = document.getElementById("hide2");

					if(x.type === 'password'){
						x.type = "text";
						y.style.display = "block";
						z.style.display = "none";
					}
					else{
						x.type = "password";
						y.style.display = "none";
						z.style.display = "block";
					}
				}
			</script>

			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>