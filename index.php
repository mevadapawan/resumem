<?php
require '../db/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/Dashbord.css">
    
</head>
<body>
    <!-- <div class="wrapper"> -->
        <?php require "Headers.php"; 
          ?>
        <div class="main-container">
            <h1>User Contact</h1>
            <div class="container">
        <table class="table  table-bordered">
        <tr class='bg-dark text-white'>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php
        require '../db/config.php';

        // session_start();
        if(isset($_SESSION['uname'])){
            $sel = mysql_query("SELECT * FROM contact_tbl",$conn);
                if(mysql_num_rows($sel)>0){
                    while($row = mysql_fetch_assoc($sel)){
                        echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td><td>$row[msg]</td></tr>";
                    }
                }
            
          }else{
             echo "<script>location.href='login.php'</script>";
          }
        
            ?>
        </table>
    </div>   
    </div>
</div>
</body>
</html>
