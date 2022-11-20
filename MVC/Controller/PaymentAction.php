<?php 
   
    session_start();

   
    if ($_SERVER['REQUEST_METHOD']=== "POST"){

    	$amount= sanitize($_POST['amount']);
    	$pay= sanitize($_POST['pay']);
       
    	$isValid= true;

        if(empty($amount)){
            $_SESSION['amount_error_msg']= "required";
            $isValid= false;
        }    

        if(empty($pay)){
            $_SESSION['pay_error_msg']= "Choose your preference";
            $isValid= false;
         }   
           

        if($isValid===true){
            $_SESSION['amount_error_msg']="";
            $_SESSION['pay_error_msg']= "";
            
            header("Location: ../View/end.php");

        }        
               
        else{
            header("Location: ../View/payment.php");
        }

    }

    function sanitize($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>