<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/boots5.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/f7f3f92552.js" crossorigin="anonymous"></script>

    <title>Sitter</title>
  </head>
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

      <header>
        <div class="container" id="Feature"><br>
            <div class="Feat">
                <div class="row" style="text-align:center;">
                    <div class="col-sm-12" >
                        <a class="feat-link active" href="#">Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

      <section>
        <div class="container py-5" id="Vet">
          <div class="row d-flex justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
              <div class="card shadow">
                <img
                  src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                  class="card-img-top"
                />
                <div class="card-body">
                  <div class="card-title d-flex justify-content-between mb-0">
                    <p class="text-muted mb-0">Ryan Z</p>
                    <p class="mb-0">$10</p>
                  </div>
                </div>
                <div class="rounded-bottom" style="background-color: #eee;">
                  <div class="card-body">
                    <p class="mb-4">Your payment details</p>
      
                    <div class="form-outline mb-3">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="1234 5678 1234 5678"
                      />
                      <label class="form-label">Card Number</label>
                    </div>    
                    <div class="row mb-3">
                      <div class="col-6">
                        <div class="form-outline">
                          <input
                            class="form-control"
                            placeholder="MM/YYYY"
                          />
                          <label class="form-label" for="formControlLgExpk8">Expire</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-outline">
                          <input
                            class="form-control"
                            placeholder="Cvv"
                          />
                          <label class="form-label" for="formControlLgcvv8">Cvv</label>
                        </div>
                      </div>
                    </div>
                    <hr />
                    <p class="mb-4">Or you can pay with :</p>
                    <div class="d-flex flex-row pb-3">
                        <div class="d-flex align-items-center pe-2">
                          <input
                            class="form-check-input"
                            type="radio"
                          />
                          <img src="../image/Gopay.png" width="60">
                        </div>
                        <div class="d-flex align-items-center pe-2">
                            <input
                              class="form-check-input"
                              type="radio"
                            />
                            <img src="../image/OVO.png" width="60">
                        </div>
                        <div class="d-flex align-items-center pe-2">
                            <input
                              class="form-check-input"
                              type="radio"
                            />
                            <img src="../image/shopee.png" width="60">
                        </div>
                    </div>               
                    <a class="vet-link btn" href="#">Pay</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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