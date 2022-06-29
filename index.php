<?php require "config.php"; ?>
<?php  

session_start();
if(!isset($_SESSION['is_login'])){
if(isset($_POST['btn'])){
    $username = mysqli_real_escape_string($conn,trim($_POST['username']));    
    $password = mysqli_real_escape_string($conn,trim($_POST['password']));	

      $query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
      $fire = mysqli_query($conn,$query);

   if($fire) {
       if(mysqli_num_rows($fire) == 1){
		   
           $_SESSION['is_login'] = true;
           $_SESSION['username'] = $username;
           header("Location: profile.php");
       }else{
        //    echo "<p>*Invalid username or password.</p>";
		echo '<script>alert("Invalid username or password ")</script>';
       }

    }
}
}else{
	header("Location: profile.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	p{
		color: red;
		position: absolute;
		left: 440px;
		top: 408px;
	}
        	body{
			margin: 0px;
			padding: 0px;
			background: rgb(155,6,171);
            background: radial-gradient(circle, rgba(155,6,171,1) 15%, rgba(221,102,102,1) 88%);
            height: 100px;
            width: 100%;
		}
		div{
			height: auto;
			width: 510px;
			border: 2px solid black;
            border-radius: 10px;
			background-color:white;
			margin:auto;
			margin-top:10%;
			background-color:rgb(187, 255, 0);
		}
		h1{
			font-size: 30px;
			font-family: arial;
			background-color:rgb(11, 11, 128);
			margin: 0px;
			padding: 17px;
			text-align: center;
			color: white;
	
		}
		input[type=text],[type=password], select {
 			 width: 500px;
 			 padding: 15px 10px;
  			 margin: 3px 0;
  			 display: inline-block;
  			 border: 1px solid #ccc;
  			 border-radius: 4px;
  			 box-sizing: border-box;
  			 font-size:20px;
		}

		button {
			  width: 300px;
			  background-color:rgb(11, 11, 128);
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			  font-size: 20px;
			  margin-top: 40px;			  

			}

		form{
			font-size: 20px;
			font-weight: bolder;
			font-family: arial;
		}
		::placeholder{
			font-size: 17px;

        }
		.signup{
			margin-bottom: 100px;
			text-decoration: none;
			float: right;
			color: #ccc;
			font-weight: lighter;
			font-size: 17px;
			font-family:Arial, Helvetica, sans-serif;
			margin-top: 10px;
			margin-right: 10px;

		}
    </style>
</head>
<body>
    <div>

	<?php if (isset($_GET['msg'])) echo $_GET['msg'];?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h1>Login</h1><br>
        
      &nbsp;&nbsp;&nbsp;Username:<br>&nbsp;<input type="text" name="username"  placeholder="Username" required><br><br>
      &nbsp;&nbsp;&nbsp;Password:<br>&nbsp;<input type="password" name="password"  placeholder="Password" required><br>
      <center><button name="btn">Login</button></center>
	
                
        
    </form>
	<a class="signup" href="signup.php">Create an account</a>
    </div>
    
    
</body>
</html>