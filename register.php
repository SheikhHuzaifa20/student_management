<?php 
include("header.php");

?>

<div class="container my-5">
    <h1 class="text-center">Registration Form</h1>
        <form action="./register_data.php" method="POST">
        <div class="my-2">
            <input type="Name" name="Name" placeholder="Name" class="form-control">
        </div>
        <div class="my-2">
            <input type="Phone" name="Phone" placeholder="Phone" class="form-control">
        </div>
        <div class="my-2">
            <input type="Email" name="Email" placeholder="Email" class="form-control">
        </div>
        <div class="my-2">
            <input type="Password" name="Password" placeholder="Password" class="form-control">
        </div>
        <div class="my-2 d-flex justify-content-center">
            <button class="btn btn-primary" name="register">Register</button>
        </div>
        </form>
</div>

<?php 
 include("footer.php");
?>
