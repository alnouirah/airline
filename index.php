<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<title>home</title>
</head>
<body id="home">
	<!--***************************Start Header + Navegation Bar***************************-->
	<?php
		if(isset($_SESSION['message'])){
			?>
	<script>
		alert(<?php echo $_SESSION['message'] ?>)
	</script>
			<?php
		}
	?>
	<div class="navbar">
			<a href="#" class="logo">Logo</a>	
				<ul class="links">
					<li class="active"><a href="#home" data-value="home">Home</a></li>
					<li><a href="#services" data-value="services">Services</a></li>
					<li><a href="#trips" data-value="trips">Trips</a></li>
					<li><a href="#contact" data-value="contact">Contact</a></li>
					<?php
					if(isset($_SESSION["name"])){ ?>
						<li><a href="dashboard.php">Dashbaord</a></li>
					<?php
					}
					else{ ?>
						<li><a href="customers/sign_up.php" data-value="">Sign Up</a></li>
					<?php
					}
					?>
					<!-- <li><a href="admin/" data-value="admin">Login</a></li> -->
				</ul>
				<div class="clearfix"></div>
		</div>
		<div class="header">
			<div class="overlay">
					<h2 data-text="Welcome to our site">Welcome to our site</h2>
					<a href="customers/reserve.php" class="btn1">Reserve Now</a>
				</div>
		</div>
	<!--***************************End Header + Navegation Bar***************************-->

	<!--***************************Start Services Section***************************-->
		<div class="services-section" id="services">
		<div class="inner-width">
			<h1 class="section-title">Our Services</h1>
			<div class="border"></div>
				<div class="sercices-container">
					<div class="service-box">
						<div class="service-icon">
							<i class="fas fa-paint-brush"></i>
						</div>
						<div class="service-title">Flexabiliy</div>
						<div class="service-desc">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            			    Doloremque, officia! Necessitatibus delectus sed dicta corrupti
            			    voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
						</div>
					</div>

					<div class="service-box">
						<div class="service-icon">
							<i class="fas fa-braille"></i>
						</div>
						<div class="service-title">Avalibality</div>
						<div class="service-desc">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            			    Doloremque, officia! Necessitatibus delectus sed dicta corrupti
            			    voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
						</div>
					</div>

					<div class="service-box">
						<div class="service-icon">
							<i class="fas fa-calendar-minus"></i>
						</div>
						<div class="service-title">Good Prices</div>
						<div class="service-desc">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            			    Doloremque, officia! Necessitatibus delectus sed dicta corrupti
            			    voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
						</div>
					</div>

					<div class="service-box">
						<div class="service-icon">
							<i class="fas fa-camera"></i>
						</div>
						<div class="service-title">Responsive</div>
						<div class="service-desc">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            			    Doloremque, officia! Necessitatibus delectus sed dicta corrupti
            			    voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
						</div>
					</div>

					<div class="service-box">
						<div class="service-icon">
							<i class="fas fa-cloud"></i>
						</div>
						<div class="service-title">Privacy</div>
						<div class="service-desc">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            			    Doloremque, officia! Necessitatibus delectus sed dicta corrupti
            			    voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
						</div>
					</div>

					<div class="service-box">
						<div class="service-icon">
							<i class="fas fa-cog"></i>
						</div>
						<div class="service-title">Friendly</div>
						<div class="service-desc">
							Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            			    Doloremque, officia! Necessitatibus delectus sed dicta corrupti
            			    voluptatibus, omnis eius vel ab magni nemo, incidunt esse! Quod!
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--***************************End Services Section***************************-->

		<!--***************************Start Break1 Section***************************-->
		<section id="two" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
					<p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
					<h2>Morbi maximus justo</h2>
				</header>
			</div>
		</section>
		<!--***************************End Break1 Section***************************-->

		<!--***************************Start Trips Section***************************-->

		<section class="blog" id="trips" >
		
			<h1 class="heading"> <span>Our</span>  Trips</h1>
			<div class="border2"></div>
			<div class="box-container">
		
				<div class="box">
					<img src="images/img22.jpg" alt="">
					<div class="content">
						<h3 class="info"> <i class="fas fa-paper-plane"></i> The Place <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
						<a href="#" class="title"> The Price is :$200 </a>
						<p>Go book it NOW!</p>
						<a href="#" class="btn2">Reserve Now</a>
					</div>
				</div>
		
				<div class="box">
					<img src="images/img23.jpg" alt="">
					<div class="content">
						<h3 class="info"> <i class="fas fa-paper-plane"></i> The Place <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
						<a href="#" class="title"> The Price is :$300 </a>
						<p>Go book it NOW!</p>
						<a href="#" class="btn2">Reserve Now</a>
					</div>
				</div>
		
				<div class="box">
					<img src="images/img24.jpg" alt="">
					<div class="content">
						<h3 class="info"> <i class="fas fa-paper-plane"></i> The Place <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
						<a href="#" class="title"> The Price is :$400 </a>
						<p>Go book it NOW!</p>
						<a href="#" class="btn2">Reserve Now</a>
					</div>
				</div>
		
				<div class="box">
					<img src="images/img29.jpg" alt="">
					<div class="content">
						<h3 class="info"> <i class="fas fa-paper-plane"></i> The Place <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
						<a href="#" class="title"> The Price is :$500 </a>
						<p>Go book it NOW!</p>
						<a href="#" class="btn2">Reserve Now</a>
					</div>
				</div>
		
				<div class="box">
					<img src="images/img26.jpg" alt="">
					<div class="content">
						<h3 class="info"> <i class="fas fa-paper-plane"></i> The Place <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
						<a href="#" class="title"> The Price is :$600 </a>
						<p>Go book it NOW!</p>
						<a href="#" class="btn2">Reserve Now</a>
					</div>
				</div>
		
				<div class="box">
					<img src="images/img30.jpg" alt="">
					<div class="content">
						<h3 class="info"> <i class="fas fa-paper-plane"></i> The Place <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
						<a href="#" class="title"> The Price is :$700 </a>
						<p>Go book it NOW!</p>
						<a href="#" class="btn2">Reserve Now</a>
					</div>
				</div>
		
			</div>
		</section>
		<!--***************************End Trips Section***************************-->
		
		<!--***************************Start Break2 Section***************************-->
