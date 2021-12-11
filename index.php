<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Index</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	</head>

	<body>
		<div class="super_container">

			<!-- Header -->
			<header class="header d-flex flex-row">
				<div class="header_content d-flex flex-row align-items-center">

					<!-- Logo -->
					<div class="logo_container">
						<div class="logo">
							<img src="images/logoandea.png" alt="">
							<span></span>
						</div>
					</div>

					<!-- Main Navigation -->
					<nav class="main_nav_container">
						<div class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">Inicio</a></li>
								<li class="main_nav_item"><a href="Cursos.php">Cursos</a></li>
								<li class="main_nav_item"><a href="Maestros.php">Docentes</a></li>
								<li class="main_nav_item"><a href="Publicaciones.php">Publicaciones</a></li>
								<?php
									session_start();
									if(isset($_SESSION['roles_idroles'])){
										if($_SESSION['roles_idroles'] == 2){
											echo "<li class='main_nav_item'><a href='panel.php'>Mi Panel</a></li>";
										}elseif($_SESSION['roles_idroles'] == 3) {
											echo "<li class='main_nav_item'><a href='Crear Curso.php'>Mi Panel</a></li>";
										}

									}
								?>	
							</ul>
						</div>
					</nav>
				</div>

				<?php
					session_start();
					if (isset($_SESSION['roles_idroles'])) {
						echo "<div class='header_side d-flex flex-row justify-content-center align-items-center color: cornsilk;'>";
						echo "<li class='main_nav_item' color: cornsilk; ><a href='controller/closeSesion.php'>Cerrar sesion</a></li>";
						echo "</div>";
 					}else{
						echo "<div class='header_side d-flex flex-row justify-content-center align-items-center color: cornsilk;'>";
						echo "<li class='main_nav_item' color: cornsilk; ><a href='login.php'>Iniciar sesion</a></li>";
						echo "</div>";
					}
				?>

				<!-- Hamburger -->
				<div class="hamburger_container">
					<i class="fas fa-bars trans_200"></i>
				</div>

			</header>
	
			<!-- Menu -->
			<div class="menu_container menu_mm">

			<!-- Menu Close Button -->
			<div class="menu_close_container">
				<div class="menu_close"></div>
			</div>

			<!-- Menu Items -->
			<div class="menu_inner menu_mm">
				<div class="menu menu_mm">
					<ul class="menu_list menu_mm">
						<li class="menu_item menu_mm"><a href="index.php">Inicio</a></li>
						<li class="menu_item menu_mm"><a href="Cursos.php">Cursos</a></li>
						<li class="menu_item menu_mm"><a href="Maestros.php">Docentes</a></li>
						<li class="menu_item menu_mm"><a href="Publicaciones.php">Publicaciones</a></li>
						<li class="menu_item menu_mm"><a href="login.php">Iniciar sesion</a></li>
					</ul>
				</div>
			</div>
		</div>
	
		<!-- Home -->
		<div class="home">

			<!-- Hero Slider -->
			<div class="hero_slider_container">
				<div class="hero_slider owl-carousel">
				
					<!-- Hero Slide -->
					<div class="hero_slide">
						<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
						<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
							<div class="hero_slide_content text-center">
								<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">ANDEA UNIMAG!</h1>
							</div>
						</div>
					</div>
				
					<!-- Hero Slide -->
					<div class="hero_slide">
						<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
						<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
							<div class="hero_slide_content text-center">
								<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Inicia un nuevo dia!</h1>
							</div>
						</div>
					</div>
				
					<!-- Hero Slide -->
					<div class="hero_slide">
						<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
						<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
							<div class="hero_slide_content text-center">
								<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Encuentra nuevos cursos</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="hero_boxes">
			<div class="hero_boxes_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 hero_box_col">
							<div class="hero_box d-flex flex-row align-items-center justify-content-start">
								<img src="images/earth-globe.svg" class="svg" alt="">
								<div class="hero_box_content">
									<h2 class="hero_box_title">Cursos online</h2>
									<a href="courses.html" class="hero_box_link">Ver más</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 hero_box_col">
							<div class="hero_box d-flex flex-row align-items-center justify-content-start">
								<img src="images/books.svg" class="svg" alt="">
								<div class="hero_box_content">
									<h2 class="hero_box_title">Documentos</h2>
									<a href="courses.html" class="hero_box_link">Ver más</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 hero_box_col">
							<div class="hero_box d-flex flex-row align-items-center justify-content-start">
								<img src="images/professor.svg" class="svg" alt="">
								<div class="hero_box_content">
									<h2 class="hero_box_title">Docentes</h2>
									<a href="teachers.html" class="hero_box_link">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Popular -->

		<div class="popular page_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Cursos Populares</h1>
						</div>
					</div>
				</div>

				<div class="row course_boxes">

					<!-- Popular Course Item -->
					<div class="col-lg-4 course_box">
						<div class="card">
							<img class="card-img-top" src="images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
							<div class="card-body text-center">
								<div class="card-title"><a href="Contenido.php">Biologia</a></div>
								<div class="card-text">Datos exploratorios, grafias, etc...</div>
							</div>

							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
								</div>
								<div class="course_author_name">Javier Rodriguez, <span>Autor</span></div>
								<div class="course_price d-flex flex-column align-items-center justify-content-center"><span></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Register -->
		<div class="register">
			<div class="container-fluid">
				<div class="row row-eq-height">
					<div class="col-lg-6 nopadding">
					
						<!-- Register -->
						<div class="register_section d-flex flex-column align-items-center justify-content-center">
							<div class="register_content text-center">
								<h1 class="register_title">Registrate y disfruta de todo el contenido </h1>
								<p class="register_text">Solo podras ver todo el contenido si te registras y eres aceptado.</p>
								<div class="button button_1 register_button mx-auto trans_200"><a href="login.php">Registrate ahora</a></div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 nopadding">
					
					<!-- Search -->
					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Sugierenos nuevas ideas!</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Nombre">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Correo">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Comentario o sugerencia">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Enviar</button>
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div>
	

		<!-- Services -->
		<div class="services page_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Servicios ofrecidos</h1>
						</div>
					</div>
				</div>

				<div class="row services_row">
					<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/earth-globe.svg" alt="">
						</div>
						<h3>Cursos online</h3>
						<p></p>
					</div>

					<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/exam.svg" alt="">
						</div>
						<h3>Enlaces a aplicaciones online</h3>
						<p></p>
					</div>

					<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/books.svg" alt="">
						</div>
						<h3>Documentacion</h3>
						<p></p>
					</div>

					<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
						<div class="icon_container d-flex flex-column justify-content-end">
							<img src="images/professor.svg" alt="">
						</div>
						<h3>Docentes</h3>
						<p></p>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="footer_content">
					<div class="row">

						<!-- Footer Column - About -->
						<div class="col-lg-4 footer_col">

							<!-- Logo -->
							<div class="logo_container">
								<div class="logo">
									<img src="images/logoandea.png" alt="">
									<span></span>
								</div>
							</div>
							<p class="footer_about_text">Encuentras cursos y contenido online.</p>
						</div>

						<!-- Footer Column - Menu -->
						<div class="col-lg-4 footer_col">
							<div class="footer_column_title">Menu</div>
							<div class="footer_column_content">
								<ul>
									<li class="footer_list_item"><a href="#">Inicio</a></li>
									<li class="footer_list_item"><a href="#">Cursos</a></li>
									<li class="footer_list_item"><a href="courses.php">Docentes</a></li>
									<li class="footer_list_item"><a href="news.php">Contacto</a></li>
									<li class="footer_list_item"><a href="contact.php">Iniciar Sesion</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 footer_col">
							<div class="footer_column_title">Contacto</div>
							<div class="footer_column_content">
								<ul>
									<li class="footer_contact_item">
										<div class="footer_contact_icon">
											<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
										</div>
										Colombia - Santa Marta Universidad del Magdalena
									</li>
								
									<li class="footer_contact_item">
										<div class="footer_contact_icon">
											<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
										</div>grupodeinvestigacion.gien@gmail.com
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/greensock/TweenMax.min.js"></script>
		<script src="plugins/greensock/TimelineMax.min.js"></script>
		<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="plugins/greensock/animation.gsap.min.js"></script>
		<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>