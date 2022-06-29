<?php require "config.php"; ?>

<?php
  session_start();
  if($_SESSION['is_login']){

     $username = $_SESSION['username'];
     
     }
     else{
        header("Location: index.php");
     }
 
   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/cfe10d992d.js" crossorigin="anonymous"></script>
    <style>
    button{
        
        font-size: 20px;
        float: right;
        padding: 14px;
        margin-top: -270px;
        margin-right: 10px;
        cursor: pointer;
        background-color:#ce18db;
        color: white;
        border:none;
        border-radius: 5px;
        padding: 16px 30px 16px 30px;
        
    }
    h1,h2{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 100px;

    }
    .profile{
        float: right;
        margin-top: -40px;
        margin-right: 50px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <h1>Hello Programmer welcome in your Accout.</h1>
    <p class="profile"><img src="profile.png" alt="" height="60"></p>
    <h2>Username: <?php echo $username ?></h2>
        <a href="logout.php"><button>Logout  <i class="fas fa-sign-out-alt"></i></button></a>
    
</body>
</html>