<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <title>Veterinary</title>
  </head>
  <body >

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" id="Navbar">
        <div class="container">
          <div class="logo">
          <img src="../image/logo.png" alt="">
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
                <li><a class="dropdown-item" href="viewpetsitting">Pet Sitting</a></li>
                <li><b class="dropdown-item active" href="viewvetservice">Vet Service</b></li>
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

    <!-- Header -->
    <Header>
        <div class="container" id="Title1"><br><br>
            <div class="row">
                <div class="col-sm-8">
                    <h1>Veterinary Service</h1><br>
                </div>
            </div>
        </div>
        <div class="container" id="Title1"><br>
          <div class="row">
              <div class="col-sm-8">
                  <h4>Profile</h4><br>
              </div>
          </div>
      </div>
    </Header>
    <!-- End Header -->

    <!-- Body -->
    <div class="container" id="Profile">
        <div class="row">

            <div class="col-sm-4">
				<div class="shadow p-3 mb-5 bg-white rounded"> 
					<div class="d-flex align-items-center">
                        <div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="380">
                            <h2 style="text-align: center;"> Jason </h2>
                            <div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
                            <div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
                            <div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
                            <div class="p-1 d-flex justify-content-center">
                                <a class="pro-link btn" href="viewvetserviceee">Pay</a>
                            </div>
                        </div>
					</div>
				</div>
			</div>

            <div class="col-sm-8">
                <div class="shadow p-3 mb-5 bg-white rounded"> 
					<div class="container">
                        <h5 style="text-align: center;">Biography</h5>
                        <p style="font-weight:400;">Associate veterinarian with 7+ years of
                            experience. Specialist in companion animal
                            emergency and critical care and ACVECC
                            diplomate. Seeking to leverage my skills to
                            contribute to high quality animal medical care
                            in a challenging environment at Independence
                            Animal Hospital.</p>
                        <h5 style="text-align: center;"> Work Experience </h5>
                        <p style="font-weight:400;"> Green Street Veterinary Clinic,Richmond, VA
                            Associate Veterinarian
                            January 2015-Present </p>
                        <p style="font-weight:400"> Green Street Veterinary Clinic,Richmond, VA
                            Associate Veterinarian
                            January 2012-2015</p>
                            <hr
                        <h5 style="text-align: center;">Location</h5>
                        <div class="image"> <img src="../image/1.png" class="rounded" width="775">
					</div>
				</div>
            </div>

        </div>
    </div>

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


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>