<?php
session_start();
include('./_actions/loginTest.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Guidance</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/guidance.css" />
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
							<a href="information.php" class="nav-link" id="infoLink">Information</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="search.php" id="navbarDropdown searchLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Popular SMA
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<ul>
									<li>
										<a class="dropdown-item" href="search.php"><i class="fa-brands fa-square-facebook"></i>
											Facebook</a>
									</li>
									<li>
										<a class="dropdown-item" href="search.php"><i class="fa-brands fa-square-instagram"></i>
											Instagram</a>
									</li>
									<li>
										<a class="dropdown-item" href="search.php"><i class="fa-brands fa-square-twitter"></i>
											Twitter</a>
									</li>
								</ul>
								<div class="vr mx-3"></div>
								<ul>
									<li>
										<a class="dropdown-item" href="search.php"><i class="fa-brands fa-square-youtube"></i>
											TouTube</a>
									</li>
									<li>
										<a class="dropdown-item" href="search.php"><i class="fa-brands fa-linkedin"></i>
											Linkedin</a>
									</li>
									<li>
										<a class="dropdown-item" href="search.php"><i class="fa-brands fa-square-pinterest"></i>
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
							<a href="guidance.php" class="nav-link active" id="guideLink">Guidance</a>
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
				<img src="img/slider7.jpg" class="d-block w-100 img-fluid" alt="" />
				<div class="header container text-center">
					<h3 class="" data-aos="fade-up" data-aos-duration="1500">
						Legislation and Guidance
					</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/slider3.jpg" class="d-block w-100 img-fluid" alt="" />
			</div>
			<div class="carousel-item">
				<img src="img/slider6.jpg" class="d-block w-100 img-fluid" alt="" />
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
	<!-- Start Information -->
	<div class="info container my-4" id="info">
		<div class="text-center">
			<h2 class="title mt-3">
				Make Protection
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">GDPR</h2>
					<p class="pt-3">
						GDPR is a comprehensive data protection law enacted by the European Union (EU) to safeguard the privacy and personal data of individuals within the EU and the European Economic Area (EEA).
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/guide1.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<strong>General Data Protection Regulation (GDPR)</strong>
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									It establishes strict guidelines for the collection, processing, and storage of personal data by businesses and organizations, aiming to enhance data protection rights and ensure transparency in data processing practices. <br><br> GDPR requires organizations to obtain explicit consent from individuals before collecting their personal information, and it imposes strict penalties for non-compliance, including hefty fines of up to €20 million or 4% of global annual turnover, whichever is higher. <br><br> As such, GDPR represents a landmark regulation that sets a global standard for data protection and privacy rights, reshaping the way businesses and organizations handle personal data in the digital age.


								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">FERPA</h2>
					<p class="pt-3">
						FERPA is a federal law in the United States designed to protect the privacy of student education records. FERPA serves as a crucial safeguard for the privacy of student education records across various educational institutions, including schools, colleges, and universities.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/guide2.png" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<strong>Family Educational Rights and Privacy Act (FERPA)</strong>
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									It grants parents certain rights regarding their children's educational records, including the right to inspect and review records, request corrections, and control the disclosure of personal information. <br><br>FERPA applies to all educational institutions that receive federal funding, including public schools, colleges, and universities. Under FERPA, educational institutions must obtain written consent from parents before disclosing students' personally identifiable information to third parties. <br><br>FERPA embodies a commitment to upholding the fundamental principles of privacy and confidentiality in the educational landscape, fostering trust and integrity in the handling of student records.


								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<h2 class="title mt-3">
					Make Guidelines
				</h2>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">DMCA</h2>
					<p class="pt-3">
						The Digital Millennium Copyright Act (DMCA) is a U.S. copyright law enacted to address the challenges of copyright protection and enforcement in the digital age.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/guide3.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<strong>Digital Millennium Copyright Act (DMCA)</strong>
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									It provides a legal framework for online service providers (OSPs) and copyright owners to address copyright infringement on the internet. <br><br>The DMCA includes provisions for OSPs to qualify for safe harbor protection from liability for copyright infringement committed by their users, provided they promptly respond to takedown notices from copyright owners. <br><br> Additionally, the DMCA establishes mechanisms for copyright owners to protect their works online through notice and takedown procedures, enabling them to request the removal of infringing content from websites and online platforms.

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">Guidelines</h2>
					<p class="pt-3">
						These guidelines offer valuable recommendations for individuals and organizations to navigate social media platforms responsibly and ethically.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/info3.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<strong>Best Practice Guidelines for Social Media Use</strong>
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									They cover a range of topics, including privacy protection, content moderation, online etiquette, and fostering positive engagement with followers. <br><br> By following these guidelines, users can cultivate a safer and more constructive online environment while minimizing the risks associated with social media use, such as privacy breaches, cyberbullying, and misinformation dissemination. <br><br>Furthermore, adhering to best practices helps mitigate the negative impact of harmful online behaviors, such as cyberbullying and harassment, by promoting empathy and understanding among users.

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<h2 class="title mt-3">
					Stay Safe
				</h2>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">Safe</h2>
					<p class="pt-3">
						Safer Internet Day is an annual global initiative aimed at promoting awareness and fostering a safer and more responsible online environment, particularly for children and young people.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/guide4.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<strong>Safer Internet Day Campaign</strong>
							</button>
						</h2>
						<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									Held every February, Safer Internet Day brings together various stakeholders, including governments, educators, parents, and industry leaders, to raise awareness about online safety issues and promote positive online behaviors. <br><br> Through educational events, workshops, and campaigns, Safer Internet Day encourages individuals to become more informed about online risks and empowers them to adopt safer online practices. <br><br> The campaign emphasizes the importance of digital literacy, critical thinking, and respectful online behavior to create a better internet for all users.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">FTC</h2>
					<p class="pt-3">
						The FTC provides guidelines for influencers and brands engaged in influencer marketing to ensure transparency and consumer protection.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/guide5.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								<strong>Federal Trade Commission (FTC) Guidelines</strong>
							</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									These guidelines require influencers to clearly disclose their relationships with brands when endorsing or promoting products or services on social media platforms. <br><br> Disclosure must be clear, conspicuous, and easily understood by consumers, using terms such as "advertisement," "sponsored," or "paid partnership." The FTC aims to prevent deceptive advertising practices and maintain consumer trust by promoting honesty campaigns. <br><br>Failure to comply with FTC guidelines may result in legal consequences, including fines and penalties for violating consumer protection laws.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<h2 class="title mt-3">
					Policies & Guidelines
				</h2>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">Policies</h2>
					<p class="pt-3">
						Many schools and educational institutions have implemented social media policies to regulate the use of social media by students, teachers, and staff members.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/info1.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								<strong>Social Media Policies for Schools and Educational Institutions</strong>
							</button>
						</h2>
						<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									In addition to outlining acceptable use and privacy protections, these policies often incorporate proactive measures to foster responsible digital citizenship among students and staff. <br><br>They often include provisions for safeguarding student privacy, promoting responsible digital citizenship, and preventing cyberbullying and online harassment.<br><br>By establishing clear rules and expectations, social media policies help educational institutions mitigate risks associated with social media use and create a safer online environment conducive to learning and collaboration.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mt-5 mb-4">
				<div class="card transition">
					<h2 class="transition">Guidelines</h2>
					<p class="pt-3">
						Various organizations and authorities offer guidelines and resources to help parents and caregivers navigate the complexities of raising children in the digital age.
					</p>
					<!-- <div class="cta-container transition">
						<a href="#" class="cta">Read More</a>
					</div> -->
					<div class="card_circle transition">
						<img src="img/help9.jpg" class="card_image" alt="" />
					</div>
				</div>
				<div class="accordion" id="accordionExample3">
					<div class="accordion-item rounded-0">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								<strong>Guidelines for Parents and Caregivers</strong>
							</button>
						</h2>
						<div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
							<div class="accordion-body">
								<p>
									These guidelines cover a range of topics, including setting parental controls on devices and online platforms, monitoring children's online activity, promoting digital literacy and critical thinking skills, and fostering open communication about online experiences. <br><br> By following these guidelines, parents can empower their children to make responsible choices online, navigate potential risks, and develop healthy digital habits. <br><br> Open communication and active parental involvement play crucial roles in supporting children's safe and positive engagement with digital technology.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- End Information -->

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
							<a href="guidance.php" id="guide1Link" class="active here">Guidance</a>
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
			<!-- <div>
					<div id="currentFooterPage" class=""></div>
				</div> -->

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