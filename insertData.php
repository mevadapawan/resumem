<?php
require 'db/config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $sql = mysql_query("INSERT INTO contact_tbl(name,email,msg) values('$name','$email','$msg')",$conn);
       
        if(!$sql){
               echo "not inserted";
        }
?>