<section class="sub-form text-center" id="eight">

	<div class="container">
		<div class="col-md-12">

			<h3 class="title">Subscribe to our <span class="themecolor"> News letter</span></h3>

			<p class="lead">Lorem ipsum dolor sit amet ne onsectetuer adipiscing elit. Aenean commodo ligula eget dolor
				in tashin ty</p>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3"></div>
			<div class="col-md-6 center-block col-sm-6 ">
				<form id="mc-form">
					<div class="input-group">
						<input type="email" class="form-control" placeholder="Email Address" required id="mc-email">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default">SUBSCRIBE <i class="fa fa-envelope"></i>
							</button>
						</span>
					</div>
					<label for="mc-email" id="mc-notification"></label>
				</form>
			</div>
		</div>
	</div>
</section>
<!--***************************End Break2 Section***************************-->

<!--***************************Start Contact Section***************************-->
<h2 class="contact-header" id="contact">Contact Us</h2>
<div class="border"></div>
<div class="contact-section">
	<div class="contact-info">
		<div><i class="fa fa-comment"></i>airline</div>
		<div><i class="fa fa-at"></i>airline</div>
		<div><i class="fa fa-envelope"></i>airline</div>
		<div><i class="fa fa-phone"></i>+1234656789</div>
	</div>

	<div class="contact-form">

		<form class="contact" action="" method="post"></form>
		<input type="text" name="name" class="text-box" placeholder="Your Name" required>
		<input type="email" name="email" class="text-box" placeholder="Your Email" required>
		<textarea name="message" rows="5" placeholder="Your Massage" required></textarea>
		<input type="submit" name="summit" class="send-button" value="send">
	</div>
</div>
<!--***************************End Contact Section***************************-->

<!--***************************Start Footer Section***************************-->
<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur rerum consectetur architecto ad tempora blanditiis quo aliquid inventore a.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#trips">trips</a>
            <a href="#conntact">contact</a>
            <a href="admin/">login</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">pinterest</a>
            <a href="#">twitter</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p> +123-456-7890 <br> +111-2222-333 </p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> example@gmail.com <br> example@gmail.com </p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> yemen, sana'a - 400104 </p>
            </div>
        </div>

    </div>

    <h1 class="credit"> &copy; copyright @ 2021 by Areej & Rua'a </h1>

</div>
<!--***************************End Footer Section***************************-->

<!--	<script>
		window.addEventListener('scroll', function(){
			let header = document.querySelector('header');
			let windowPosition = window.scrollY > 0;
			header.classList.toggle('scrolling-active', windowPosition);
		})
	</script>-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>