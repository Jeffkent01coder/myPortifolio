<?php 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'portfolio';
    

        $name =  $_POST['name'];
        $email = $_POST['email'];
        $message =  $_POST['message'];

        try{

            $conn =  mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
            if(mysqli_query($conn, $sql))
            {
                echo "Message sent";
            }
            else
            {
            echo "Failed to send";
            }
              
        }catch(mysqli_sql_exception $e) {
            echo $e->getMessage();
        }




?>