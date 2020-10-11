<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Deklarasi PHP -->
  <?php

  $name = $_POST["name"];
  $datein = date('d/m/yy', strtotime($_POST['checkin']));
  $duration = $_POST["duration"];
  $checkout = date('d/m/yy', strtotime($datein . '+' . $duration . 'days'));
  $bookingnumber = rand();
  $phone = $_POST["phonenumber"];
  $room = $_POST["type"];
  $roomservice = $_POST["checkbox"];


  $priceservice = 0;

  if ($room == 'Standard') {
    $price = 90;
  } elseif ($room == 'Superior') {
    $price = 150;
  } elseif ($room == 'Luxury') {
    $price = 200;
  }

  foreach ($roomservice as $value => $key) {
    if ($key == 'Roomservice') {
      $priceservice += 20;
    }
    if ($key == 'Breakfast') {
      $priceservice += 20;
    }
  }

  $totalprice=($duration * $price) + $priceservice;


  ?>

  <title>My Booking</title>
</head>

<body>
  <!-- Awal Navbar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="booking.php">Booking</a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->
  <br>
  <br>
  <!-- Awal Table -->
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Check-in</th>
          <th scope="col">Check-out</th>
          <th scope="col">Room Type</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Service</th>
          <th scope="col">Total Price</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?= $bookingnumber ?></th>
          <td><?= $name ?></td>

          <td><?= $datein ?></td>
          <td><?= $checkout ?></td>
          <td><?= $room ?></td>
          <td><?= $phone ?></td>
          <td>
            <ul>
              <?php foreach ($roomservice as $key => $value) { ?>
                <li> <?= $value ?></li>
              <?php } ?>
            </ul>
          </td>
          <td><?= $totalprice ?></td>
        </tr>

      </tbody>
    </table>
  </div>
  <!-- Akhir Table -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>