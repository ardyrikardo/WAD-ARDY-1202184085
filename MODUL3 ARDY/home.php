<?php

require 'functions.php';

$event = query("SELECT * FROM event_table");




?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Home</title>
</head>

<body>

  <!-- Awal Navbar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <!-- <a class="navbar-brand" href="#"><img src="owl.png" alt="" width="60" height="60"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="home.php"><b>EAD EVENTS</b><span class="sr-only">(current)</span></a>


        </div>
      </div>
      <div class="collapse navbar-collapse justify-content-end">

        <table style="width: 25%;">
          <form class="form-inline my-2 my-lg-0">
            <tr>
              <td>
                <a href="home.php"><button class="btn btn-outline-light" type="button">Home</button></a>

              </td>
              <td>
                <a href="buat_event.php"><button class="btn btn-outline-light" type="button">Buat Event</button></a>
              </td>
            </tr>

          </form>
        </table>

      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->
  <br>

  <div>
    <H4 style="text-align: center;">WELCOME TO EAD EVENTS!</H4>
  </div>

  <br><br><br><br>

  <div class="container">
      <?php $i = 1; ?>
      <?php foreach ($event as $row): ?>

    <div class="card" style="width: 18rem;" >
      <img src="image/<?php echo $row['gambar'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $row["name"] ?></h5>
          <br>
          <table >
                <tr>
                  <td>
                    <p class="card-text"><img src="calendar.png" alt="" width="30" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $row["tanggal"] ?></p>
                    <p class="card-text"><img src="pin.png" alt="" width="30" height="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $row["tempat"] ?></p>
                  </td>
                </tr>
          </table>
          <br>
          
          <p class="card-text">Kategori : Event <?= $row["kategori"] ?></p>

          <hr>
          <div style="text-align: right;">
            <a href="details.php" class="btn btn-primary" >Detail</a>
          </div>
          
        </div>
    </div>

        <?php $i++; ?>
        <?php endforeach; ?>
  </div>

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