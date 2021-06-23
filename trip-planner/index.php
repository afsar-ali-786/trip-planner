<?php
require("includes/common.php");         //tabase conection 

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip planner | TP</title>
    <!-- Bootstrap Core CSS -->
	<script
	src="https://kit.fontawesome.com/1f6059cc86.js"
	crossorigin="anonymous"
  ></script>


	<!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style123.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
		<div class="container">
		  <a class="navbar-brand t-1" href="index.php">
			<i class="fas fa-map-marker-alt"></i> Trip<span class="x">Planner</span>
		  </a>
		  <button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNav"
			aria-controls="navbarNav"
			aria-expanded="false"
			aria-label="Toggle navigation"
		  >
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.php">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="package-list.php">Packages</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="contactus.php">Contact</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="signup.php">Registration</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link btn btn-1 text-black-50" href="login.php">Login_</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	  <div class="header">
		<div
		  class="
			d-flex
			justify-content-center
			align-items-center
			flex-column
			text-area
		  "
		>
		  <h1 class="display-3">Trip<span class="x">Planner</span></h1>
		  <h1 class="display-3">The new Adventure</h1>
		  <p class="lead text-center">Life is a Trip Plan your next vacation.
			
		  </p>
		  <button class="btn btn-1"><a href="package-list.php">Book Now</a></button>
		</div>
	  </div>

<!--- rooms ---->
<section class="services">
	<div class="container text-center">
	  <h1 style="margin: 5% 5%;">Our Best Services</h1>

	  <div class="row">
		<div class="col-lg-4">
			<i class="fas fa-umbrella-beach fa-5x"></i>
		  <h1>Amazing Travels</h1>
		  <p class="lead">
			Our travel agency came together to help other people's 
			plan and book their dream vacations..
		  </p>
		</div>

		<div class="col-lg-4">
			<i class="fas fa-route fa-5x"></i>
			<h1>Best Location</h1>
			  <p class="lead">
				We are a group of people who are well-versed about the fun and rigors of
				 traveling. Our travel agency 
				came together to help other people's plan and book their dream vacations. 
		  </p>
		</div>

		<div class="col-lg-4">
			<i class="fas fa-headset fa-5x"></i> 
		  <h1>24X7 support</h1>
		 
		  <p class="lead">
			If you have any questions about us regarding our services, or even travel tips,
			 get in touch with us ,we are available 24*7 to serve you.   
		  </p>
		</div>
		
	  </div>
	</div>
  </section>

<section class="image-hero">
	<div class="overlay d-flex flex-column align-item-center 
	justify-content-center">
	<div class="container">
	<div class="row">
	<div class="col-md-8"><br><br>
		<h3 class="display-3 text-white">Book now and get exciting Offers</h3>
		<p class="about-p lead text-white">We are a group of people who are well-versed about 
			the fun and rigors of traveling.</p>

	</div>
	<div class="col-md-4 d-flex flex-column align-item-center 
	justify-content-center"><br><br><br>
		<button class="btn btn-info"><a href="package-list.php">Book Now</a></button>
	</div>
    </div>
</div>
</div>
</section>
<!--- rooms ---->
<section class="mt-5 mb-5">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <div
			id="carouselExampleSlidesOnly"
			class="carousel slide carousel-fade"
			data-bs-ride="carousel"
		  >
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="9.jpg" class="d-block w-100 caro-img" alt="..." />
			  </div>
			  <div class="carousel-item">
				<img src="10.jpg" class="d-block w-100 caro-img" alt="..." />
			  </div>
			  <div class="carousel-item">
				<img src="11.jpg" class="d-block w-100 caro-img" alt="..." />
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-6">
		  <h1>About tripplanner</h1>
		  <p class="lead mt-5">
			A travel planner is a person who is responsible for making travel arrangements for a client based on their requirements. He also provide advises and suggestions about the destination, mode of transport, hotel accommodation, car rentals and tours to take!
		  </p>
		  <button class="btn btn-1"><a href="aboutus.php">Read more</a></button>
		</div>
	  </div>
	</div>
  </section>
  <section>
	<div class="container">
	  <h1 class="mb-5 mt-5 text-center">Most popular places</h1>
	  <div class="row">
		<div class="col-lg-4">
		  <div class="card">
			<h2 class="c-1 overlay-c">Poland</h2>
			<img src="3.jpg" alt="" class="img-card" />
		  </div>
		</div>
		<div class="col-lg-4">
		  <div class="card">
			<h2 class="c-1 overlay-c">India</h2>
			<img src="4.jpg" alt="" class="img-card" />
		  </div>
		</div>
		<div class="col-lg-4">
		  <div class="card">
			<h2 class="c-1 overlay-c">Switzerland</h2>
			<img src="5.jpg" alt="" class="img-card" />
		  </div>
		</div>
	  </div>
	  <div class="row mt-3 mb-5">
		<div class="col-lg-4">
		  <div class="card">
			<h2 class="c-1 overlay-c">London</h2>
			<img src="6.jpg" alt="" class="img-card" />
		  </div>
		</div>
		<div class="col-lg-4">
		  <div class="card">
			<h2 class="c-1 overlay-c">New york</h2>
			<img src="7.jpg" alt="" class="img-card" />
		  </div>
		</div>
		<div class="col-lg-4">
		  <div class="card">
			<h2 class="c-1 overlay-c">Paris</h2>
			<img src="8.jpg" alt="" class="img-card" />
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="tips">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <h1>Tips on travel</h1>
		  <p class="mt-3 lead">
			Planning a trip can feel like both the most exciting AND the most overwhelming part of travel. Sure, creating a Pinterest board full of gorgeous pictures is fun, but then you start trying to figure out the actual logistics and it hits you … oh god, this is SO MUCH WORK. Cue panic attacks. Wow, I totally just described our wedding planning process, too.

But planning a trip doesn’t have to be the source of constant anxiety and overwhelm! Through the years, I’ve perfected my trip planning process, and I’ve got it down to a fine science.
		  </p>
		  <button class="btn btn-1"><a href="https://practicalwanderlust.com/how-to-plan-a-trip-travel-planning-tips/">Read more</a></button>
		</div>
		<div class="col-md-6">
		  <img src="12.jpg" class="img-n" alt="" />
		</div>
	  </div>
	</div>
  </section>
  <section>

<br><br>

	 <!--Footer-->
	 <?php
	 include 'includes/footer.php';
	 ?>
	 <!--Footer end-->
	
</body>
</html>	