<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Js -->
  <script>
    function setPicture() {
      var banner = document.getElementById("room");
      var value = banner.options[banner.selectedIndex].value;
      $('img').attr("src", value);
    }
  </script>
  <?php
     if (empty($_GET['type'])) :
          $type = "Standard";
          $imgSrc = "1.jpeg";
     else :
          $type = $_GET['type'];
     endif;

     if ($type == "Standard") :
          $imgSrc = "1.jpeg";
     elseif ($type == "Superior") :
          $imgSrc = "2.jpg";
     elseif ($type == "Luxury") :
          $imgSrc = "3.jpg";
     endif;
     ?>

  <title>Booking</title>
</head>

<body>
  <!-- Awal Navbar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="booking.php">Booking</a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->
  <br>

  <!-- Awal Gutter -->
  <div class="container px-lg-5">
    <div class="row mx-lg-n5">
      <div class="col py-3 px-lg-5">
        <form action="mybooking.php" method="POST">
          <div class="form-group col-sm-10">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="nama">
          </div>
          <div class="form-group col-sm-10">
            <label for="checkin">Check-in</label>
            <input type="date" class="form-control" id="checkin" name="checkin">
          </div>
          <div class="form-group col-sm-10">
            <label for="duration">Duration</label>
            <input type="number" class="form-control" id="duration" name="duration">
            <small id="emailHelp" class="form-text text-muted">Day(s)</small>
          </div>


          <div class="form-group col-sm-10">
            <label for="roomtype">Room Type</label>
            <?php if (empty($_GET['type'])) : ?>
              <select class="custom-select" onchange="setPicture()" id="room" name="type">
                <option value="Standard"><img src="1.jpeg" alt="">Standard</option>
                <option value="Superior"><img src="2.jpg" alt="">Superior</option>
                <option value="Luxury"><img src="3.jpg" alt="">Luxury</option>
              </select>
            <?php else : ?>
              <input type="text" class="form-control" value=<?= $_GET['type'] ?> name="type" src readonly>
            <?php endif; ?>
          </div>



          <div class="col-sm-10">
            <p>Add Service(s)</p>
            <a style="font-size: small;">$ 20/Service</a>
          </div>

          <div class="form-group row col-sm-10">
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="checkbox[]" value="Room Service">
                <label class="form-check-label" for="check1">
                  Room Service
                </label>
              </div>
            </div>
          </div>

          <div class="form-group row col-sm-10">
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check2" name="checkbox[]" value="Breakfast">
                <label class="form-check-label" for="check2">
                  Breakfast
                </label>
              </div>
            </div>
          </div>
          <div class="form-group col-sm-10">
            <label for="phonenumber">Phone Number</label>
            <input type="number" class="form-control" id="phonenumber" aria-describedby="emailHelp" name="phonenumber">
          </div>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Book</button>
          </div>

        </form>
      </div>
      <div class="col py-3 px-lg-5">
        <img src= onchange="setPicture()" alt="image-form" style="width:500px;">
      </div>
    </div>
  </div>
  <!-- Akhir Gutter -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>