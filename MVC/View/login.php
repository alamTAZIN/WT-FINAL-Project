<?php 
session_start();
/*if (!isset($_SESSION['email'])){
  	header("Location: registration.php");
  }*/
  include "navigation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
	<h1>LOGIN</h1>

	<form action="../Controller/LoginAction.php" method="post" novalidate>

		<label for="email">Email:</label>
		<input type="email" name="email" placeholder="****@gmail.com">
		<?php echo isset($_SESSION['email_error_msg'])? $_SESSION['email_error_msg']: ""?>
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" placeholder="********">
		<?php echo isset($_SESSION['password_error_msg'])? $_SESSION['password_error_msg']: ""?>
		<br><br>
		
		<button>LogIn</button>
		<input type="button" onclick="window.location.href='../View/navigation.php';" class="btn btn-warning btn-lg" value="Home Page"/>
		
	</form>
	<?php echo isset($_SESSION['global_error_msg'])? $_SESSION['global_error_msg']: ""?>


</body>
</html>