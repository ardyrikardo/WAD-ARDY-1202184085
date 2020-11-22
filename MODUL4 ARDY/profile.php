<?php
session_start();

require 'functions.php';


if (isset($_SESSION['email'])) {
    $show = show_profile();

    if (isset($_POST['submit'])) {
        setcookie('navbar', $_POST['navbar']);
        $navbar = $_COOKIE['navbar'];

        update($_POST);
    }
} else {
    header("Location: login.php");
}

if (!empty($_COOKIE['navbar'])) {
    $navbar = $_COOKIE['navbar'];
    $light = null;
    $secondary = null;
    // set navbar
    if ($_COOKIE['navbar'] == 'light') {
        $light = 'light';
        
    } else {
        $secondary = 'secondary';
    }
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
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d54cbc2746.js" crossorigin="anonymous"></script>

    <title>Profile</title>
</head>

<body style="background-color: #d4f1ca;">
    <!-- Awal Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark navbar navbar-<?= $navbar; ?> bg-<?= $navbar; ?>" style="background-color: #418134;">
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
    <br><br>
    <!-- Space -->

    <!-- Start Form Profile -->
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm-11">

                <div class="col py-5 px-lg-12   shadow p-5 mb-5  " style="border-radius: 15px; background-color: #418134;;">
                    <h4 align="center">
                        <font color="white">
                            <h3><b>Profile</b></h3>
                        </font>
                    </h4>
                    <hr color="white">

                    <form action="" method="post">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">
                                <font color="white">Email</font>
                            </label>
                            <div class="col-sm-10">

                                <input type="text" readonly class="form-control" id="nama" style="border-radius: 5px;" name="email" value="<?= $show['email']; ?>" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">
                                <font color="white">Nama</font>
                            </label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control" id="nama" style="border-radius: 5px;" name="nama" value="<?= $show['nama']; ?>" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">
                                <font color="white">No Handphone</font>
                            </label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control" id="nama" style="border-radius: 5px;" name="no_hp" value="<?= $show['no_hp']; ?>" required>

                            </div>
                        </div>

                        <hr color="white">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">
                                <font color="white">Password</font>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="nama" style="border-radius: 5px;" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">
                                <font color="white">Password Confirm</font>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="nama" style="border-radius: 5px;" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">
                                <font color="white">Warna Navbar</font>
                            </label>
                            <div class="col-sm-2">
                                <select class="form-control" id="warna" name="navbar">
                                    <option value="<?= $light; ?>">Mode Light</option>
                                    <option value="<?= $secondary; ?>">Mode Dark</option>
                                </select>
                            </div>
                        </div>

                        <!-- Space -->
                        <br>
                        <!-- Space -->

                        <!-- Start Button -->
                        <div>
                            <center>
                                <div class="col-sm-12 mt-0">
                                    <button type="submit" class="btn btn-primary btn-block mt-0 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 10px;" name="submit">
                                        Submit
                                    </button>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <a href="index.php"><button type="submit" class="btn btn-light btn-block mt-0 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 10px;" name="register1">
                                            Cancel
                                        </button></a>
                                </div>
                            </center>
                        </div>
                        <!-- End Button -->

                    </form>

                </div>


            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
    <!-- Container -->
    <!-- End Form Profile -->






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