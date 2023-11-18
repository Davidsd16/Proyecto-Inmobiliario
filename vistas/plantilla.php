<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
	<?php include "./vistas/inc/link.php"; ?>
</head>

<body>

	<?php

	$peticion_ajax = false;
	require_once "./controladores/vistasControlador.php";

	$instancia_vistas = new vistasControlador();
	$vistas = $instancia_vistas->obtenerVistasControlador();

	if ($vistas == "login") {
		require_once "./vistas/contenidos/login_view.php"; // . $vistas . "_view.php";
	} else {
		require_once "./vistas/contenidos/404_view.php";
	?>
		<!-- Main container -->
		<main class="full-box main-container">
			<!-- Nav lateral -->
			<?php include "./vistas/inc/navLateral.php"; ?>
			<!-- Page content -->
			<section class="full-box page-content">
				<?php
				include "./vistas/inc/navBar.php";
				include $vistas;
				?>
			</section>
		</main>
	<?php
	}
	include "./vistas/inc/script.php";
	?>
</body>

</html>