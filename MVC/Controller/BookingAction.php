<?php 
   
    session_start();

   
    if ($_SERVER['REQUEST_METHOD']=== "POST"){

    	$test= sanitize($_POST['test']);
    	$room= sanitize($_POST['room']);
        $facilities= sanitize($_POST['facilities']);
       
    	$isValid= true;

        if(empty($test)){
            $_SESSION['specialist_error_msg']= "required";
            $isValid= false;
        }    

        if(empty($room)){
            $_SESSION['room_error_msg']= "Choose your preference";
            $isValid= false;
         }   
      

         if(empty($facilities)){
            $_SESSION['facilities_error_msg']= "Choose your preference";
            $isValid= false; 
         } 

           

        if($isValid===true){
            $_SESSION['test_error_msg']="";
            $_SESSION['room_error_msg']= "";
            $_SESSION['facilities_error_msg']= ""; 
            
            header("Location: ../View/payment.php");

        }        
               
        else{
            header("Location: ../View/booking.php");
        }

    }

    function sanitize($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>