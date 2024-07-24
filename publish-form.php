<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Directing Template">
		<meta name="keywords" content="Directing, unica, creative, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>EdupropListing</title>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
		<!-- Css Styles -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" type="text/css">
		<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
		<link rel="stylesheet" href="css/flaticon.css" type="text/css">
		<link rel="stylesheet" href="css/nice-select.css" type="text/css">
		<link rel="stylesheet" href="css/barfiller.css" type="text/css">
		<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
		<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>
		<!-- Header Section Begin -->
		<header class="header sticky-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-2 col-md-2">
						<div class="header__logo">
							<a href="./index.html"><img src="img/sakela_logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="header__nav">
							<nav class="header__menu mobile-menu">
								<ul>
									<li class="active"><a href="./index.html">Home</a></li>
									<li><a href="publish-form.html">Publish AD</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="./blog.html">Blog</a></li>
								</ul>
							</nav>
						</div>  
					</div>
					<!-- <div class="col-lg-2 col-md-2 text-right">
						<div class="header__menu__right header__nav_login pr-5">
						<a class="text-white" href="#" id="loginuser"><strong>Login</strong></a>
							
							
						</div>
					</div> -->
					<div class="header__menu__right">
                           <a class="text-white" href="#" id="loginuser"><strong>Login</strong></a>
                           <!--  <a href="#" class="login-btn"><i class="fa fa-user"></i></a> -->
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<a href="#" class="login-btn"><i class="fa fa-user"></i></a>
								</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									
									<a class="dropdown-item" href="#" id="signout">Signout</a>
									<a class="dropdown-item" href="#" id="">Profile</a>
								</div>
                        </div>
				</div>
				<div id="mobile-menu-wrap"></div>
			</div>
		</header>
		<!-- Header Section End -->
		<!-- Header Section End -->
		<section class="spad">
			<div class="publish-form pt-5 pb-5">
				<div class="container pt-5 pb-5 border mt-3">
					<form id="publish-form" method="POST" action="controller/list-add.php" enctype="multipart/form-data">
						<div id="accordion">
								<?php
								session_start();
								
									if(isset($_SESSION['message'])){
										echo $_SESSION['message'];
										unset($_SESSION['message']);
										
									}
									
								?>
							<div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Seller's Information
										</button>
									</h5>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										<div class="container-md">
											<div class="form-group">
												<label for="seller_name">Name</label>
												<input type="text" class="form-control" required id="seller_name" name="seller_name">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">E-mail</label>
												<input type="email" class="form-control" required id="email" name="email" aria-describedby="emailHelp">
											</div>
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="show_email">
												<label class="form-check-label" for="show_email">Show e-mail on the listing page</label>
											</div>
											<div class="form-group">
												<label for="mobile">Phone</label>
												<input type="text" class="form-control" required id="mobile" name="mobile">
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												General Information
											</button>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body">
											<div class="container-md">
												<div class="form-group">
													<label for="category">Category</label>
													<input type="text" class="form-control" required id="category" name="category">
												</div>
												<div class="form-group">
													<label for="title">Title</label>
													<input type="text" class="form-control" required id="title" name="title" aria-describedby="title">
												</div>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
												</div>
												<div class="form-group">
													<label for="price">Price</label>
													<input type="text" class="form-control" required id="price"  name="price">
												</div>
												<div class="form-group">
													<label for="description">Description</label>
													<textarea class="form-control" id="description" required name="description" rows="3"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Listing Location
											</button>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="card-body">
											<div class="form-group">
												<label for="region">Region</label>
												<input type="text" class="form-control" id="region" name="region" required placeholder="Region">
											</div>
											<div class="form-group">
												<label for="city">City</label>
												<input type="text" class="form-control" id="city" name="city" required placeholder="City">
											</div>
											<div class="form-group">
												<label for="city-area">City Area</label>
												<input type="text" class="form-control" id="city-area" name="cityarea" required placeholder="City Area">
											</div>
											<div class="form-group">
												<label for="address">Address</label>
												<input type="address" class="form-control" id="address" name="address" required placeholder="Address">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center mt-5">
						<button type="submit" id="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- Newslatter Section Begin -->
		<section class="newslatter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="newslatter__text">
							<h3>Subscribe Newsletter</h3>
							<p>Subscribe to our newsletter and don’t miss anything</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<form action="#" class="newslatter__form">
							<input type="text" placeholder="Your email">
							<button type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- Newslatter Section End -->
		<!-- Footer Section Begin -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer__copyright">
							<div class="row">
								<div class="col-md-5">
									<div class="footer__copyright__text"><p>
										Copyright &copy;<script>document.write(new Date().getFullYear());</script>All Right Reserved   by <a href="" class="text-dark" target="_blank">Eduprop Listing</a>
									</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="footer__copyright__links">
										<a href="#">Privacy Policy</a>
										<a href="#">Contact Us</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="footer__copyright__links text-right">
										<a href="#" class="text-dark">customercare@eduproplisting.com</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-validate.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/jquery.barfiller.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.slicknav.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/loader.js"></script>
		<script>
			$(document).ready(function() {
    $("#publish-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            username: {
                required: true,
                
            },
			mobile: {
				required: true,
				}
        },
        messages: {
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
		</script>
	</body>
</html>