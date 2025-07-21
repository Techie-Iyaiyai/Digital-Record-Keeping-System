<?php

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['password'];
       
        $conn = new mysqli('localhost','root','','user');
    
        if($conn->connect_error){
            die('Connectio Failed :'.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into registration(username,email,pasword)
            values(?,?,?)");
            $stmt->bind_param("sss"$username,$email,$password);
            $stmt->execute();
            echo "registration Siccessfully...";
            $stmt->close();
            $conn->close();
        }

   
?>