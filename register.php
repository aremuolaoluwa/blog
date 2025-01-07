<?php require "inc/header.php"; ?>

<div class="container">

<?php require "./pages/header-home.php"; ?>
<div class="d-flex align-items-center justify-content-center py-3">
    <form action="./inc/process.php" method="post">
        <h4 class="text-center">Register</h4>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" id="">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email" id="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your Password" id="">
            <button type="submit" name="register" class="btn btn-primary my-3">Register</button>
        </div>
    </form>
</div>
<?php require "./pages/footer-home.php"; ?>
</div>
<?php require "inc/footer.php"; ?>