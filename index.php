<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS Pemrograman Web 1</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <h3 class="text-center">
        UNIVERSITAS PELITA BANGSA<br>
        <small class="text-muted">Pemrograman Web 1</small>
    </h3>
    <hr class="d-block d-sm-none">



    <!-- Navbar atas -->
    <nav class="navbar navbar-expand-lg d-none d-sm-block" style="background-color: #7ed6df;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Zennxz</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=home"><i class="bi bi-house-door-fill"></i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="?page=galeri"><i class="bi bi-file-person"></i> Galeri</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case "home":
                include "halaman/home.php";
                break;
            case "galeri":
                include "halaman/galeri.php";
                break;
            default:
                echo "<h1 class=\"text-center\">PAGE NOT FOUND</h1>";
                break;
        }
    } else {
        include("./halaman/home.php");
    }

    ?>

    <!-- Nabar bawah -->
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-bottom d-block d-lg-none">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="?page=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=galeri">Galeri</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>