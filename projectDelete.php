<?php
require '../db/config.php';
$id = $_GET['id'];
$del = mysql_query("DELETE  FROM projects_tbl WHERE img_id = $id",$conn);
if($del){
    echo "<script>location.href='./manage_project.php'</script>";
}else{

}
?>