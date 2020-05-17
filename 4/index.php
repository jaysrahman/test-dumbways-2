<?php
$conn = mysqli_connect("localhost", "root", "", "test-dumbways-2") or die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Filmku</title>
</head>

<body>
    <div class="container">
        <!-- <div class="row">
            <div class="col-3">
                <h1 class="text-white">Filmku <span class="text-warning">Seru</span></h1>
            </div>
            <div class="col mt-3 justify-content-right"> -->
        <!-- <button class="btn btn-warning">Add Film</button>
                <button class="btn btn-warning">Add Director</button>
                <button class="btn btn-warning">Add Genre</button>
                <button class="btn btn-warning">Add Writer</button> -->
        <!-- <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul> -->
        <!-- </div> -->
        <!-- </div> -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <h1 class="text-white">Filmku <span class="text-warning">Seru</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="btn btn-warning nav-item nav-link text-dark ml-2" href="#">Add Film</a>
                    <a class="btn btn-warning nav-item nav-link text-dark ml-2" href="#">Add Director</a>
                    <a class="btn btn-warning nav-item nav-link text-dark ml-2" href="#">Add Genre</a>
                    <a class="btn btn-warning nav-item nav-link text-dark ml-2" href="#">Add Writer</a>
                </div>
            </div>
        </nav>
        <div class="row mt-2">
            <?php
            $no = 1;
            $data = mysqli_query($conn, "select * from film");
            while ($d = mysqli_fetch_array($data)) : ?>
                <div class="col">
                    <!-- <div class="card" style="width: 15.9rem;">
                        <img class="poster-size" src="img/<?= $d['photo'] ?>" class="card-img-top">
                        <div class="card-body">
                            <span>8.5</span>
                            <h5 class="card-title"><?= $d['title'] ?></h5>
                            <a href="#" class="btn btn-dark btn-block">Detail</a>
                        </div>
                    </div> -->
                    <div class="card-group">
                        <div class="card" style="width: 15.9rem;">
                            <img class="card-img-top poster-size" src="img/<?= $d['photo'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <span><?= $d['rating'] ?></span>
                                <h5 class="card-title"><?= $d['title'] ?></h5>
                                <a href="#" class="btn btn-dark btn-block">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>