<?php 
  session_start();
  include "navigation.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consultation</title>
</head>
<body>
	<h1>Register for consulting</h1>

	<form action="../Controller/ConsultationAction.php" method="post" novalidate>

		<label for="specialist"> Specialist:</label>

    <select name="specialist" id="specialist" placeholder="" required>
    <option value="">Select</option>
    <option value="Dr.Nasima">Dr.Nasima</option>	
    <option value="Dr.Abdul">Dr.Abdul</option>
    <option value="Dr.Hashem">Dr.Hashem</option>
    <option value="Dr.Bari">Dr.Bari</option>
    <option value="Dr.Joshep">Dr.Joshep</option>
    <option value="Dr.Lee">Dr.Lee</option>
    <option value="Dr.Atunu">Dr.Atunu</option>
    <option value="Dr.Mridha">Dr.Mridha</option>
    <option value="Dr.Nila">Dr.Nila</option>
    <option value="Dr.Farjana">Dr.Farjana</option>
    <option value="Dr.Farida">Dr.Farida</option>
    </select>
    <?php echo isset($_SESSION['specialist_error_msg'])? $_SESSION['specialist_error_msg']: ""?>
    <br><br>

		<label for="department"> Department:</label>
    <select name="department" id="department" required>
    <option value="">Select</option>	
    <option value="Gynaecology">Gynaecology</option>
    <option value="Medicine">Medicine</option>
    <option value="Paediatrics">Paediatrics</option>
    <option value="ENT">ENT</option>
    <option value="Orthopaedics">Orthopaedics</option>
    <option value="Physiotherapy">Physiotherapy</option>
    <option value="Neurology">Neurology</option>
    <option value="Cardiology">Cardiology</option>
    <option value="Surgery">Surgery</option>
    <option value="Urology">Urology</option>
    </select>
    <?php echo isset($_SESSION['department_error_msg'])? $_SESSION['department_error_msg']: ""?>
    <br><br>
    
    <label for="date"> Date:</label>
    <input type="date">
    
    <br><br>

    <label for="timeslot"> Timeslot:</label>
    <select name="timeslot" id="timeslot" required>
    <option value=""></option>	
    <option value="9:30-10:00">9:30-10:00</option>
    <option value="10:00-10:30">10:00-10:30</option>
    <option value="10:30-11:30">10:30-11:30</option>
    <option value="11:30-12:00">11:30-12:00</option>
    <option value="12:00-12:30">12:00-12:30</option>
    <option value="14:00-14:30">14:00-14:30</option>
    <option value="14:30-15:00">14:30-15:00</option>
    <option value="15:00-15:30">15:00-15:30</option>
    <option value="15:30-16:00">15:30-16:00</option>
    </select>
    <?php echo isset($_SESSION['timeslot_error_msg'])? $_SESSION['timeslot_error_msg']: ""?>
    <br><br>
     
     <label for="number">ContactNo:</label>
		<input type="text" name="number" placeholder="phoneNo">
		<?php echo isset($_SESSION['number_error_msg'])? $_SESSION['number_error_msg']: ""?>
		<br><br>


    <input type="submit">
    <input type="button" onclick="window.location.href='../View/navigation.php';" class="btn btn-warning btn-lg" value="Home Page"/>
   </form>


</body>
</html>