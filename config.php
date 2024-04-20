<?php
$conn = mysql_connect("localhost","root","","portfolio");
mysql_select_db("portfolio",$conn);
if(!$conn){
    echo "<script>alert('Database Connection Error');</script>";
}
?>
