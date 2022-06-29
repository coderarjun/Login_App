<?php 
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


include 'db.php';

$sql = "INSERT INTO user(email, username, password)VALUES('$email','$username','$password')";
$result = mysqli_query($conn, $sql);

if($result){
    header('Location:index.php');
}
?>