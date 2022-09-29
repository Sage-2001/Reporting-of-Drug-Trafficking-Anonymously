<?php 


$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful

$id = $_GET['id'];
$selectquery = "delete  from contactus where id = $id";

$query = mysqli_query($conn, $selectquery);





header('location:index1.php');





?>