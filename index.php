<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>

<body class="mt-5">

    <?php
    session_start();
    if ($_SESSION['status']!="login") {
    echo "<script>alert('Anda Harus Login Dulu !');
    document.location.href='login.php'</script>";
    }
    ?>

    <!--navbar-->
    <section id="utama">
        <nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#utama">
                    <img src="img/logo.png" width="120" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link page-scroll" href="#tentang">Tentang</a>
                        <a class="nav-item nav-link page-scroll" href="#hobi">Hobi</a>
                        <a class="nav-item nav-link page-scroll" href="#pendidikan">Pendidikan</a>
                        <a class="nav-item nav-link btn btn-warning" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!--Jumbotron-->
    <div class="container-sm">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <img src="img/edit.png" width="25%">
                <h1 class="display-4">Andhika Andyaguna Gindrayana</h1>
                <section id="tentang">
            </div>
        </div>
    </div>
    </section>

    <!--About-->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Tentang</h1>
            </div>
        </div>
        </section>
        <div class="row justify-content-center mb-5">
            <div class="col-md-5">
                <p class="text-justify">Saya biasa dipanggil Andhika. Saya lahir pada 17 Oktober 1997. Umur saya 22
                    tahun. Saya adalah seorang fresh graduate lulusan Universitas Gundarama jurusan Sistem Informasi
                    pada september 2019.
                </p>
            </div>
            <div class="col-md-5">
                <p class="text-justify">
                    Alamat : Jl. Hj. Dimun No.41 Rt/Rw 004/024 kelurahan sukamaju kecamatan cilodong Depok, Jawa
                    Barat
                </p>
            </div>
            <section id="hobi" class="hobi">
        </div>
    </div>

    <!--Hobi-->
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Hobi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <img src="img/Renang.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Renang</p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="img/bola.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Sepak bola</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="img/game.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Main Game</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>

    <!--Pendidikan-->
    <section id="pendidikan" class="pendidikan">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Pendidikan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Universitas Gunadarma</h3>
                    <p>S1 Sistem Informasi</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>SMA Yapemri Depok</h3>
                    <p>Jurusan IPA</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>SMP Yapemri Depok</h3>
                    <small>2007</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>