<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Publicaciones</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
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
				</div>

			</div>
	
			<!-- Home -->
			<div class="home">
				<div class="home_background_container prlx_parent">
					<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
				</div>

				<div class="home_content">
					<h1>Publicaciones</h1>
				</div>
			</div>

			<!-- Elements -->
			<div class="elements">

				<!-- Buttons -->
		
				<!-- Progress Bars and Accordions -->
				<div class="pbars_accordions">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="elements_title">Listado de Publicaciones</div>
							</div>
						</div>

						<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Buscar">
						

						<div class="row pbars_accordions_container">

						<!-- Progress Bars & Accordions -->
						<div class="col-lg-12">

							<!-- Accordions -->
							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"> Nombre de la publicacion / Nombre del autor.</div>
									<div class="accordion_panel">
										<p>Pdf - git - google coolab - RStudio Onlink.</p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!-- Loaders -->
		
			<!-- Milestones -->
	
			<!-- Icon Boxes -->

		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
			
				<!-- Footer Copyright -->
				<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
					<div class="footer_copyright">
						<span>ANDEA</span>
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
		<script src="plugins/progressbar/progressbar.min.js"></script>
		<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="js/elements_custom.js"></script>
	</body>
</html>