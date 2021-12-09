<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="../css/style.css" />

    <title>Pet Sitting</title>
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
<div class="container"><br><br>
    <div class="row">
        <div class="col-sm-8">
            <h1>Pet Sitting </h1>
        </div>
        <div class="col-sm-4" class="form-outline">
<input type="search" id="form1" class="form-control" placeholder="Search..." aria-label="Search" /> 


</div>
    </div>
</div>

<div class="container">
    <div class=row >
        <div class="col-sm-4" style="text-align: left;">
            <div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 7cm;">
                    <div class="form-check">
                    <h2 style="text-align: justify;">Filter</h2>
                    <b>Type of Provider</b>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Agencies/Companies
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Individuals
                    </label>
                    </div>
                    <div class="form-check">
                      <b>Experience</b>
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
                    <b>Services</b>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Pet Sitting
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Pet Feeding
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Pet Grooming
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Training
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Behavioral Training
                    </label>
                    </div>
                    <div class="button" style="text-align: center;">
                    <br>
                    <button type="button" class="btn btn-warning">Apply Filter</button>
                </div>             
            </div>
        </div>
        <div class="col-sm" style="text-align: left;">
            <div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 22cm; height: 7cm;margin: 0cm;">
                    <div class="d-flex align-items-center">
                        <div class="image"> 
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="180">
                        </div>
                        <div class="ml-3 w-100">
                            <div>
                                <br>
                            <div class="p-1 d-flex justify-content-between">
                            <a class="vet-link btn" href="viewpetsittingg">Ryan Zelon</a>
                            </div>
                            <div class="p-1 d-flex justify-content-between">
                                <b>Z Pet Sitting Service</b>
                            </div>
                            <div class="p-1 d-flex justify-content-between">
                                <b>Los Alamos, South California</b>
                            </div>
                            <div class="p-1 d-flex justify-content-between">
                                <p>Hello to one and all, my name is Ryan I hope I can be of some 
                                    assistance to you and your fur family. A little about myself I have 
                                    10 years of pet sitting experience, CPR certified, a college degree...</p>
                            </div>
                        </div>
                        </div>
                    </div>        
            </div>
            <div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 22cm; height: 7cm;margin: 0cm;">
                <div class="d-flex align-items-center">
                    <div class="image"> 
                        <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="180">
                    </div>
                    <div class="ml-3 w-100">
                        <div>
                            <br>
                        <div class="p-1 d-flex justify-content-between">
                            <h2>Rembrand Taylor</h2>
                        </div>
                        <div class="p-1 d-flex justify-content-between">
                            <b>X Pet Sitting Service</b>
                        </div>
                        <div class="p-1 d-flex justify-content-between">
                            <b>San Juan Capistrano,South California</b>
                        </div>
                        <div class="p-1 d-flex justify-content-between">
                            <p>Hello to one and all, my name is Rembrand I hope I can be of some 
                                assistance to you and your fur family. A little about myself I have 
                                10 years of pet sitting experience, CPR certified, a college degree...</p>
                        </div>
                    </div>
                    </div>
                </div>        
        </div>
        <div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 22cm; height: 7cm;margin: 0cm;">
            <div class="d-flex align-items-center">
                <div class="image"> 
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="180">
                </div>
                <div class="ml-3 w-100">
                    <div>
                        <br>
                    <div class="p-1 d-flex justify-content-between">
                        <h2>Shakira Celine</h2>
                    </div>
                    <div class="p-1 d-flex justify-content-between">
                        <b>Y Pet Sitting Service</b>
                    </div>
                    <div class="p-1 d-flex justify-content-between">
                        <b>Solvang, South California</b>
                    </div>
                    <div class="p-1 d-flex justify-content-between">
                        <p>Hello to one and all, my name is Shakira I hope I can be of some 
                            assistance to you and your fur family. A little about myself I have 
                            10 years of pet sitting experience, CPR certified, a college degree...</p>
                    </div>
                </div>
                </div>
            </div>      
       </div>
       <div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 22cm; height: 7cm;margin: 0cm;">
        <div class="d-flex align-items-center">
            <div class="image"> 
                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="180">
            </div>
            <div class="ml-3 w-100">
                <div>
                    <br>
                <div class="p-1 d-flex justify-content-between">
                    <h2>Christina Swift</h2>
                </div>
                <div class="p-1 d-flex justify-content-between">
                    <b>A Pet Sitting Service</b>
                </div>
                <div class="p-1 d-flex justify-content-between">
                    <b>Beafourt, South California</b>
                </div>
                <div class="p-1 d-flex justify-content-between">
                    <p>Hello to one and all, my name is Christina I hope I can be of some 
                        assistance to you and your fur family. A little about myself I have 
                        10 years of pet sitting experience, CPR certified, a college degree...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shadow p-3 mb-5 bg-light rounded" style="color:rgb(19, 2, 2);width: 22cm; height: 7cm;margin: 0cm;">
    <div class="d-flex align-items-center">
        <div class="image"> 
            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="180">
        </div>
        <div class="ml-3 w-100">
            <div>
                <br>
            <div class="p-1 d-flex justify-content-between">
                <h2>Sena Malik</h2>
            </div>
            <div class="p-1 d-flex justify-content-between">
                <b>B Pet Sitting Service</b>
            </div>
            <div class="p-1 d-flex justify-content-between">
                <b>Avalon, South California</b>
            </div>
            <div class="p-1 d-flex justify-content-between">
                <p>Hello to one and all, my name is Sena I hope I can be of some 
                    assistance to you and your fur family. A little about myself I have 
                    10 years of pet sitting experience, CPR certified, a college degree...</p>
            </div>
        </div>
    </div>
 </div>
</div>
<div class="container"><br><br>
    <div class="row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4" class="form-outline ">
<nav aria-label="Page navigation example">
 <ul class="pagination justify-content-end"> 
   <li class="page-item">
  <a class="bg-warning text-white page-link" href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
  </a>
   </li>
   <li class="page-item "><a class="bg-warning text-white page-link" href="#">1</a></li>
   <li class="page-item"><a class="bg-warning text-white page-link" href="#">2</a></li>
   <li class="page-item"><a class="bg-warning text-white page-link" href="#">3</a></li>
   <li class="page-item">
  <a class="bg-warning text-white page-link" href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
  </a>
   </li>
 </ul>
  </nav>
</div>
    </div>
</div>
</div>




        
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
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