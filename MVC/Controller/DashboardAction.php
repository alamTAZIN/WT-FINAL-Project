<?php 
    
    session_start();
     //header("Location: ../View/login.php");

    if ($_SERVER['REQUEST_METHOD']=== "POST"){

        $name= sanitize($_POST['name']);
        $gender= sanitize($_POST['gender']);
        $age= sanitize($_POST['age']);
        $bloodtype= sanitize($_POST['bloodtype']);
       

        $isValid= true;

        if(empty($name)){
            $_SESSION['name_error_msg']= " Name required*";
            $isValid= false;
        }    

        if(empty($gender)){
            $_SESSION['gender_error_msg']= "Gender required*";
            $isValid= false;
         }   
        if(empty($age)){
            $_SESSION['age_error_msg']= "Age required*";
            $isValid= false; 
         }  

         if(empty($bloodtype)){
            $_SESSION['bloodtype_error_msg']= "Blood type required*";
            $isValid= false; 
         }           

        

        if($isValid===true){
            $_SESSION['name_error_msg']="";
            $_SESSION['gender_error_msg']= "";
            $_SESSION['age_error_msg']= ""; 
            $_SESSION['bloodtype_error_msg']= "";
          
            header("Location: ../View/consultation.php");

        }        
               
        else{
            header("Location: ../View/dashboard.php");
        }

    }

    function sanitize($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>