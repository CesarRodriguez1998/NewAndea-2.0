<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Maestros</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
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
				<div class="home_background prlx" style="background-image:url(images/teachers_background.jpg)"></div>
			</div>

			<div class="home_content">
				<h1>Maestros</h1>
			</div>
		</div>

		<!-- Teachers -->
		<div class="teachers page_section">
			<div class="container">
				<div class="row">
				
					<!-- Teacher -->
					<div class="col-lg-4 teacher">
						<div class="card">
							<div class="card_img">
								<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
								<img class="card-img-top trans_200" src="images/teacher_1.jpg" alt="https://unsplash.com/@michaeldam">
							</div>

							<div class="card-body text-center">
								<div class="card-title"><a href="#">Maria Smith</a></div>
								<div class="card-text">Graphic Designer</div>
								<div class="teacher_social">
									<ul class="menu_social">
										<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
										<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Milestones -->
		<div class="milestones">
			<div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>
			<div class="container">
				<div class="row">
				
					<!-- Milestone -->
					<div class="col-lg-4 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
							<div class="milestone_counter" data-end-value="750">0</div>
							<div class="milestone_text">Estuantes</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-4 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
							<div class="milestone_counter" data-end-value="120">0</div>
							<div class="milestone_text">Maestros</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-4 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
							<div class="milestone_counter" data-end-value="39">0</div>
							<div class="milestone_text">Cursos</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Become -->
		<div class="become">
			<div class="container">
				<div class="row row-eq-height">
					<div class="col-lg-6 order-2 order-lg-1">
						<div class="become_title">
							<h1>¿Quieres ser uno de nuestros maestros?</h1>
						</div>
						<p class="become_text">Solo debes enviar un correo a grupodeinvestigacion.gien@gmail.com solicitando la aprovacion para ser uno de nuestros maestro y poder subir contenido.</p>
					</div>

					<div class="col-lg-6 order-1 order-lg-2">
						<div class="become_image">
							<img src="images/become.jpg" alt="">
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
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/teachers_custom.js"></script>
	</body>
</html>