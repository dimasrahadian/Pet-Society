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

    <title>Product Store</title>
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
                <li><b class="dropdown-item active" href="viewstore">Product Store</b></li>
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

    <div class="container"><br><br>
        <div class="row">
            <div class="col-sm-8">
                <h1>Product Store</h1>
            </div>
            <div class="col-sm-4" class="form-outline">
				<input type="search" id="form1" class="form-control" placeholder="Search" aria-label="Search" />
			</div>
              </div>
        </div>
      </div>
    


     
  <div class="container">
    <div class=row >
        <div class="col-sm-4" style="text-align: left;" >
            <div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 7cm;">
                <div class="form-check">
                    <h2 style="text-align: Justify;">Filter</h2>
                    <b>Type of Pet</b>
                    <br>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Dogs
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Cats
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Fish
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Birds
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Lizards
                  </label>
                </div>
                <div class="form-check">
                  <b>Categories</b>
                  <br>
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Food
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Medicine
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Accessories
                </label>
              </div>
            
                <b>Price Range </b>
                <br>

                <div data-role="page">
                  <div data-role="header">
                  </div>
                
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                      <div data-role="rangeslider">
                        <label for="price-min">Price Min :</label>
                        <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                        <label for="price-max">Price Max:</label>
                        <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
                      </div>
                      </form>
                  </div>
                </div>
              <div class="button" style="text-align: center;">
                  <br>
                  <button type="button" class="btn btn-warning">Apply Filter</button>
              </div>               
        </div>
  </div>

                     

                      <div class="card" style="width: 18rem;">
                      <a href="viewstoree"><img class="card-img-top" src="../image/whiskas.png" alt="Card image cap"></a>
                      <div class="card-body bg-light">
                        <h5 class="card-title">Whiskas Wet Cat Food</h5>
                        <p class="card-text">Rp. 20.000</p>
                        <a href="#" class="btn btn-warning">Add To Cart</a>
                 </div>
          </div>
     
            
          
                        <div class="card" style="width: 18rem;">
                        <a href="viewstoree"><img class="card-img-top" src="../image/whiskas.png" alt="Card image cap"></a>
                        <div class="card-body">
                          <h5 class="card-title">Whiskas Wet Cat Food</h5>
                          <p class="card-text">Rp. 20.000</p>
                          <a href="#" class="btn btn-warning">Add To cart</a>
                   </div>
            </div>
         

       
            <div class="card" style="width: 18rem;">
            <a href="viewstoree"><img class="card-img-top" src="../image/whiskas.png" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title">Whiskas Wet Cat Food</h5>
                <p class="card-text">Rp. 20.000</p>
                <a href="#" class="btn btn-warning">Add To Cart</a>
         </div>
  </div>

     

  <div class="card" style="width: 16rem;">
  <a href="viewstoree"><img class="card-img-top" src="../image/whiskas.png" alt="Card image cap"></a>
    <div class="card-body bg-light">
      <h5 class="card-title">Whiskas Wet Cat Food</h5>
      <p class="card-text">Rp. 20.000</p>
      <a href="#" class="btn btn-warning">Add To Cart</a>
</div>
</div>


      
      <div class="card" style="width: 16rem;">
      <a href="viewstoree"><img class="card-img-top" src="../image/whiskas.png" alt="Card image cap"></a>
      <div class="card-body">
        <h5 class="card-title">Whiskas Wet Cat Food</h5>
        <p class="card-text">Rp. 20.000</p>
        <a href="#" class="btn btn-warning">Add To Cart</a>
 </div>
</div>

        <div class="card" style="width: 16rem;">
        <a href="viewstoree"><img class="card-img-top" src="../image/whiskas.png" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title">Whiskas Wet Cat Food</h5>
        <p class="card-text">Rp. 20.000</p>
        <a href="#" class="btn btn-warning">Add To Cart</a>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </body>
</html>
