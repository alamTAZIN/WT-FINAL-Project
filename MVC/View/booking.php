<?php 
  session_start();
  include "navigation.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking</title>
</head>
<body>
	<h1>BOOKING HERE FOR TEST, WARD & KEVIN!</h1>

	<form action="../Controller/BookingAction.php" method="post" novalidate>

		<label for="test"> Test Type:</label>

    <select name="test" id="test" placeholder="" required>
    <option value="">Select</option>
    <option value="Blood">Blood</option>	
    <option value="Urin">Urin</option>
    <option value="Cough">Cough</option>
    <option value="X-ray">X-ray</option>
    <option value="Ultrasonography">Ultrasonography</option>
    <option value="Echocardiography">Echocardiography</option>
    <option value=" Endoscopy">Endoscopy</option>
    <option value="CT Scan">CT Scan</option>
    </select>
    <?php echo isset($_SESSION['test_error_msg'])? $_SESSION['test_error_msg']: ""?>
    <br><br>

    <label for="date"> Sample Submit Date:</label>
    <input type="date">
    
    <br><br>

    <labet for="room"> Room:</labet>
    <input type="radio" name="room"  value="WARD">WARD
    <input type="radio" name="room"  value="KEVIN">KEVIN
    <input type="radio" name="room"  value="NONE">NONE
    <?php echo isset($_SESSION['room_error_msg'])? $_SESSION['room_error_msg']: ""?>
    <br><br>

    <labet for="facilities">Facilities:</labet>
    <input type="radio" name="facilities"  value="AC">AC
    <input type="radio" name="facilities"  value="NON-AC">NON-AC
    <input type="radio" name="facilities"  value="NONE">NONE
    <?php echo isset($_SESSION['facilities_error_msg'])? $_SESSION['facilities_error_msg']: ""?>
    <br><br>


    <input type="submit">
    <input type="button" onclick="window.location.href='../View/navigation.php';" class="btn btn-warning btn-lg" value="Home Page"/>
   </form>


</body>
</html>