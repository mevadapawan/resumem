<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Admin</title>
    <style>
      :root{
    --color-dark:#1D2231;
}
        *{
            margin:0;
            padding:0;
            list-style:none;
            text-decoration:none;
            box-sizing:border-box;
            font-family: "Poppins", sans-serif;     
         }
      .top-navbar{
            width:100%;
            height:65px;
            display: flex;
            position: fixed;
            top:0;
        }
         .top-navbar .hamburger{
            width:70px;
            height:100%;
            padding:15px 17px;
            cursor:pointer;
            font-size: 30px;
            color:#f3f3f3;
        }
     .top-navbar .hamburger:hover i{
            color:#f3f3f3;
        }
          .top-navbar .top-menu{
            width:100%;
            background-color: #fff;
            height:100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding:0 20px;
            box-shadow: 0 1px 1px rgba(0,0,0,0.2);
            background-color: var(--color-dark);
        }
      .top-navbar .top-menu .logo{
            font-size:20px;
            font-weight: 700;
            letter-spacing: 1px;
            color:aqua;
        }
        .top-menu ul .admin-name{
            border:2px solid white;
            border-radius: 10px;
            color:white;
            padding:6px 15px;
            margin-right:40px;
            display:block;
        }
        .top-menu ul{
            padding-top:14px;
            display:flex;
            align-items:center;
        }
        .top-menu ul li{
            color:white;
            padding:6px 15px;
            margin-right:40px;
            display:none;
        }
       .sidebar{
            position: fixed;
            top:60px;
            left:0;
            width:230px;
            height:calc(100% - 60px);
            transition: all 0.3s ease;
            background: #2e4ead;
            background-color: var(--color-dark);
        }
       .sidebar ul li a {
            letter-spacing: 1px;
            display: block;
            padding:20px;
            color:#fff;
            position:relative;
            margin-bottom: 1px;
            color:#f2f2f2d8;
            white-space:nowrap;
            font-family: sans-serif;
            font-weight:550;
        }
       .sidebar ul li a span .icon{
            margin-right: 15px;
            background-color: black;
            display: inline-block;
        }
       .sidebar ul li a span .title{
            display: inline-block;
        }
       .sidebar ul li a:hover{
            background-color: #4360b5;
            color:#fff;
            background-color: #f2f2f2;
            color:blue;
            border-radius: 30px 0 0 30px;
            margin-left: 5px;
        }
       .main-container{
            width:calc(100% - 230px);
            margin-top:70px;
            margin-left: 230px;
            padding:20px;
        }
       .main-container .item{
            background-color: #fff;
            margin-bottom: 10px;
            padding:15px;
            font-size: 14px;
            line-height: 22px;
        }
        .collapse .main-container {
            width:calc(100%- 70px); 
             margin-left:70px; 
        }
        @media (max-width:700px){
            .top-menu ul li{
                display:block;
            }
            .sidebar{
                display:none;
            }
            .main-container{
                margin-left:0px;
            }
        }

    </style>
</head>
<body>
  <div class="wrapper" id="wrapper">
    <div class="top-navbar">
            <div class="top-menu">
                <div class="logo">Admin Dashbord</div>
                    <ul>
                        <a href="./index.php"><li>Dashbord</li></a>
                        <a href="./manage_project.php"><li>Project</li></a>
                        <li class="admin-name">
                        <?php
                                if(isset($_SESSION['uname'])){
                                  echo "Hi <b>".$_SESSION['uname']."</b>";
                                }else{
                                    echo "<script>location.href='./login.php'</script>";
                                }
                            ?>
                        </li>  
                    </ul>
                </div>
            <!-- </div> -->
          </div>
            <div class="sidebar">
            <ul>
                <li><a href="./index.php">
                    <!-- Add Icon -->
                    <!-- <span class="icon"><i class="fa-solid fa-house"></i></span> -->
                    <span class="title">Dashbord</span>
                </a></li>
                <li><a href="./manage_project.php">
                    <!-- <span class="icon"><i class="fa-solid fa-house"></i></span> -->
                    <span class="title">Project</span>
                </a></li>
                
                <li><a href="./changePassword.php">
                    <!-- Add Icon -->
                    <!-- <span class="icon"><i class="fa-solid fa-house"></i></span> -->
                    <span class="title">Change Password</span>
                </a></li>
             
            </ul>
        </div>
    </div>
</body>
</html>