<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
  <title>eCommerce Website </title>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-danger">
    <img src="./logo.jpeg" alt="logo" style="width:90px;">

    <ul class="navbar-nav ml-auto ">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

    </ul>
  </nav>


  <div class="container">
    <h1 class="text-center text-danger mt-3 mb-5 text-uppercase">Online Shopping Cards</h1>
  </div>
  <div class="row col-lg-11 col-md-6 col-sm-12 m-auto">


    <?php

    $con = mysqli_connect('localhost', 'root', '', 'ecomerce') or die("Couldn't Connected");

    $query = "SELECT  `name`, `image`, `price`, `discount` FROM `shopping` order by id ASC ";

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);

    if ($num > 0) {
      while ($checkCon = mysqli_fetch_array($result)) {
    ?>
        <div class="col-12 col-lg-3 col-md-3 col-sm-12">
          <form action="/eCommerce/eCommerce.php" method="post">
            <div class="card">
              <h4 class="card-title text-center pt-2 bg-info text-white p-3  "><?php echo $checkCon['name']; ?>
                <hr class="w-25 m-auto">
              </h4>
              <div class="card-body">
                <img src="<?php echo $checkCon['image']  ?>" alt="phone" class="img-fluid">
                <h6 class="pt-2"> &#8377; <?php echo $checkCon['price'];  ?> &nbsp; <span style="color: red"> (<?php echo $checkCon['discount']; ?>% OFF) </span></h6>

                <h6 class="badge badge-danger mt-1 mb-3 "> 4.4 <i class="fa fa-star"></i></h6><br>
                <input type="text" name="" class="form-control mt-2" placeholder="Quantity">
              </div>
              <div class="btn-group">
                <button class="btn btn-danger ">Add To Card</button><button class="btn btn-warning">By Now</button>
              </div>
            </div>
          </form>

        </div>




    <?php
      }
    }

    ?>
  </div>
  </div>

</body>

</html>