<?php
session_start();
include('./_actions/loginTest.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Help</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/help.css" />
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
									<li>
										<a class="dropdown-item" href="search.php">
											Search Popular SMA <i class="fa-solid fa-angles-right"></i></a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="help.php" class="nav-link active" id="helpLink">Help</a>
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
	</header>
	<div id="banner" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="carousel" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/slider3.jpg" class="d-block w-100 img-fluid" alt="" />
				<div class="header container text-center">
					<h3 class="" data-aos="fade-up" data-aos-duration="1500">
						How Parents Can Help
					</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/slider2.jpg" class="d-block w-100 img-fluid" alt="" />
			</div>
			<div class="carousel-item">
				<img src="img/slider1.jpg" class="d-block w-100 img-fluid" alt="" />
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
	<!-- Start Help -->
	<section class="product container mt-5" id="help">
		<div class="col-lg-12">
			<div data-aos="zoom-in" data-aos-duration="1500">
				<div class="my-4">
					<div class="d-flex justify-content-center align-items-center">
						<div class="top w-25 "></div>
						<h2 class="text-center px-4">We support healthy teen social media use</h2>
						<div class="top w-25 "></div>
					</div>
				</div>
			</div>
		</div>

		<div class="row g-3 row-cols-md-2 my-4">
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help1.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Communication</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample1">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									<strong>Open Communication Channels</strong>
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<p>
										Building open and honest communication
										channels with your teen regarding their
										social media usage is crucial. <br />
										<br />
										Creating a supportive environment where
										they feel safe discussing their online
										experiences and concerns fosters trust
										and understanding. <br />
										<br />Letting them know they can turn to
										you with any questions or issues they
										encounter while navigating the digital
										world reinforces your role as a
										supportive and approachable parent.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help5.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Boundaries</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample2">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<strong>Set Clear Boundaries</strong>
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
								<div class="accordion-body">
									<p>
										Establishing clear rules and boundaries
										for social media usage sets expectations
										and promotes responsible online
										behavior.<br />
										<br />
										Limiting screen time, defining
										appropriate content, and outlining
										guidelines for interacting with
										strangers online help your teen
										understand the importance of digital
										safety.<br />
										<br />
										Consistently enforcing these rules and
										discussing the reasons behind them
										reinforces accountability and helps your
										teen make informed decisions online.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help6.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Lead</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample3">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<strong>Lead by Example</strong>
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
								<div class="accordion-body">
									<p>
										Being a positive role model by
										demonstrating responsible social media
										behavior yourself sets a powerful
										example for your teen. <br />
										<br />By modeling behaviors such as
										respectful communication, thoughtful
										content sharing, and healthy screen time
										habits, you teach your teen how to
										navigate social media mindfully and
										respectfully.<br />
										<br />
										Your actions speak louder than words,
										and leading by example reinforces the
										values you want your teen to adopt.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div data-aos="zoom-in" data-aos-duration="1500">
					<div class="my-4">
						<div class="d-flex justify-content-center align-items-center">
							<div class="top w-25 "></div>
							<h2 class="text-center px-4">Educate, Encourage & Teach</h2>
							<div class="top w-25 "></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help4.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Educate</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample3">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<strong>Educate on Privacy Settings</strong>
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
								<div class="accordion-body">
									<p>
										Teaching your teen how to adjust privacy
										settings on their social media accounts
										empowers them to control their online
										presence.<br />
										<br />
										Emphasizing the importance of protecting
										their privacy and highlighting the
										potential risks associated with
										oversharing personal information
										educates your teen about online
										safety.<br />
										<br />
										Providing guidance on privacy settings
										helps your teen understand how to
										safeguard their personal information and
										maintain control over their digital
										footprint.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help3.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Encourage</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample3">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<strong>Encourage Offline Activities</strong>
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample5	">
								<div class="accordion-body">
									<p>
										Encouraging your teen to engage in
										offline activities and hobbies helps
										them maintain a healthy balance between
										their online and real-life
										experiences.<br />
										<br />
										Promoting face-to-face interactions with
										friends and family, outdoor activities,
										and other interests reduces screen time
										and fosters personal growth. <br />
										<br />Encouraging offline activities
										allows your teen to disconnect from the
										digital world and develop important life
										skills beyond their screens.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help7.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Teach</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample6">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									<strong>Teach Critical Thinking Skills</strong>
								</button>
							</h2>
							<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
								<div class="accordion-body">
									<p>
										Equipping your teen with critical
										thinking skills empowers them to
										navigate the vast amount of information
										available online responsibly. <br />
										<br />Teaching them to question content,
										fact-check sources, and recognize
										potential online dangers such as
										misinformation and scams enhances their
										digital literacy. <br />
										<br />By instilling critical thinking
										skills, you help your teen become a
										discerning consumer of online
										information and protect them from
										falling victim to online threats.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div data-aos="zoom-in" data-aos-duration="1500">
					<div class="my-4">
						<div class="d-flex justify-content-center align-items-center">
							<div class="top w-25 "></div>
							<h2 class="text-center px-4">Monitor, Cyberbullying & Stay Updated</h2>
							<div class="top w-25 "></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help8.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Monitor</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample7">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									<strong>Monitor Activity</strong>
								</button>
							</h2>
							<div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
								<div class="accordion-body">
									<p>
										Staying informed about your teen's
										social media activity through regular
										monitoring is essential for ensuring
										their online safety.<br />
										<br />
										Utilizing parental control tools or
										software allows you to track their
										online behavior and address any
										concerning patterns or issues.<br />
										<br />
										Monitoring for excessive screen time,
										inappropriate content, or signs of
										cyberbullying enables you to intervene
										and provide support when needed,
										promoting a safer online experience for
										your teen.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img//help9.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Cyberbullying</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample7">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
									<strong>Address Cyberbullying</strong>
								</button>
							</h2>
							<div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
								<div class="accordion-body">
									<p>
										Having open discussions about
										cyberbullying and providing support if
										your teen encounters bullying behavior
										online is essential.<br />
										<br />
										Teaching them strategies to cope with
										cyberbullying, such as blocking or
										reporting offenders and seeking help
										from trusted adults or online support
										resources, empowers them to respond
										effectively.<br />
										<br />
										Addressing cyberbullying head-on and
										offering guidance and support
										demonstrates your commitment to your
										teen's well-being and safety online.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">
				<div data-aos="fade-up" data-aos-duration="2000">
					<div class="card">
						<a href="#" class="card-link">
							<img src="img/help2.jpg" class="card-img-top img-fluid" alt="" />
							<h3><strong>Stay Updated</strong></h3>
						</a>
					</div>
					<div class="accordion" id="accordionExample7">
						<div class="accordion-item rounded-0">
							<h2 class="accordion-header">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
									<strong>Stay Updated and Stay Engaged</strong>
								</button>
							</h2>
							<div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
								<div class="accordion-body">
									<p>
										Remaining informed about the latest
										social media trends, apps, and safety
										features enables you to better support
										your teen in their online activities.<br />
										<br />
										Engaging in regular discussions about
										their favorite platforms, interests, and
										online friends helps you stay connected
										to their digital world.<br />
										<br />
										Showing genuine interest in their online
										activities and offering guidance and
										support as needed strengthens your
										relationship with your teen and promotes
										a safer and more positive online
										experience.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Help -->
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
							<a href="help.php" id="help1Link" class="active here">Help</a>
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
		<small class="pt-3">Copyright © 2024
			<a href="search.php" class="text-white">SocialMediaCampaign</a>
			Corporation of UK and SMC Corporation. All rights
			reserved.</small>
	</section>

	<!-- Bootstrap JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
	<script src="js/hilight.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>