<?php


// Create connection
$con = new mysqli('localhost', 'root');

// Check connection
if ($con) {
    echo "Connected successfully";
  }
else{
    echo "Connection failed" ;
}


mysqli_select_db($con, 'photos');
$name= $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];

$query="INSERT INTO users(name,email,number) VALUES('$name','$email','$number')";

mysqli_query($con,$query);
header('location:index.php#contact');


?>