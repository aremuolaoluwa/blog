<?php require "inc/header.php"; ?>

<div class="container">

<?php

require "./pages/header-home.php";
include "./inc/process.php";

?>

<div class="d-flex align-items-center justify-content-center py-3">
    <form action="" method="post">
        <h4 class="text-center">Register</h4>
       <?php
       if(isset($error)){
        ?>
        <div class="alert alert-danger">
            <strong><?php echo $error; ?></strong>
        </div>
        <?php
       }elseif(isset($success)){
        ?>
        <div class="alert alert-success">
            <strong><?php echo $success; ?></strong>
        </div>
        <?php
       }
       ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" id="">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email" id="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your Password" id="">
            <hr>
            <p>
                If already registeres, <a href="login.php">Login</a>
            </p>
            <button type="submit" name="register" class="btn btn-primary my-3">Register</button>
        </div>
    </form>
</div>
<?php require "./pages/footer-home.php"; ?>
</div>
<?php require "inc/footer.php"; ?>