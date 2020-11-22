<?php

session_start();
require 'functions.php';

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
} else {
    $navbar = 'light';
}


if (isset($_SESSION['email'])) {
    list($carts, $totalHarga) = show();
} else {
    header("Location: login.php");
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
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d54cbc2746.js" crossorigin="anonymous"></script>

    <title>Cart</title>
</head>

<body style="background-color: #d4f1ca;">
    <!-- Awal Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #418134;">
            <!-- <a class="navbar-brand" href="#"><img src="owl.png" alt="" width="60" height="60"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="index.php"><b>WAD Beauty</b><span class="sr-only">(current)</span></a>


                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end">

                <table style="width: 60%;">
                    <tr>
                        <td>
                            <form class="form-inline my-2 my-lg-0 justify-content-end">
                                <a href="cart.php" style="color: white;"><i class="fas fa-shopping-cart"></i></a>
                                <a class="text-light">&nbsp; Selamat datang,&nbsp;</a>
                                <a class="text-light"><b> <?= $_SESSION['nama']; ?></b></a>
                            </form>
                        </td>
                        <td>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                </table>

            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->

    <?php if (isset($_SESSION['message'])) : ?>
        <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['message']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>


    <!-- Space -->
    <br>
    <!-- Space -->

    <!-- Table Start -->
    <div class="container">
        <h4 align="center"></h4>
        <br>
        <table class="table">
            <thead style="background-color: #418134;">
                <tr>
                    <th scope="col" style="text-align: center;">
                        <font color="white">No</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Nama Barang</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Harga</font>
                    </th>
                    <th scope="col" style="text-align: center;">
                        <font color="white">Aksi</font>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <?php if (!is_null($carts)) : ?>
                    <?php
                    $i = 1;
                    foreach ($carts as $cart) {
                    ?>
                        <tr>
                            <th scope="row" style="text-align: center; color: black;"><?= $i ?></th>
                            <td style="text-align: center;"><?= $cart['nama_barang']; ?></td>
                            <td style="text-align: center;">Rp<?= $cart['harga']; ?></td>
                            <td style="text-align: center;">
                                <a href="functions.php?id=<?= $cart["id"] ?>" class="btn btn-danger btn-sm" role="button" name="hapus">Hapus</a>
                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                    <tr>
                        <th colspan="2" scope="col" class="">Total</th>
                        <th colspan="2" scope="col">Rp<?= $totalHarga; ?></th>
                    </tr>

                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <br><br><br><br><br><br>
    <!-- Akhir Table -->






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