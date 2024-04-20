<?php

    require '../db/config.php';
    $sel = mysql_query("SELECT * FROM project_tbl");
    $row = mysql_fetch_assoc($sel); 
    ?>
<?php
require '../db/config.php';
$msg="";
if(isset($_POST['submit'])){
    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
     move_uploaded_file($img_tmp,"../img/project/".$img_name);
  
      $sql = mysql_query("INSERT INTO projects_tbl(image) VALUES('$img_name')",$conn);
      if(!$sql){
        echo "Somthing Want Wrong, try again";
      }else{
        $msg="New Project Add Successfully";
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/projectManage.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="wrapper">

  <?php require "headers.php";   ?>
  <div class="main-container">

    <form method="post" enctype='multipart/form-data'>
      <div class='add-img'>
        <label for="img"><h2>Add Image</h2></label>
        <input type="file" name="img" id="img">
        <input type="submit" value="+Add" name="submit">
        <?php if(isset($msg)){echo $msg;}?>
      </div>
      <table class="table table-bordered" border='1px'>
          <tr class="bg-dark text-white">
            <!-- <th>Image Size</th> -->
            <th>Image</th>
            <th colspan=2>Action</th>
          </tr>
      <?php 
      $sel  = mysql_query("SELECT * FROM projects_tbl",$conn);
        while($row = mysql_fetch_assoc($sel)){
          echo "<tr>
                  <td><img src='../img/project/$row[image]'></td>
                  <td><a href='./projectEdit.php?id=$row[img_id]'>Edit</a></td>
                  <td><a href='./projectDelete.php?id=$row[img_id]'>delete</a></td>
        </tr>";
        }
      ?>
        
      </table>
    </form>
</div>


</body>
</html>