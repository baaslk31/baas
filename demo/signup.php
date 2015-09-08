<?php  
    $host = 'localhost';  
    $user = 'root';  
    $pass = '';
	$valid = 'true';
    $dbname='baasdb';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_error());  
    }  
    echo '';  
	
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
 
$sql = "INSERT INTO registereduser(email,password,userName) VALUES('$email','$password','$username')";


if(mysqli_query($conn, $sql)){  
 echo "";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);

if($valid){
   header('Location: index.html');
   exit();
}
?>
