<?php 
include("db_con.php");
?>

<?php 
if(isset($_POST['register'])){

    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $query = "INSERT INTO `users` (`name`, `phone`, `email`, `password`) VALUES ('$name', '$phone', '$email', '$password');";

    $result = mysqli_query($con , $query);
    
    if(!$result){
        echo "Query failed";
    }
    else{
        echo "Query Successfull";
        header('location:./login.php');
    }

}
?>
