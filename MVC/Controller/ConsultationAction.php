<?php 
   
    session_start();

   
    if ($_SERVER['REQUEST_METHOD']=== "POST"){

    	$specialist= sanitize($_POST['specialist']);
    	$department= sanitize($_POST['department']);
       // $date= sanitize($_POST['date']);
        $timeslot= sanitize($_POST['timeslot']);
        $number= sanitize($_POST['number']);

    	$isValid= true;

        if(empty($specialist)){
            $_SESSION['specialist_error_msg']= "Select a specialist";
            $isValid= false;
        }    

        if(empty($department)){
            $_SESSION['department_error_msg']= "Required";
            $isValid= false;
         }   
       /* if(empty($date)){
            $_SESSION['date_error_msg']= "Required";
            $isValid= false; 
         }  */

         if(empty($timeslot)){
            $_SESSION['timeslot_error_msg']= "Select consultation time";
            $isValid= false; 
         } 

         if(empty($number)){
            $_SESSION['number_error_msg']= "Give your contact number";
            $isValid= false; 
         }            

        if($isValid===true){
            $_SESSION['specialist_error_msg']="";
            $_SESSION['department_error_msg']= "";
            $_SESSION['date_error_msg']= ""; 
            $_SESSION['timeslot_error_msg']= "";
            $_SESSION['number_error_msg']= "";
            header("Location: ../View/confirm2.php");

        }        
               
        else{
            header("Location: ../View/consultation.php");
        }

    }

    function sanitize($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>