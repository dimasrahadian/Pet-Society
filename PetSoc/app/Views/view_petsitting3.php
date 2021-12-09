<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/boots4.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/f7f3f92552.js" crossorigin="anonymous"></script>

    <title>Sitter</title>
  </head>
  <script src="./src/bootstrap-input-spinner.js"></script>
        <script>
        $("input[type='number']").inputSpinner()
    </script>
  <body >

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" id="Navbar">
        <div class="container">
          <div class="logo">
            <img src="../image/Logo.png" alt="">
            <a class="navbar-brand" href="#">Pet Society</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="dashboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="viewstore">Product Store</a></li>
                <li><b class="dropdown-item active" href="viewpetsitting">Pet Sitting</b></li>
                <li><a class="dropdown-item" href="viewvetservice">Vet Service</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewcontact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn" href="login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

    <!-- Body -->
    <br>
    <header>
        <div class="container" id="Feature"><br>
            <div class="Feat">
                <div class="row" style="text-align:center;">
                    <div class="col-sm-8" >
                        <a class="feat-link active" href="#">Book</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="feat-link" href="#">Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <main>
    <section>
    <div class="container" id="Vet">
        <div class="row">
            <div class="col-sm-8">
            <div class="card wish-list mb-3 shadow">
              <div class="card-body">
                <h5 class="mb-4">Book (<span>1</span> Person)</h5>
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100"
                        src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt=" ">
                      <a href="#!">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5>Mark W</h5>
                        </div>
                        <div>
                            <input type="number"/>
                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                ($10/day)
                              </small>
                        </div>      
                      </div>
                      <p>Bandung,Indonesia</p>
                      <hr />
                      <div>
                          <h5>Reasons to hire me</h5>
                          <p>You should trust me because of my experience </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 shadow">
                <div class="card-body">
                  <h5 class="mb-4">Responsibilities will include:</h5>
                  <p class="mb-0">Overnight care and Boarding</p>
                </div>
            </div>

            <div class="card mb-3 shadow">
              <div class="card-body">
                <h5 class="mb-4">We accept</h5>
                <img class="mr-2" width="45px"
                src="../image/visa.png" alt=" ">
                <img class="mr-2" width="45px"
                src="../image/mastercard.png" alt="">
                <img class="mr-2" width="45px"
                src="../image/atmbersama.png" alt="">
                <img class="mr-2" width="45px"
                src="../image/paypal.png"alt=" ">
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-3 shadow">
              <div class="card-body">
                <h5 class="mb-3">The total amount of</h5>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      temporary amount
                    <span>$10</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>The total amount</strong>
                    </div>
                    <span><strong>$10</strong></span>
                  </li>
                </ul>
                <a class="vet-link btn" href="viewpetsittingggg">Book Now</a>
              </div>
            </div>   
          </div>
        </div> 
</section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 		  <!-- Footer -->
       <footer class="jumbotron-fluid" id="Footer">
      <div class="container">
        <div class="row">
          <div class="col-5">
            <div class="about">
              <div class="logo">
                <img src="../image/logo.png" alt="">
                <a class="navbar-brand" href="#">Pet Society</a>
              </div>
              <p>Pet society is an all in one website that can make it easier for pet owners to take care of their pets in a complex way.</p>
            </div>
          </div>
          <div class="col-2 offset-1">
            <div class="company">
              <h4>Company</h4>
              <ul>
                <li>
                  <a href="">Home</a>
                </li>
                <li>
                  <a href="">About Us</a>
                </li>
                <li>
                  <a href="">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-2">
            <div class="services">
              <h4>Services</h4>
              <ul>
                <li>
                  <a href="">Product Store</a>
                </li>
                <li>
                  <a href="">Pet Sitting</a>
                </li>
                <li>
                  <a href="">Vet Service</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-2">
            <div class="information">
              <h4>Information</h4>
              <ul>
                <li>
                  <a href="">Terms & Conditions</a>
                </li>
                <li>
                  <a href="">Privacy Police</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>