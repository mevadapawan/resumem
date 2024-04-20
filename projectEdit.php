<?php
require '../db/config.php';
$id = $_GET['id'];

if(isset($_POST['submit'])){
    if(!empty($_FILES)){
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($img_tmp,"../img/project/$img_name");
        $up = mysql_query("UPDATE projects_tbl SET image='$img_name' WHERE img_id = $id ");
        if($up){
            echo "<script>location.href='./manage_project.php'</script>";
        }else{
            echo "not ok";
        }
    }else{
        // echo "default img";
    }
}


$select = mysql_query("SELECT * FROM projects_tbl WHERE img_id='$id'");
$row = mysql_fetch_assoc($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        form img{
            width:400px;
            height:auto;
        }
        input[type='submit']{
            background-color: yellow;
            border-radius: 10px;
            font-weight: bold;
            font-size: 1.3rem;
            border:None;
            width: 100%;
            height: 3rem;
            color:black;
            outline:none;
        }
    </style>
</head>
<body>
<div class="wrapper">

<?php require "headers.php";  ?>

<div class="main-container">
    <form action="" method='POST' enctype='multipart/form-data'>
    <?php 
        echo "<img src='../img/project/$row[image]' id='uploadimg'/><br>"; 
    ?> 
        <input type="file" name="img" id="fileinput"  style="display:none;"><br>
        <input type="submit" value="Update Project" name='submit'>
</form>
    </div>
    </div>
</body>
</html>
<script>
document.getElementById('uploadimg').addEventListener('click',function(){
    document.getElementById('fileinput').click();
})
</script>