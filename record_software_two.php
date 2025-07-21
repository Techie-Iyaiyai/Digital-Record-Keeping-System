<?php
    include('include/connection.php');
    //session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>record keeping</title>
        <link rel="stylesheet" href="menu.css">
    </head>
        <body>
            <div class="main2">
                <div class="navbar">
                    <div class="menus">
                        <ul>
                            <li><a href="http://localhost/website/record_software_two.php#">HOME</a></li>
                            <li><a href="view.php">VIEW</a></li>
                            <li><a href="add.php">ADD</a></li>
                            <li><a href="registration.php">REGISTER</a></li>
                            <li><a href="include/logout.php?logout" class="nav-link">Logout</a></li>
                            
                        </ul>
                    </div>
                    <div class="search">
                        <input class="srch" type="search" name="" placeholder="Search Here">
                        <a href="#" ><button class="btn">Search</button></a>
                    </div>
                    <div class="p4 lead" style="color:red,"><?php include('include/welcome.php'); ?></div>
                </div>
                <div class="content"  style="color: rgb(74, 93, 87);">
                    <h1>DIGITAL RECORD KEEPING SOFTWARE<BR><span></span></h1>
                        <h2>Welcome to the Digital Project Record-Keeping System
This software is designed specifically for students of AUK to securely store and manage final year project records. </h2>
                </div>
            </div>
        </body>
</html>
