<?php
   
   include "navigation.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
</head>
<body>
	<h1>PAYMENT!</h1>

	<form action="../Controller/PaymentAction.php" method="post" novalidate>

	<label for="amount">Fee:</label>
		<input type="text" name="amount" placeholder="amount">
		<?php echo isset($_SESSION['amount_error_msg'])? $_SESSION['amount_error_msg']: ""?>
 		<br><br>
 		<label for="pay">Pay By:</label>
 		<?php echo isset($_SESSION['pay_error_msg'])? $_SESSION['pay_error_msg']: ""?>
    <input type="radio" name="pay"  value="Cash">Cash
    <input type="radio" name="pay"  value="Card">Card
    <input type="radio" name="pay"  value="Online">Online
    
   
    <br><br>
    <input type="submit" name="Payment" placeholder="Pay">
    <input type="button" onclick="window.location.href='../View/navigation.php';" class="btn btn-warning btn-lg" value="Home Page"/>
   </form>

</body>
</html>