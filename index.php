<?php

session_start();
require_once "module.php";
$db = new DB;

if (isset($_GET['log'])) {
    session_destroy();
    header("location:./");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadowt">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="?f=beranda&m=beranda">My Website</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php
                        if (isset($_SESSION['email'])) {
                            $level = $_SESSION['level'];
                            switch ($level) {
                                case 'Admin':
                                    echo '
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="?f=penduduk&m=select">Data Penduduk</a></li>
                                                <li><a class="dropdown-item" href="#">Input Data</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="?f=petugas&m=select">Data Petugas</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?f=petugas&m=update">' . $_SESSION['email'] . '</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?log=logout">Logout</a>
                                        </li>
                                    ';
                                    break;

                                case 'Petugas':
                                    echo '
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="?f=penduduk&m=select">Data Penduduk</a></li>
                                                <li><a class="dropdown-item" href="#">Input Data</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?f=petugas&m=update">' . $_SESSION['email'] . '</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="?log=logout">Logout</a>
                                        </li>
                                    ';
                                    break;

                                default:
                                    # code...
                                    break;
                            }
                        } else {
                            echo '
                                <li class="nav-item">
                                    <a class="nav-link" href="admin/login.php">Login</a>
                                </li>
                                ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="mt-4 col-md-12">
                <?php
                if (isset($_GET['f']) && isset($_GET['m'])) {
                    $f = $_GET['f'];
                    $m = $_GET['m'];

                    $file = $f . "/" . $m . ".php";
                    // echo $file;
                    require_once $file;
                } else {
                    require_once "beranda/beranda.php";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>