<?php 
  session_start();
  if (!isset($_SESSION['email'])){
  	//header("Location: login.php");
  	//include "consultation.php";
  }
  include "navigation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
	<h1> Hello! Kindly provide health information. </h1>

	<form action="../Controller/DashboardAction.php" method="post" novalidate>

		<label for="name">Name:</label>
		<input type="text" name="name" placeholder="name">
		<?php echo isset($_SESSION['name_error_msg'])? $_SESSION['name_error_msg']: ""?>
		<br><br>
		<labet for="gender"> Gender:</labet>
    <input type="radio" name="gender"  value="female">Female
    <input type="radio" name="gender"  value="male">Male
    <?php echo isset($_SESSION['gender_error_msg'])? $_SESSION['gender_error_msg']: ""?>
		<br><br>
		<label for="age">Age:</label>
		<input type="age" name="age" placeholder="write in number">
		<?php echo isset($_SESSION['age_error_msg'])? $_SESSION['age_error_msg']: ""?>
		<br><br>

		<label for="bloodtype">Blood Type:</label>

    <select name="bloodtype" id="bloodtype" required>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    </select>
    <?php echo isset($_SESSION['bloodtype_error_msg'])? $_SESSION['bloodtype_error_msg']: ""?>
    <br><br>
    <label for="comment">Health Issue:</label> 
    <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

		<input type="submit">
		<a href="../controller/LogoutAction.php">Logout</a>
	</form>

</body>
</html>