<?php 
session_start();
 //header("Location: login.php");
include "navigation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<h1>Registration Page</h1>

	<form action="../Controller/RegistrationAction.php" method="post" novalidate>

		<label for="firstname">First name:</label>
		<input type="txt" name="firstname" placeholder="first name">
		<?php echo isset($_SESSION['firstname_error_msg'])? $_SESSION['firstname_error_msg']: ""?>
		<br><br>

		<label for="lastname">Last name:</label>
		<input type="txt" name="lastname" placeholder="last name">
		<?php echo isset($_SESSION['lastname_error_msg'])? $_SESSION['lastname_error_msg']: ""?>
		<br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" placeholder="****@gmail.com">
		<?php echo isset($_SESSION['email_error_msg'])? $_SESSION['email_error_msg']: ""?>
		<br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" placeholder="********">
		<?php echo isset($_SESSION['password_error_msg'])? $_SESSION['password_error_msg']: ""?>
		<br><br>

		<label for="confirmpassword">Confirm Password:</label>
		<input type="password" name="confirmpassword" placeholder="********">
		<?php echo isset($_SESSION['confirmpassword_error_msg'])? $_SESSION['confirmpassword_error_msg']: ""?>
		<br><br>
		
	<a herf="../View/login.php">
		<button>Register</button>
		</a>
		<input type="button" onclick="window.location.href='../View/navigation.php';" class="btn btn-warning btn-lg" value="Home Page"/>

		<h3>Are you already registerd?</h3>
		<a href="../View/login.php">Log-In</a>

	</form>
	
	



</body>
</html>