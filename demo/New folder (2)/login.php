<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'baasdb';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT userName,password FROM registereduser WHERE userName='$username' and password='$password'";
$result=$conn->query($sql);

echo $result->num_rows; 

if($result->num_rows==1)
{
header("location:login_success.html");
}
else
{
header("location:login.html");

}


$conn->close();
?>



