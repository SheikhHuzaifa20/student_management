<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "student_management";

$con = mysqli_connect($server , $user , $password , $database);
if(!$con){
    die("Not Connected to database".mysqli_connect_error());
}
else{
    echo "Successfully connected";
}

?>