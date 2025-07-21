<?php
    include('include/connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>viewing blog</title>
        <link rel="stylesheet" href="view.css">
    </head>
    
    <body>
        <div class="main">
        <h2 style="background:blue; width:100%; height: 50px; text-align:center; color:white; font-size:40px;">Al-Qalam University Katsina</h2>
        <div class="container">
                <center>
                <table style="width:100%; color:white;" class="table table-striped" border="1">
                    <thread>
                        <td> 
                                <th>ID</th>
                                <th>Project Names</th>
                                <th>Year Conducted</th>
                                <th>Uploaded Files</th>
                                <th>Open</th>
                                <th>Delete</th>

                        </td>
                    </thread>
                        <?php
                            $call = mysqli_query($conn,"SELECT id,file_name,file_year, uploaded_file FROM project");
                            while ($each = mysqli_fetch_array($call) ) {
                        ?>
                            <tr><td></td>
                                    <td><?php echo $each['id']; ?></td>
                                    <td><?php echo $each['file_name']; ?></td>
                                    <td><?php echo $each['file_year']; ?></td>
                                    <td><?php echo $each['uploaded_file']; ?></td>
                                    <td><?php echo "<a class='btn btn-xs btn-danger' href='include/uploaded_file/open.php?id=".$each['id']."'>Download</a>";?></td>
                                    <td><?php echo "<a class='btn btn-xs btn-danger' href='include/delete_project.php?id=".$each['id']."'>Delete</a>";?></td>
                                    
                            </tr>
                            <?php
                        }


                        ?>
                </table>
                <h4 class="border: 1px solid white; "><a href="http://localhost/website/record_software_two.php#" style="color:white;">Click Here To Go Back</a></h4>
                </center>
        </div>
        </div>
     
     
        
    </body>
</html>
