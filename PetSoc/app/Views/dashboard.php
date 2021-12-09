<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    
    <title>Dashboard</title>
  </head>
  <body>
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Service
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="viewstore">Product Store</a></li>
                <li><a class="dropdown-item" href="viewpetsitting">Pet Sitting</a></li>
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

    <!-- Header -->
    <Header class="jumbotron-fluid" id="Header">
      <div class="container">
        <div class="row">
          <div class="col-6 contain">
            <h1>Let's take care of our pets</h1>
            <P>The unknown truth is that these animals like us, are conscious beings with their own personality and feelings and therefore deserve our respect and should be as equals.</P>
            <button class="btn">Explore Now</button>
          </div>
          <div class="col-5 offset-1">
            <img src="../image/Header.png" alt="">
          </div>
        </div>
      </div>
    </Header>
    <!-- End Header -->

    <!-- About -->
    <section class="container" id="About">
      <div class="row">
        <div class="col">
          <img src="../image/About.png" alt="">
        </div>
        <div class="col">
          <div class="Header">
            <h2>The Best For Your Pet</h2>
            <span class="divider-one"></span>
            <span class="divider-two"></span>
            <span class="divider-three"></span>
          </div>
          <p class="body">What is Pet Society ? Pet Society is a pet wellbeing website where user can easily take care of their pet. We have tried to bring all the services in one app to make the life of pet owners easier than before. Our website has features like pet shop for purchase pet accessories, vet service, and pet sitting.</p>
          <div class="Card shadow-sm">
            <!-- <span class="square"></span> -->
            <div class="contain one">
              <h3>2m</h3>
              <p>USERS</p>
            </div>
            <div class="contain two">
              <h3>1,000+</h3>
              <p>MEDICAL EXPERT</p>
            </div>
            <div class="contain three">
              <h3>35</h3>
              <p>CITIES</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->

    <!-- Service -->
    <section class="container" id="Service">
      <div class="Header">
        <h2>What We Offer</h2>
      </div>
      <div class="row">
        <div class="col">
          <div class="Card shadow-sm">
            <h3 class="text-center">Product Store</h3>
            <p>Spoil your pets with treats and accesossories from our online store.</p>
            <button class="btn container-fluid">Explore Now</button>
          </div>
        </div>
        <div class="col">
          <div class="Card shadow-sm">
            <h3 class="text-center">Pet Sitting</h3>
            <p>Hire verified pet lovers to watch your furry friend when you are away.</p>
            <button class="btn container-fluid">Explore Now</button>
          </div>
        </div>
        <div class="col">
          <div class="Card shadow-sm">
            <h3 class="text-center">Vet Service</h3>
            <p>Your pet deserve the best healthcare! Find reliable vet services for your pet.</p>
            <button class="btn container-fluid">Explore Now</button>
          </div>
        </div>
      </div>     
    </section>
    <!-- End Service -->

    <!-- Feedback -->
    <section class="container" id="Feedback">
      <div class="Feedback Header">
        <h2>Customer Feedback</h2>
      </div>
      <div class="row">
        <div class="col">
          <div class="Card shadow-sm">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat euismod eros at sagittis. Mauris tincidunt dolor sed urna euismod pharetra.”</p>
            <div class="biodata">
              <img src="../image/Feedback1.png" alt="">
              <div class="contain">
                <h4>John Doe</h4>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
         <div class="Card shadow-sm">
          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat euismod eros at sagittis. Mauris tincidunt dolor sed urna euismod pharetra.”</p>
          <div class="biodata">
            <img src="../image/Feedback2.png" alt="" class="avatar">
            <div class="contain">
              <h4>Arthur Dennis</h4>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star"></i>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- End Feedback -->
    
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