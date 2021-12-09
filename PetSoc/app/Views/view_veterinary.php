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
    <title>Veterinary</title>
  </head>
  <body id="body">
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

    <div class="container" id="Title1"><br><br>
        <div class="row">
            <div class="col-sm-8">
                <h1>Veterinary Service</h1>
            </div>
            <div class="col-sm-4" class="form-outline">
				<input type="search" id="form1" class="form-control" placeholder="Name" aria-label="Search" />
			</div>
        </div>
	</div>
	<br>
	<div class="container" id="Title2"><br>
		<div class="row">
			<div class="col-sm-12">
				<h4> Explore Vet</h4>
			</div>
		</div>
	</div>

	<div class="container" id="feature"><br>
		<div class="feature1"></div>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4" >
				<button type="button" class="feat-link btn btn-warning text-white">Popular</button>
			</div>
			<div class="col-sm-4">
				<button type="button" class="feat-link btn btn-warning text-white">Nearby</button>
			</div>
			<div class="col-sm-4">
				<button type="button" class="feat-link btn btn-warning text-white">Last Visited</button>
			</div>
		</div>
	</div>

	<div class="container"><br>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded"> 
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container"><br>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
						<div class="d-flex align-items-center">
							<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
							<div class="ml-3 w-100">
								<div>
								<l2>Jason</l2>
								<div class="p-1 d-flex justify-content-between">
									<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
								</div>
								<div class="p-1 d-flex justify-content-between">
									<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
								</div>
								<div class="p-1 d-flex justify-content-between">
									<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
								</div>
								<div class="p-1 d-flex justify-content-between">
								<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
								</div>
							</div>
							</div>
						</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="container"><br>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4" >
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container"><br>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded"> 
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<div class="shadow-lg p-3 mb-5 bg-white rounded">
					<div class="d-flex align-items-center">
						<div class="image"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="128"> </div>
						<div class="ml-3 w-100">
							<div>
							<l2>Jason</l2>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-star"> 4.2 (40 Reviews)</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-clock"> 5 am - 5 pm</i></div>
							</div>
							<div class="p-1 d-flex justify-content-between">
								<div class="d-flex flex-column"> <i class="bi bi-geo-alt"> 5.5 km</i> </div>
							</div>
							<div class="p-1 d-flex justify-content-between">
							<a class="vet-link btn; btn btn-warning text-white;"  href="viewvetservicee">Book Now</a>
							</div>
						</div>
						</div>
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
    <!-- End Footer -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>