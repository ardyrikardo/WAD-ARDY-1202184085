<?php

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
</head>

<body style="background-color:#d4f1ca;">

    <!-- Awal Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #418134;">
            <!-- <a class="navbar-brand" href="#"><img src="owl.png" alt="" width="60" height="60"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="index.html"><b>WAD Beauty</b><span class="sr-only">(current)</span></a>


                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end">

                <table style="width: 15%;">
                    <form class="form-inline my-2 my-lg-0">
                        <tr>
                            <td>
                                <a href="login.php" style="color: white;">Login</a>

                            </td>
                            <td>
                                <a href="register.php" style="color: white;">Register</a>
                            </td>
                        </tr>

                    </form>
                </table>

            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->
    <?php

    session_start();

    require 'functions.php';
    ?>
    <?php
    if (isset($_POST["daftar"])) {

        if (regis($_POST) > 0) {
    ?>
            <div class="alert alert-warning" role="alert">
                Berhasil Registrasi!!
            </div>


        <?php  } else { ?>
            <div class="alert alert-warning" role="alert">
                Gagal Registrasi!!
            </div>

            <?php
                header("Location: registrasi.php");
                exit;
            ?>

    <?php   }
    }  ?>

    <!-- Space -->
    <br><br>
    <!-- Space -->

    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm-5">

                <div class="col py-5 px-lg-12 shadow p-5 mb-5 " style="border-radius: 15px; background-color: #418134;">
                    <h4 align="center">
                        <font color="white">Registrasi</font>
                    </h4>
                    <br>
                    <hr color="white">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-4 col-form-label text-light" style="text-align: center;">Nama</label>
                            <div class="col-sm-12">
                                <div class="col-12">
                                    <input type="text" class="form-control shadow p-3" placeholder="Masukkan Nama Lengkap" id="nama" name="nama" style="border-radius: 10px;" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-4  col-form-label text-light" style="text-align: center;">E-mail</label>
                            <div class="col-sm-12">
                                <div class="col-12  ">
                                    <input type="email" class="form-control shadow p-3" placeholder="Masukkan Alamat E-mail" id="email" name="email" style="border-radius: 10px;" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-6 col-form-label text-light" style="text-align: center;">No.Handphone</label>
                            <div class="col-sm-12">
                                <div class="col-12  ">
                                    <input type="number" class="form-control shadow p-3" placeholder="Masukkan Nomor Handphone" id="no_hp" name="no_hp" style="border-radius: 10px;" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-5 col-form-label text-light" style="text-align: center;">Kata Sandi</label>
                            <div class="col-sm-12">
                                <div class="col-12  ">
                                    <input type="password" class="form-control shadow p-3" placeholder="Buat Kata Sandi" id="password" name="password" style="border-radius: 10px;" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-8 col-form-label text-light" style="text-align: center;">Konfirmasi Kata Sandi</label>
                            <div class="col-sm-12">
                                <div class="col-12  ">
                                    <input type="password" class="form-control shadow p-3" placeholder="Konfirmasi Kata Sandi" id="password" name="repassword" style="border-radius: 10px;" required>
                                </div>
                            </div>
                        </div>

                        <div>
                            <center>
                                <div class="col-sm-6 mt-5">
                                    <button type="submit" class="btn btn-primary btn-block mt-5 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 15px;" name="daftar">
                                        Daftar
                                    </button>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <p style="color: white;">Sudah punya akun? <b><a href="login.php" class="text-light">Login</a></b></p>
                                </div>
                            </center>
                        </div>

                    </form>

                </div>


            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
    <!-- Container -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>