<?php 
    
    session_start();
     //header("Location: ../View/login.php");

    if ($_SERVER['REQUEST_METHOD']=== "POST"){

    	$firstname= sanitize($_POST['firstname']);
        $lastname= sanitize($_POST['lastname']);
        $email= sanitize($_POST['email']);
    	$password= sanitize($_POST['password']);
        $confirmpassword= sanitize($_POST['confirmpassword']);

    	$isValid= true;

        if(empty($firstname)){
            $_SESSION['firstname_error_msg']= "First name can't be empty";
            $isValid= false;
        }    

        if(empty($lastname)){
            $_SESSION['lastname_error_msg']= "Last name can't be empty";
            $isValid= false;
         }   
        if(empty($email)){
            $_SESSION['email_error_msg']= "Email can't be empty";
            $isValid= false; 
         }          

        
    	if(empty($password)){
    		$_SESSION['password_error_msg']="Password can't be empty";
    		$isValid= false;
    	}

        if(empty($confirmpassword)){
            $_SESSION['confirmpassword_error_msg']= "Password need to be confiremd";
            $isValid= false;

        }

    	if($isValid===true){
            $_SESSION['firstname_error_msg']="";
            $_SESSION['lastname_error_msg']="";
    		$_SESSION['email_error_msg']= "";
    		$_SESSION['password_error_msg']= ""; 
            $_SESSION['confirmpassword_error_msg']= "";

            $conn=mysqli_connect('localhost','root','','project');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
               $sql="INSERT INTO patient(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
            
            
            $res= mysqli_query($conn, $sql);

            if ($res) {
              header("Location: ../View/login.php");
            }
            else {
              echo "Error occurred " . $sql . " " . mysqli_error($conn);
              }
         
          mysqli_close($conn);
           
           
          }   

        else{
            echo 'Something is wrong';
    		header("Location: ../View/registration.php");
    	  }

     }

    function sanitize($data){
    	$data = trim($data);
    	$data = stripcslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }


?>