<?php
include('./_actions/dbConfig.php');
include('./_actions/createLogin.php');
include('./_actions/loginTest.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/27bf763da3.js" crossorigin="anonymous"></script>
</head>

<body id="context">
	<nav class="navbar navbar-dark navbar-expand-lg d-flex flex-row py-0 fixed-top ">
		<div class="container">
			<a href="home.php" class="navbar-brand">
				<img src="img/logo.jpeg" alt="yamaha-logo" />
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav m-auto px-5 text-center">
					<li class="nav-item dropdown has-megamenu">
						<a class="nav-link" id="homeLink" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a href="information.php" class="nav-link">Information</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="search.php" id="navbarDropdown searchLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Popular SMA
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<ul>
								<li>
									<a class="dropdown-item" href="https://www.facebook.com"><i class="fa-brands fa-square-facebook"></i>
										Facebook</a>
								</li>
								<li>
									<a class="dropdown-item" href="https://www.instagram.com"><i class="fa-brands fa-square-instagram"></i>
										Instagram</a>
								</li>
								<li>
									<a class="dropdown-item" href="https://www.twitter.com"><i class="fa-brands fa-square-twitter"></i>
										Twitter</a>
								</li>
							</ul>
							<div class="vr mx-3"></div>
							<ul>
								<li>
									<a class="dropdown-item" href="https://www.youtube.com"><i class="fa-brands fa-square-youtube"></i>
										YouTube</a>
								</li>
								<li>
									<a class="dropdown-item" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i>
										Linkedin</a>
								</li>
								<li>
									<a class="dropdown-item" href="https://www.pinterest.com"><i class="fa-brands fa-square-pinterest"></i>
										Pinterest</a>
								</li>
								<li>
									<a class="dropdown-item" href="search.php">
										Search Popular SMA <i class="fa-solid fa-angles-right"></i></a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a href="help.php" class="nav-link">Help</a>
					</li>
					<li class="nav-item">
						<a href="livestreaming.php" class="nav-link">Streaming</a>
					</li>
					<li class="nav-item">
						<a href="contact.php" class="nav-link" id="contactLink">Contact</a>
					</li>
					<li class="nav-item">
						<a href="guidance.php" class="nav-link">Guidance</a>
					</li>
				</ul>
				<ul class="navbar-nav d-flex flex-row justify-content-center align-items-center">
					<li>
						<a href="dashboard.php" class="nav-link">
							<i class="fa-solid fa-circle-user fs-4" title="My Account"></i>
						</a>
					</li>
					<?php if ($showLoginButton) : ?>
						<li class="px-2">
							<a href="<?php echo $buttonLink; ?>" class="nav-link">
								<div class="btn btn-login">Login</div>
							</a>
						</li>
					<?php else : ?>
						<li>
							<a href="<?php echo $buttonLink; ?>" class="nav-link">
								<i class="fa-solid fa-right-from-bracket px-2" title="Logout"></i>
							</a>
						</li>
					<?php endif; ?>
					<div class="card border-0">
						<form action="#" method="get" class="searchform navbar-form border-0" role="search">
							<input type="hidden" value="search" name="view" />
							<div class="input-group">
								<input type="text" name="searchword" required class="form-control border-0" placeholder="Search" name="q" id="searchInput" />
								<div class="input-group-btn">
									<button class="btn btn1 border-0" type="submit">
										<i class="fa-solid fa-magnifying-glass" title="Search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</ul>
			</div>
		</div>
	</nav>
	<div class="p-100 container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">

				<?php if (isset($error)) : ?>
					<div class="alert alert-danger alert-dismissible fade show text-center" id="alertBox" role="alert">
						<strong><?= $error ?></strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php elseif (isset($err)) : ?>
					<div class="alert alert-danger alert-dismissible fade show text-center" id="alertBox" role="alert">
						<strong><?= $err ?></strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php else : ?>
					<?php if (isset($_SESSION['success_message'])) : ?>
						<div class="alert alert-success alert-dismissible fade show text-center" id="alertBox" role="alert">
							<strong><?= $_SESSION['success_message'] ?></strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php unset($_SESSION['success_message']); ?>
					<?php endif; ?>
				<?php endif; ?>


				<div class="fw-bolder h3 text-center">
					Login
				</div>
				<div>
					<form action="" method="POST" class="mt-5">
						<div class="form-floating">
							<input type="text" class="form-control my-3" placeholder="Enter Username" id="username" name="username" required <?php if (isUserLocked()) echo 'disabled'; ?>>
							<label for="username">Username:</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control my-3" placeholder="Enter Password" id="password" name="password" required <?php if (isUserLocked()) echo 'disabled'; ?>>
							<label for="password">Password:</label>

						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" type="checkbox" value="" id="remember" <?php if (isUserLocked()) echo 'disabled'; ?>>
							<label class="form-check-label" for="remember">
								Remember me
							</label>
						</div>

						<button type="submit" class="col-12 w-100 btn btn-lg submit text-white" id="submitBtn" name="submit">Login</button>

					</form>
					<div class="text-center my-3">
						<a class="violet text-decoration-none" href="register.php">Don't have an account? Please Register.</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Footer1 -->
	<div class="right pt-3 bg-dark text-end px-5">
		<a href="#">
			<i class="fa-solid fa-chevron-up text-white" title="Page Top"></i>
		</a>
	</div>
	<!-- End Footer1 -->
	<!-- Start Footer2 -->
	<section class="footer2 bg-dark pt-4 pb-5 px-3">
		<div class="container">
			<div class="row row-cols-md-2 row-cols-sm-2">
				<div class="col-lg-3 pt-3">
					<h6 class="text-white">Quick Links</h6>
					<ul class="navbar-nav pt-1">
						<li class="nav-item">
							<a href="home.php" id="home1Link" class="here">Home</a>
						</li>

						<li class="nav-item">
							<a href="information.php" id="info1Link" class="here">Information</a>
						</li>
						<li class="nav-item">
							<a href="search.php" id="search1Link" class="here">Most Popular Social Media Apps</a>
						</li>

						<li class="nav-item">
							<a href="help.php" id="help1Link" class="here">Help</a>
						</li>
						<li class="nav-item">
							<a href="livestreaming.php" id="live1Link" class="here">Live Streaming</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" id="contact1Link" class="here">Contact</a>
						</li>
						<li class="nav-item">
							<a href="guidance.php" id="guide1Link" class="here">Guidance</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 pt-3">
					<h6 class="text-white">News & Events</h6>
					<ul class="navbar-nav pt-1">
						<li class="nav-item">
							<a href="register.php">Sign Up for Newsletter</a>
						</li>
						<li class="nav-item">
							<a href="information.php">Blog</a>
						</li>
						<li class="nav-item">
							<a href="help.php">Help Center</a>
						</li>
					</ul>

					<h6 class="pt-4 text-white">Education</h6>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="information.php">Social Media Campaign Programs</a>
						</li>
						<li class="nav-item">
							<a href="information.php">Volunteer Opportunities</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 pt-3">
					<h6 class="text-white">Content Of SMC</h6>
					<ul class="navbar-nav pt-1">
						<li class="nav-item">
							<a href="information.php">Mission</a>
						</li>
						<li class="nav-item">
							<a href="information.php">Vision</a>
						</li>
						<li class="nav-item">
							<a href="information.php">Aims</a>
						</li>
						<li class="nav-item">
							<a href="information.php">Rise of Social Media</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 pt-3">
					<h6 class="text-white">Office</h6>
					<ul class="navbar-nav pt-1">
						<li class="nav-item">
							<a href="contact.php">No. 123, Alanpya Pagoda Road, <br>Dagon Township
								Yangon, Myanmar. <br>(95-1) 8255819 – 21, 8255823
								– 32, 8255834 <br>info@SocialMediaCampaign.com</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Footer2 -->
	<!-- Start Footer3 -->
	<section class="footer3 py-3">
		<div class="container d-flex justify-content-center">
			<div>
				<ul class="footer-icons d-flex mt-2">
					<li>
						<a href="https://www.facebook.com" class="px-2" title="Facebook">
							<i class="fa-brands fa-square-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com" class="px-2" title="Instagram">
							<i class="fa-brands fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com" class="px-2" title="Twitter">
							<i class="fa-brands fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com" class="px-2" title="YouTube">
							<i class="fa-brands fa-youtube"></i>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com" class="px-2" title="Linkedin">
							<i class="fa-brands fa-linkedin"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com" class="px-2" title="Pinterest">
							<i class="fa-brands fa-pinterest"></i>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</section>
	<!-- End Footer3 -->

	<!-- Start Footer4 -->
	<section class="footer4 bg-dark text-center text-white py-2">
		<small class="pt-3">Copyright © 2024 <a href="search.php" class="text-white">SocialMediaCampaign</a> Corporation of UK and SMC
			Corporation. All rights reserved.</small>
	</section>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
	<script src="js/hilight.js"></script>
	<script src="js/script.js"></script>
	<script>
		<?php if (isUserLocked()) { ?>
			var remainingLockoutTime = <?php echo ($_SESSION['login_locked'] - time()) * 1000 ?>;
			setTimeout(() => {
				document.getElementById('username').removeAttribute('disabled');
				document.getElementById('password').removeAttribute('disabled');
				document.getElementById('remember').removeAttribute('disabled');
			}, remainingLockoutTime);
		<?php } ?>
	</script>
</body>

</html>