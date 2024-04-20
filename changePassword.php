<?php require "../db/config.php"; ?>
<?php 
    session_start();
if(isset($_POST['submit'])){
    $uname = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $uname = htmlspecialchars($uname);
    //   $pass= md5($pass);
    if(empty($uname)){
        echo "<script>alert('Enter New Username')</script>";
    }else if(empty($pass)){
        echo "<script>alert('Enter New Password')</script>";   
    }
    else{   
        $pass= md5($pass);
        $update = mysql_query("update admin_tbl set password='$pass',username='$uname' where id=1 ",$conn);
        if($update){
            echo "<script>alert('Password Successfylly Changed');</script>";
            echo '<script>location.href="index.php"</script>';
        }
    }  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <!-- font awesome link for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Change Password</title>
</head>
<body>
    <div class="container">
        <div class="login_form"> 
            <form action="" method="POST"  autocomplete="off">
                <div class="icon" title="Admin"><i class="fa-regular fa-user"></i></div>
                    <label for="uname" >Username</label><br>
                    <input type="text" id="uname" name="username" maxlength='20'><br>

                    <label for="Password" >Password</label><br>
                    <input type="password" id="password" name="password"><br>
                   <input type="submit" id="submit" value="CHANGE" type="button" name='submit'>
                        <div class="link">
                            <a href="./index.php">Back</a>
                        </div>
                 <h5 class="err"><?php if(isset($error)){echo $error;}?></h5>
          </div> 
            </form>
        </div>

       
</div>
</body>
</html>

