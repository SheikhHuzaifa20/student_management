<?php session_start();?>
<?php include('db_con.php'); ?>

<?php 

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $query = "select name , email from users where email = '$email' and password = '$password' ";
    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query failed".mysqli_error($result));
    }
        else{
            $row = mysqli_num_rows($result);
        echo $row;
        if($row == 1){
            $_SESSION['email'] = $email;
            header('location:./index.php');
        }
        else{
            header('location:./login.php');
        }
        }
    }
    


?>