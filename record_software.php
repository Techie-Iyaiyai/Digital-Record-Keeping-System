t<?php
    include('include/connection.php');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Foam</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="main"></div>
     <div class="content"></div>
    <form action="include/process.php" method="post">
        <div class="form">
            <h2>Login Here</h2>
            <input type="Username" name="username" placeholder="Enter Username Here">
            <input type="Password" name="password" placeholder="Enter Password Here">
            <button class="btn" name="submit">Login</a></button>
            <center>
            <p a href="#" style="text-decoration: none; color: aliceblue; margin-left: px;margin-top: 20px; cursor: pointer;">Forgot Password</p>
            <p style="color:white;">Don't Have Account Register <a href="registration.php"> Here </a></p>
        </center>
        </div>
    </form>
    </body>
   
</html>
