<?php
session_start();
include('./_actions/loginTest.php');
if (!isset($_SESSION['username'])) {
	header("Location: login.php?error=not_loggined");
	exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Streaming</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/livestreaming.css">
	<script src="https://kit.fontawesome.com/27bf763da3.js" crossorigin="anonymous"></script>
</head>

<body id="context">
	<header>
		<nav class="navbar navbar-dark navbar-expand-lg d-flex flex-row py-0 fixed-top">
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
											TouTube</a>
									</li>
									<li>
										<a class="dropdown-item" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i>
											Linkedin</a>
									</li>
									<li>
										<a class="dropdown-item" href="https://www.pinterest.com"><i class="fa-brands fa-square-pinterest"></i>
											Pinterest</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="help.php" class="nav-link">Help</a>
						</li>
						<li class="nav-item">
							<a href="livestreaming.php" class="nav-link active" id="liveLink">Streaming</a>
						</li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link">Contact</a>
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
	</header>
	<div id="banner" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="carousel" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/slider5.png" class="d-block w-100 img-fluid" alt="" />
				<div class="header container text-center">
					<h3 class="" data-aos="fade-up" data-aos-duration="1500">Welcome to Livestreaming Safety Hub!</h3>
				</div>

			</div>
			<div class="carousel-item">
				<img src="img/slider6.jpg" class="d-block w-100 img-fluid" alt="" />
			</div>
			<div class="carousel-item">
				<img src="img/slider3.jpg" class="d-block w-100 img-fluid" alt="" />
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="carousel"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="carousel"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div class="container mb-3" id="stream">
		<div data-aos="zoom-in" data-aos-duration="1500">
			<h1 class="text-center my-4">Live Streaming</h1>
		</div>
		<div class="my-4">
			<div data-aos="zoom-in" data-aos-duration="1500">
				<div class="top"></div>
				<p class="text-center fw-bold ter-font py-3">In today's digital age, livestreaming has become increasingly popular among individuals of all ages. From gaming sessions to educational content and social gatherings, livestreaming offers a unique platform for creativity and connection. However, it's essential to prioritize safety while engaging in this online activity. <br>Here, you'll find valuable information and tips to ensure your livestreaming experiences are enjoyable, secure, and responsible.</p>
				<div class="top"></div>
			</div>

		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
						<div class="card border-0 ">
							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="100%" height="550" class="embed-responsive-item" src="https://www.youtube.com/embed/x9ZZS1v11Sc?si=Thc1PpnHYxrzP8xG&mute=1" title="YouTube video player" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div data-aos="zoom-in" data-aos-duration="1500">
			<div class="d-flex justify-content-center align-items-center my-4">
				<div class="top w-25 "></div>
				<h1 class="text-center px-4">Benefits</h1>
				<div class="top w-25 "></div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">

							<iframe width="100%" height="350" src="https://www.youtube.com/embed/mpBXUGoM0VA?si=6dkN29SLRDBGluhK&mute1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

							<div class="accordion" id="accordionExample1">
								<div class="accordion-item rounded-0 ">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											<strong>Understanding Livestreaming</strong>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
										<div class="accordion-body">
											<p>Livestreaming has transformed digital engagement by allowing individuals to broadcast real-time video content across the internet. <br><br>It's a versatile tool, enabling everything from sharing gaming adventures to hosting virtual events and educational tutorials. <br><br> It fosters dynamic interactions with audiences, offering immediate engagement and feedback. Its real-time nature creates a sense of immediacy and intimacy, enhancing the overall viewer experience and enabling authentic connections between content creators and their audience.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">

							<iframe width="100%" height="350" src="https://www.youtube.com/embed/jHWeRPdsD5k?si=1fI5LmKyDT1Ftj51&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<strong>Benefits of Livestreaming
											</strong>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p>The benefits of livestreaming are multifaceted. Beyond simply broadcasting content, livestreaming facilitates community engagement, allowing creators to interact directly with their audience in real-time. <br><br>It's a powerful tool for expanding reach and building a personal brand, as it offers an immersive and interactive experience that fosters deeper connections between broadcasters and viewers. <br><br> Livestreaming transcends traditional content consumption, offering a dynamic platform for storytelling, collaboration, and audience participation.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div data-aos="zoom-in" data-aos-duration="1500">
				<div class="my-4">
					<div class="d-flex justify-content-center align-items-center">
						<div class="top w-25 "></div>
						<h1 class="text-center px-4">Safe Environment</h1>
						<div class="top w-25 "></div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">
							<iframe width="100%" height="350" src="https://www.youtube.com/embed/mwuDgO6aQ3E?si=RK77llMrL3DDX55d&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<strong>Choosing the Right Platform
											</strong>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p>Selecting the right livestreaming platform is a pivotal decision that directly impacts the success of your livestreams. <br><br> Audience demographics play a significant role, as different platforms attract distinct user bases with varying interests and behaviors. <br><br> Moreover, understanding each platform's content policies, moderation tools, and privacy settings is essential for maintaining a safe and positive environment for both creators and viewers. <br><br> You can fulfill and effective livestreaming experience by carefully evaluating these factors.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">
							<iframe width="100%" height="350" src="https://www.youtube.com/embed/IRbWX9MfSas?si=x23zOJZ8r8IQaxyc&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<strong>Creating a Safe Environment
											</strong>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p>Safety is paramount in livestreaming environments and secure online experience for both creators and audiences alike. <br><br> Establishing clear guidelines and boundaries for your livestreams helps create a safe and welcoming space for both creators and viewers. <br><br>Measures should be implemented to prevent harassment, cyberbullying, and inappropriate behavior, and viewers should be empowered to report any concerns promptly. <br><br> By prioritizing safety and well-being, creators can foster a positive and respectful environment that enhances the overall livestreaming experience.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div data-aos="zoom-in" data-aos-duration="1500">
				<div class="d-flex justify-content-center align-items-center my-4">
					<div class="top w-25 "></div>
					<h1 class="text-center px-4">Boundaries</h1>
					<div class="top w-25 "></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">
							<iframe width="100%" height="350" src="https://www.youtube.com/embed/XFAEeOd3H9k?si=6JD8TGsoiPTN9P1p&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<strong>Setting Healthy Boundaries
											</strong>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p> Maintaining boundaries is crucial for safeguarding privacy and controlling the dissemination of personal information during livestreams. Creators should carefully consider what information they're comfortable sharing online and establish clear guidelines for interacting with viewers. By setting boundaries and communicating them effectively, creators can maintain control over their livestreaming content and ensure a positive and respectful environment for all participants.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">
							<iframe width="100%" height="350" src="https://www.youtube.com/embed/SP8c53QYhYE?si=8vfysrhnay2llvFA&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											<strong>Interacting with Viewers
											</strong>
										</button>
									</h2>
									<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p>Interacting with viewers is not only a fundamental aspect of livestreaming but also a cornerstone of building a strong and loyal community. Engaging with viewers through comments, questions, and feedback not only fosters a sense of connection but also creates a more interactive and immersive experience for everyone involved. By actively responding to viewer input, creators can establish rapport, address concerns, and even tailor content to better meet the needs and preferences of their audience.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div data-aos="zoom-in" data-aos-duration="1500">
				<div class="d-flex justify-content-center align-items-center my-4">
					<div class="top w-25 "></div>
					<h1 class="text-center px-4">Educate</h1>
					<div class="top w-25 "></div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">
							<iframe width="100%" height="350" src="https://www.youtube.com/embed/_smPY3mPwpU?si=9XoVq9PLfuDcTtmP&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											<strong>Reporting and Response Procedures
											</strong>
										</button>
									</h2>
									<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p>Establishing clear reporting and response procedures is not only crucial but also proactive in ensuring a safe and inclusive livestreaming environment. By providing viewers with accessible channels to report any instances of inappropriate behavior or violations, creators can swiftly address concerns and maintain the integrity of their community. Encouraging viewers to report promptly empowers them to take an active role in upholding community standards, fostering a sense of ownership and accountability among participants.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-6 col-md-12">
				<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
					<div class="card border-0">
						<div class="card-body">
							<iframe width="100%" height="350" src="https://www.youtube.com/embed/oDnCW6Jz47U?si=QJJM0dtsloqbk6O_&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

							<div class="accordion mt-0 " id="accordionExample2">
								<div class="accordion-item rounded-0">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
											<strong>Educating Your Audience
											</strong>
										</button>
									</h2>
									<div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											<p> Educating your audience about responsible livestreaming practices and online safety guidelines serves as a cornerstone for creating a positive and secure livestreaming environment. By sharing valuable resources, practical tips, and insightful information on topics ranging from digital literacy to privacy protection and cyberbullying prevention, creators empower their viewers to navigate livestreaming platforms with confidence and responsibility. This proactive approach equips viewers with the knowledge and tools they need to stay safe online.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 mt-3">
				<div data-aos="zoom-in" data-aos-duration="1500">
					<h3 class="text-center mb-4">
						Search More!
					</h3>
				</div>
				<div class="d-flex justify-content-center">
					<div class="spinner-border mb-3 d-none" role="status" id="loading-spinner"></div>
				</div>
				<div class="d-flex justify-content-center mb-3">
					<span class="h5 d-none" id="spinner-text">Loading...</span>
				</div>
				<div data-aos="zoom-in" data-aos-duration="1500">
					<form id="search-form" action="#" method="GET" class="d-flex justify-content-center ">
						<div class="col-lg-6 col-md-12">
							<div class="input-group mb-5">
								<input type="text" id="search-input" class="form-control" placeholder="Search here ..." />
								<div class="input-group-append">
									<button class="btn bg-secondary" type="submit" id="search-button">
										<i class="fa-solid fa-magnifying-glass text-white" title="Search"></i>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>


				<div id="search-results" class="row mt-3"></div>
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
							<a href="livestreaming.php" id="live1Link" class="active here">Live Streaming</a>
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
						<li class="nav-item">
							<a href="help.php">Health</a>
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
		<small class="pt-3">Copyright © 2024
			<a href="search.php" class="text-white">SocialMediaCampaign</a>
			Corporation of UK and SMC Corporation. All rights
			reserved.</small>
	</section>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
	<script src="js/hilight.js"></script>
	<script src="js/streaming.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>