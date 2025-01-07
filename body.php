<div class="container">
   <?php require "./pages/header-home.php"; ?>
    <div class="conatiner-fluid my-3">
        <div class="row">
            <div class="col-8">
                <div class="row">
                <?php
                    for ($i=1; $i <=6 ; $i++) { 
                        ?>
                    <div class="col-4 mt-2">
                        <div class="card">
                            <img src="https://imgs.search.brave.com/oRJzXnBHyk5bCEdBxmyALz1gaPJcrUnyidv7-dRaZtM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9idXJz/dC5zaG9waWZ5Y2Ru/LmNvbS9waG90b3Mv/ZGV2ZWxvcGVyLWNv/ZGluZy1pbi1waHAu/anBnP3dpZHRoPTEw/MDAmZm9ybWF0PXBq/cGcmZXhpZj0wJmlw/dGM9MA" style="height:200px; width: 100%;" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                ?>
                </div>
            </div>
            <div class="col-4">
                <!-- sidebar -->
                <div class="border p-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <h4>Search</h4>
                            <input type="text" name="search" class="form-control" placeholder="Enter Search Term" id="">
                        </div>
                        <button type="submit" class="btn btn-dark mt-2">Search</button>
                    </form>
                </div>

                <div class="border p-3 mt-2">
                    <h4>Categories</h4>
                    <ul>
                        <?php
                            for ($i=1; $i <=3 ; $i++) { 
                                ?>
                        <li>
                            <a href="#">Links <?php echo $i; ?></a>
                        </li>  
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require "./pages/footer-home.php"; ?>
</div>