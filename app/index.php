<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IT-Blog</title>
	<link rel="stylesheet" href="css/style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@800&display=swap" rel="stylesheet">
	<script src="./js/jsLibs/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body>
	<div class="wrapper">
		<div class="header">

			<div class="header__navbar">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light">
					  <a class="navbar-brand mb-0 h1" href="#">IT_Blog</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">
					      <li class="nav-item">
					        <a class="nav-link" href="#">Home</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">About_Me</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">My_GitHub</a>
					      </li>
					      <li class="nav-menu dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Articles_Menu
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">All Articles</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">Programming</a>
					          <a class="dropdown-item" href="#">LifeStyle</a>
					          <a class="dropdown-item" href="#">Books</a>
					        </div>
					      </li>
					    </ul>
					  </div>
					</nav>
				</div>
			</div>

			<div class="header__carousel">
				<div class="container">
					<div id="carousel__image" class="carousel slide carousel-fade" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carousel__image" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel__image" data-slide-to="1"></li>
					    <li data-target="#carousel__image" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="./src/images/programming.png" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
							    <h5>Programming</h5>
							    <p>Programming is a whole art!</p>
							  </div>						    
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="./src/images/LifeStyle.png" alt="Second slide">
					    	<div class="carousel-caption d-none d-md-block">
							    <h5>LifeStyle</h5>
							    <p>Live a correct and healthy LifeStyle</p>
							  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="./src/images/book.jpg" alt="Third slide">
					    	<div class="carousel-caption d-none d-md-block">
							    <h5>Life Books</h5>
							    <p>The book is the main source of information</p>
							  </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carousel__image" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carousel__image" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>

		</div>

		<section class="content">
			<div class="container">

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>Programming</h2>
							<div class="card-deck">
							  <div class="card wow animate__animated animate__fadeInLeft">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							      <a href="#" class="btn btn-primary d-flex justify-content-center">Go somewhere</a>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__zoomIn">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							      <a href="#" class="btn btn-primary d-flex justify-content-center">Go somewhere</a>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__fadeInRight">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to 
							      <a href="#" class="btn btn-primary d-flex justify-content-center">Go somewhere</a>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							</div>							
						</div>	
					</div>			
				</div>

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>Programming</h2>
							<div class="card-deck">
							  <div class="card wow animate__animated animate__bounceInLeft">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__bounceInUp">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__bounceInRight">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							</div>							
						</div>	
					</div>			
				</div>

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>Programming</h2>
							<div class="card-deck">
							  <div class="card wow animate__animated animate__fadeInUpBig">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in fffffffffffffffff</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__jackInTheBox">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This card has supporting text below as a natural lead-in to additiona;;;;;;;;;;;;</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__fadeInUpBig">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.ffffffffffffffff</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							</div>							
						</div>	
					</div>			
				</div>

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>Programming</h2>
							<div class="card-deck">
							  <div class="card wow animate__animated animate__slideInLeft">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__slideInDown">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							  <div class="card wow animate__animated animate__slideInRight">
							    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
							    <div class="card-body">
							      <h5 class="card-title">Card title</h5>
							      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
							    </div>
							    <div class="card-footer">
							      <small class="text-muted">Last updated 3 mins ago</small>
							    </div>
							  </div>
							</div>							
						</div>	
					</div>			
				</div>

			</div>
		</section>

		<!-- Footer -->
		<section class="footer page-footer font-small pt-5 bg-info">

			<div class="container">
				<div class="text-center text-md-left">

		    <!-- Grid row -->
		    <div class="row">

		      <!-- Grid column -->
		      <div class="col-md-6 mt-3">

		        <!-- Content -->
		        <h5 class="text-uppercase">Footer Content</h5>
		        <p>Here you can use rows and columns to organize your footer content.</p>

		      </div>
		      <!-- Grid column -->

		      <hr class="clearfix w-100 d-md-none pb-3">

		      <!-- Grid column -->
		      <div class="col-md-3 mb-3 ml-auto">

		        <!-- Links -->
		        <h5 class="text-uppercase">Menu</h5>

		        <ul class="list-unstyled">
		          <li>
		            <a href="#!">Home</a>
		          </li>
		          <li>
		            <a href="#!">About_Me</a>
		          </li>
		          <li>
		            <a href="#!">My_GitHub</a>
		          </li>
		        </ul>

		      </div>
		      <!-- Grid column -->

		    </div>
		    <!-- Grid row -->

		  </div>
		  <!-- Footer Links -->

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">© 2020 Copyright:
		    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
		  </div>
		  <!-- Copyright -->
			</div>		  

		</section>
		<!-- Footer -->


	</div>

	<script src="./js/jsLibs/jsLibs.min.js"></script>
	<script src="./js/main.js"></script>
</body>
</html>