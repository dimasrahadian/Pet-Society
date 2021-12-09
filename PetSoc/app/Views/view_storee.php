<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="../css/style2.css" />
    <title>Product Store</title>
  </head>
  <body>
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

    <main class="container">
 
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img class="active" src="../image/whiskas.png" alt="">
      </div>
     
     
      <!-- Right Column -->
      <div class="right-column">
     
        <!-- Product Description -->
        <div class="product-description">
          <span>Whiskas</span>
          <h2>Whiskas Wet Cat Food</h2>
          <p>This young cat's wet food no doubt uses real meat and its processed aroma that is the mainstay of this product.</p>
        </div>
     
        <!-- Product Configuration -->
        <div class="product-configuration">
     
         
     
          <!-- Flavor Configuration -->
          <div class="flavor-config">
            <span>Flavor</span>
     
            <div class="flavor-choose">
              <button>Tuna</button>
              <button>Ocean fish</button>
              <button>Mackerel</button>
            </div>
          </div>
        </div>
     
        <!-- Product Pricing -->
        <div class="product-price">
          <span>Rp 20.000</span>
          <a href="login" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                                     

  </body>
</html>
