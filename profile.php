<?php
include('header.php');
if(isset($_SESSION['email'])){
    echo "<h1 class='text-center my-5'>".$_SESSION['email']."</h1>";
  }

include('footer.php');
?>