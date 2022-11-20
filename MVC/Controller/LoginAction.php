<?php 
    
    session_start();

    if ($_SERVER['REQUEST_METHOD']=== "POST"){

    	$email= sanitize($_POST['email']);
    	$password= sanitize($_POST['password']);

    	$isValid= true;

        if(empty($email)){
    		$_SESSION['email_error_msg']= "Email can't be empty";
    		$isValid= false;

    	}
    	if(empty($password)){
    		$_SESSION['password_error_msg']="Password can't be empty";
    		$isValid= false;
    	}

    	if($isValid===true){
    		$_SESSION['email_error_msg']= "";
    		$_SESSION['password_error_msg']= ""; 

             $conn=mysqli_connect('localhost','root','','project');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
               $sql="SELECT * FROM patient WHERE email='$email'AND password='$password'";
            
            
            $res= mysqli_query($conn, $sql);

            if ($res)
            {
                if($res && mysqli_num_rows($res)>0)
                {
                    //$user_data = mysqli_fetch_assoc($res);
                    //if($user_data['email'===$email && $user_data['password'=== $password]])
                    if($_POST['email']===$email && $_POST['password'] === $password)
                    {
                       header("Location: ../View/dashboard.php"); 
                       die;
                    }
                    else{
                        //header("Location: ../View/login.php");
                        echo "wrong";
                    }

                }

              
            }

            else {
              echo "Error occurred " . $sql . " " . mysqli_error($conn);
              }
         
          mysqli_close($conn);

    		

    	}
    	else{
    		header("Location: ../View/login.php");
    	}

    }

    function sanitize($data){
    	$data = trim($data);
    	$data = stripcslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }


?>