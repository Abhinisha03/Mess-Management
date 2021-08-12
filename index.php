<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Mess</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navtop">
        <a class="navbar-brand pl-5" href="#">Mess Food</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto font-weight-bold">
                <li class="nav-item active">
                    <a class="nav-link pr-5 " href="#home">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link pr-5" href="#abouts">About us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link pr-5" href="#service">Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link pr-5" href="#menues">Menue</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link pr-5" href="#contacts">Query</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="home pt-5" id="home">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-lg-8 pt-5">

                    <h1>IIIT Ranchi Mess</h1>
                    <h2>Health Is Wealth</h2>
                    <button class="btn1">Get Started</button>
                    <button class="btn2">Services</button>


                </div>

            </div>

        </div>

    </section>

    <section class="about" id="abouts">
        <div class="container py-5 ">

            <h1 class="font-weight-bold text-center">About us </h1>
            <div class="row py-5">
                <div class="col-lg-6 ml-auto mr-auto">
                    <p class="p1 text-center">We are here with the only purpose to make our students happy and satisfied
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="./andhra2-Copy-Copy.jpg" class="img-fluid mb-3 " alt="">
                    <h5>Team</h5>
                    <p>We have a team were more than 100 people work</p>

                </div>

                <div class="col-lg-4">
                    <img src="./andhra2-Copy-Copy.jpg" class="img-fluid mb-3" alt="">
                    <h5>Quality</h5>
                    <p>Our Cheifs makes best quality food</p>

                </div>


                <div class="col-lg-4">
                    <img src="./andhra2-Copy-Copy.jpg" class="img-fluid mb-3" alt="">
                    <h5>Price</h5>
                    <p>We believe in best service with less price</p>

                </div>
            </div>
        </div>



    </section>


    <section class="services bg-light" id="service">
        <div class="container text-center py-5  ">
            <p>WHY CHOOSE US</p>
            <h1>Services</h1>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="ser1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Best Services</h5>
                            <p>We provide with the best service we promise</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="food.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Good Quality</h5>
                            <p>We will provide best quality food made by our top cooks</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="hostel-7.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Hygiene</h5>
                            <p>Neat and clean kitchen we gurantee </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </section>

    <section class="menue" id="menues">
    <div class="container table-responsive py-5"> 
    <h1 class="text-center">Menue</h1>
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Day</th>
      <th scope="col">Breakfast</th>
      <th scope="col">Lunch</th>
      <th scope="col">Snacks</th>
      <th scope="col">Dinner</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Monday</th>
      <td>Sandwich</td>
      <td>Roti,rice,dal,gobi aloo</td>
      <td>Breadpakora</td>
      <td>Roti,rice,dal,paneer</td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td>Poha</td>
      <td>Roti,rice,dal,paneer</td>
      <td>Cutlet</td>
      <td>Roti,rice,dal,kofta</td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td>Paratha</td>
      <td>Roti,rice,dal,fries</td>
      <td>Noodles</td>
      <td>Roti,rice,dal,chicken</td>
    </tr>
     <tr>
      <th scope="row">Thursday</th>
      <td>Idli</td>
      <td>Roti,rice,dal,rajma</td>
      <td>Pasta</td>
      <td>Roti,rice,dal,mix veg</td>
    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td>Puri</td>
      <td>Roti,rice,dal,sabzi</td>
      <td>Sandwich</td>
      <td>Roti,rice,dal,aloo</td>
    </tr>
    <tr>
      <th scope="row">Saturday</th>
      <td>Dosa</td>
      <td>Roti,rice,dal,mix veg</td>
      <td>Maggi</td>
      <td>Roti,rice,dal,chicken</td>
    </tr>
    <tr>
      <th scope="row">Sunday</th>
      <td>Bread</td>
      <td>Roti,rice,dal,aloo sabzi</td>
      <td>Bhel</td>
      <td>Roti,rice,dal,paneer</td>
    </tr>
  </tbody>
</table>
</div>
    </section>


    <section class="contact" id="contacts">
    <div class="container py-5">
    <h1 class="text-center font-bold">Suggestions<h1>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" autocomplete="off" class="form-control">
</div>

<div class="form-group">
<label>Email Id</label>
<input type="text" name="email" autocomplete="off" class="form-control">

<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" autocomplete="off" class="form-control">
</div>

<div class="form-group">
<label>Suggest</label>
<textarea class="form-control" name="suggest">
</textarea>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
    </section>

    

    <footer>
    <p class="p-3 bg-dark text-white text-center">@messIIITR2021</p>
    </footer>
    

    <!-- Optional JavaScript 2-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
