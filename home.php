<?php
session_start();
include('./_actions/loginTest.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Home Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/home.css" />
	<script src="https://kit.fontawesome.com/27bf763da3.js" crossorigin="anonymous"></script>

</head>

<body id="context">
	<!-- Start Navbar -->
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
							<a class="nav-link active" id="homeLink" href="home.php">Home</a>

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
							<a href="livestreaming.php" class="nav-link">Streaming</a>
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
		<div id="banner" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="carousel" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/slider4.jpg" class="d-block w-100 img-fluid" alt="" />
					<div class="header container text-center">
						<h3 class="" data-aos="fade-up" data-aos-duration="1500">Welcome to SMC!</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/slider1.jpg" class="d-block w-100 img-fluid" alt="" />
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

		<?php if (isset($_SESSION['success_message'])) { ?>
			<div id="toastContainer" class="position-fixed top-0 end-0 p-3 custom-z-index">
				<div id="toast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="d-flex">
						<div class="toast-body">
							<?= $_SESSION['success_message'] ?>
						</div>
						<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
				</div>
			</div>
		<?php } ?>
	</header>
	<!-- End Navbar -->

	<div class="flip-main mt-4">
		<div class="container">
			<div data-aos="zoom-in" data-aos-duration="1500">
				<h2 class="title text-center mb-4">Most Popular Social Media Apps</h2>
			</div>

			<div class="row ">
				<!-- flip card start -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div data-aos="fade-right" data-aos-duration="2000">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="img/sma1.jpeg" alt="flip-card" />
								</div>
								<div class="flip-card-back bg-dark">
									<div class="text">
										<h3>Facebook</h3>
										<p class="my-3">Facebook, founded in 2004 by Mark Zuckerberg and his college roommates, is one of the oldest and most widely used social media platforms globally. Initially designed for college students, it quickly expanded to encompass users of all ages and backgrounds.</p>
										<a href="search.php">
											<button type="button" class="btn btn-outline-info text-white">Read More</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- flip card end -->
				<!-- flip card start -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div data-aos="fade-up" data-aos-duration="2000">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="img/sma3.jpeg" alt="flip-card" />
								</div>
								<div class="flip-card-back bg-dark">
									<div class="text">
										<h3>Instagram</h3>
										<p class="my-3">Instagram, acquired by Facebook in 2012, is a visual-centric social media platform focused on sharing photos and videos. Launched in 2010, it rapidly gained popularity for its visually appealing interface and intuitive design.</p>
										<a href="search.php">
											<button type="button" class="btn btn-outline-info text-white">Read More</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- flip card end -->
				<!-- flip card start -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div data-aos="fade-left" data-aos-duration="2000">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="img/sma4.jpeg" alt="flip-card" />
								</div>
								<div class="flip-card-back bg-dark">
									<div class="text">
										<h3>Twitter</h3>
										<p class="my-3">Twitter, founded in 2006, is a microblogging platform that enables users to share short text-based posts called "tweets." With its character limit of 280 characters per tweet (formerly 140 characters), Twitter is known for its real-time updates and rapid dissemination of information.</p>
										<a href="search.php">
											<button type="button" class="btn btn-outline-info text-white">Read More</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- flip card end -->
			</div>
		</div>
	</div>
	<!-- 3D cards -->

	<div class="container mb-3">
		<div data-aos="zoom-in" data-aos-duration="1500">
			<h2 class="title text-center">Risks of Social Media</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div data-aos="flip-up" data-aos-duration="2000">
					<div class="card3D">
						<div class="img-container">
							<img src="./img/risk1.jpeg" alt="Card Image" />
						</div>
						<div class="card-details">
							<h2 class="text-danger">Mental Health Issues</h2>
							<p>Excessive use of social media has been linked to various mental health issues among teenagers, including anxiety, depression, loneliness, and poor body image. Constant comparison to others' seemingly perfect lives and the pressure to gain likes and followers can contribute to feelings of inadequacy and dissatisfaction.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div data-aos="flip-up" data-aos-duration="2300">
					<div class="card3D">
						<div class="img-container">
							<img src="./img/risk2.jpeg" alt="Card Image" />
						</div>
						<div class="card-details">
							<h2 class="text-danger">Privacy Concerns</h2>
							<p>Teenagers may not fully understand the implications of sharing personal information and photos online, making them vulnerable to privacy breaches and identity theft. Oversharing on social media can expose teenagers to risks such as stalking, cyberstalking, and online harassment, especially if they interact with strangers or accept friend requests from unknown individuals.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div data-aos="flip-up" data-aos-duration="2600">
					<div class="card3D">
						<div class="img-container">
							<img src="./img/risk3.jpeg" alt="Card Image" />
						</div>
						<div class="card-details">
							<h2 class="text-danger">Cyberbullying</h2>
							<p>One of the most significant risks of social media is cyberbullying, which involves using digital communication to harass, threaten, or intimidate others. Teenagers may experience cyberbullying through hurtful comments, spreading rumors, or sharing embarrassing photos or videos, leading to psychological distress, low self-esteem, and even suicidal thoughts.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End 3D cards -->

	<!-- Start stay safe -->
	<section class="product container">
		<div data-aos="zoom-in" data-aos-duration="1500">
			<h2 class="title text-center">How To Stay Safe Online</h2>
		</div>

		<div class="row g-3 row-cols-md-2 my-4">
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
					<div class="card">
						<a href="search.php" class="card-link">
							<img src="img/safe1.jpg" class="card-img-top" alt="" />
							<h3><strong>Understand</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample1">
						<div class="accordion-item rounded-0 ">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									<strong>Understanding Social Media Risks</strong>
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<p>With the rapid evolution of social media platforms, it's crucial for teenagers to comprehend the potential risks they may encounter online. From cyberbullying to privacy breaches, navigating the digital realm requires awareness and vigilance. Equip yourself with knowledge to navigate the virtual world safely.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1300">
					<div class="card">
						<a href="search.php" class="card-link">
							<img src="img/safe2.jpeg" class="card-img-top" alt="" />
							<h3><strong>Empower</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample2">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<strong>Empowering Teens with Knowledge</strong>
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
								<div class="accordion-body">
									<p>Our campaign aims to empower teenagers with the knowledge and tools they need to navigate social media safely. Through informative resources, interactive sessions, and community support, we're equipping teens with the skills to make informed decisions online.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600">
					<div class="card">
						<a href="search.php" class="card-link">
							<img src="img/safe3.jpg" class="card-img-top" alt="" />
							<h3><strong>Join</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample3">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<strong>Join the Movement</strong>
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
								<div class="accordion-body ">
									<p> Become a part of our mission to create a safer online environment for teenagers. By joining our community, you'll gain access to exclusive content, expert advice, and a supportive network dedicated to promoting digital well-being. Take the first step towards a safer digital future today.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Products -->
	<div class="container">
		<div class="row">
			<div class="card col-lg-6 border-0 col-md-12 my-2">
				<div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
					<h2 class="title text-center mb-3">See The Date?</h2>
					<p class="text-center fw-bold mb-4">Stay up-to-date with our latest events, workshops, and webinars by checking out our calendar. Mark your calendars and join us!</p>

					<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FYangon&bgcolor=%23ffffff&showTitle=0&src=aHRvb3cyNDNAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ubW0jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" height="400" width="100%" frameborder="0" scrolling="no" class="border"></iframe>

				</div>

			</div>
			<div class="card col-lg-6 border-0 col-md-12 my-2">
				<div data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
					<h2 class="title text-center mb-3">Get In Touch?</h2>
					<p class="text-center fw-bold mb-4">Whether you're seeking support, attending an event, or simply want to learn more about our campaign, we're here for you. Visit us today!</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15480176.029745288!2d85.98857812218613!3d18.693596926512967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305652a7714e2907%3A0xba7b0ee41c622b11!2sMyanmar%20(Burma)!5e0!3m2!1sen!2smm!4v1712235767913!5m2!1sen!2smm" height="400" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="container mb-5 my-3">
		<div data-aos="zoom-in" data-aos-duration="1500">
			<h2 class="title text-center my-4">Stay Informed About Weather!</h2>
		</div>
		<a data-aos="zoom-out" data-aos-duration="1500" class="weatherwidget-io container" href="https://forecast7.com/en/21d9295d96/myanmar-burma/" data-label_1="MYANMAR (BURMA)" data-label_2="WEATHER" data-theme="original">MYANMAR (BURMA) WEATHER
		</a>
	</div>

	<!-- Start Footer2 -->
	<section class="footer2 bg-dark pt-4 pb-5 px-3">
		<div class="container">
			<div class="row row-cols-md-2 row-cols-sm-2">
				<div class="col-lg-3 pt-3">
					<h6 class="text-white">Quick Links</h6>
					<ul class="navbar-nav pt-1">
						<li class="nav-item">
							<a href="home.php" id="home1Link" class="active here">Home</a>
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
		<small class="pt-3">Copyright © 2024 <a href="search.php" class="text-white">SocialMediaCampaign</a> Corporation of UK and SMC
			Corporation. All rights reserved.</small>
	</section>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
	<script src="js/hilight.js"></script>
	<script>
		!(function(d, s, id) {
			var js,
				fjs = d.getElementsByTagName(s)[0];
			if (!d.getElementById(id)) {
				js = d.createElement(s);
				js.id = id;
				js.src = "https://weatherwidget.io/js/widget.min.js";
				fjs.parentNode.insertBefore(js, fjs);
			}
		})(document, "script", "weatherwidget-io-js");
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const toastEl = document.getElementById('toast');
			if (toastEl !== null) {
				const toast = new bootstrap.Toast(toastEl);
				toast.show();
				<?php unset($_SESSION['success_message']); ?>
			}
		});
	</script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>