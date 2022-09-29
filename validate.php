<?php

$host="localhost";
$user="root";
$password="";
$db="admin";

$con = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($con,$db);


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = "select * from loginform where USER='".$uname."'AND PASSWORD='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("location: index1.php");
        exit();
    }
    else{
		echo "<script language='javascript'>";
		echo "alert('WRONG INFORMATION');";
		echo "</script>";
        exit();
    }
        
}

?>
