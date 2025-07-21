<?php
    include('include/connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adding new project</title>
        <link rel="stylesheet" href="adding.css">
    </head>
    
    <body>
        <h1>PROJECT RECORD KEEPING</h1>
        <center>
            <div class="mainn">
                
                <h3>Add project here</h3>
                <form action="include/save.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="file" name="uploaded_file">
                   
                    <input type="text" placeholder="Project name" name="file_name">

                    <input type="date" name="file_year">
                  
                 
                    <button name="save">save</button>
                   
                </form>
                <h4><a href="http://localhost/website/record_software_two.php#" style="color:white;">Click Here To Go Back</a></h4>
            </div>
        </center>
        <!--div class="main"></div>
     <div class="content"></div>
     
        <div class="form">
            <h2>ADD NEW PROJECT</h2>
            <input type="text" name="text" placeholder="Enter project name here">
            <input type="number" name="number" placeholder="Enter project year here">
            <input type="text" name="text" placeholder="Enter case study">
            <button class="btn"><a href="#">Upload</a></button>
            <button class="btn"><a href="#">Add</a></button>
        </div-->
    </body>
</html>
