<?php 
include("header.php");

?>

<div class="container my-5">
    <h1 class="text-center">Login Form</h1>
        <form action="./login_data.php" method="POST">
        <div class="my-2">
            <input type="Email" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="my-2">
            <input type="Password" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="my-2 d-flex justify-content-center">
            <button class="btn btn-primary" name="login">Login</button>
        </div>
        </form>
</div>

<?php 
 include("footer.php");
?>