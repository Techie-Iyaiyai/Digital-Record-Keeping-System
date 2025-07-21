<?php
    include('include/connection.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="registration.css">
    </head>
    
    <body>
        <div class="main"></div>
     <div class="content"></div>
     <form action="" method="post">
        <div class="form" >
            <h2>Register Here</h2>
            <input type="Username" name="username" placeholder="Enter Username Here">
            <input type="Email" name="email" placeholder="Enter Email Here">
            <input type="Password" name="password" placeholder="Enter Password Here">
            <input type="Password" name="confirm_password" placeholder="Confirm Password Here">
           
            <button class="btn" name="submit">Register</button>
            <p style="color:white;">Already Have Account Login<a href="record_software.php"> Here </a></p>
        </div>
    </form>    
    </body>
</html>
<?php

   if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
      
       if($password_1 != $confirm_password){
           echo "Password did not match";
       }elseif($password_1 == $confirm_password){

           $query = "INSERT INTO user(username, email, password, confirm_password) VALUE('$username','$email','$password_1','$confirm_password')";
            $result = mysqli_query($conn, $query);
       }elseif(!$result){
            echo "There is an error in the script";
       }else{
           echo "Data sent successful";
       }
    }
   
?>