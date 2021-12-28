<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Cursos</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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

				<div class="header_side d-flex flex-row justify-content-center align-items-center color: cornsilk;">
				<?php
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
				</div>

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
				<div class="home_background_container prlx_parent">
					<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
				</div>
				<div class="home_content">
					<h1>Cursos</h1>
				</div>
			</div>

			<!-- Popular -->
			<div class="popular page_section">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title text-center">
								<h1>Cursos</h1>
							</div>
						</div>
					</div>

					<div class="row course_boxes">
				
					<!-- Popular Course Item -->
					<div class="col-lg-4 course_box">
						<div class="card">
							<img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
							
							<div class="card-body text-center">
								<div class="card-title"><a href="Contenido.php">Curso de pesquera</a></div>
								<div class="card-text"></div>
							</div>
							
							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
								</div>
								<div class="course_author_name">Michael Smith, <span>Author</span></div>	
							</div>
						</div>
					</div>

					<!-- Popular Course Item -->
					<div class="col-lg-4 course_box">
						<div class="card">
							<img class="card-img-top" src="images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
							<div class="card-body text-center">
								<div class="card-title"><a href="Contenido.php">Curso de biologia</a></div>
							</div>

							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
								</div>
								<div class="course_author_name">Javier Rodriguez, <span>Author</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Footer -->
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

					<!-- Footer Column - Contact -->
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
									</div>
									grupodeinvestigacion.gien@gmail.com
								</li>
							</ul>
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
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/courses_custom.js"></script>
	</body>
</html>