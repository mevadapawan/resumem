<?php require "../db/config.php"; ?>
<?php 
    session_start();
if(isset($_POST['login-btn'])){
    $uname = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $uname = htmlspecialchars($uname);
      $pass= md5($pass);
    if(empty($uname) && empty($pass)){
        $error_msg = "Please enter both username and password.";
    }
    $admin_login = mysql_query("SELECT * FROM admin_tbl where username='$uname' && password='$pass' ",$conn);
    if(mysql_num_rows($admin_login)==1){
            while($row = mysql_fetch_assoc($admin_login)){
                // $_SESSION['a_id']=$row['a_id'];
                $_SESSION['uname']=$uname;
                  echo '<script>location.href="./index.php"</script>';
        }
    }
        else{
            $error_msg= "Invalid username or password";
            echo " <div class='login-err'>
            <div class='err'>
            <h5>$error_msg</h5>
            </div></div>
            ";
    }
}
?>
<script >
    let login_err = document.querySelector(".login-err");
     setTimeout(()=>{
            login_err.remove();
        },6000)
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <!-- font awesome link for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Login</title>
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
                   <input type="submit" id="login-btn" value="LOGIN" type="button" name='login-btn'>

                 <h5 class="err"><?php if(isset($error)){echo $error;}?></h5>
          </div> 
            </form>
        </div>

       
</div>
</body>
</html>

