<?php 
$conn = mysqli_connect('localhost', 'root', 'jamryan09', 'login');

if ($conn->connect_error) {
   die ('CONNECTION FAILED :' .$conn->connect_error);
}



?>