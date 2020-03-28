<!doctype html>
<html lang="en">

	<head>
		<title>Joaquin Ollero</title>
		
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="76x76" href="resources/material_kit/img/apple-icon.png">
		<link rel="icon" type="image/png" href="resources/images/J.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

		<!-- Core JS Files -->
		<script src="resources/material_kit/js/jquery.min.js" type="text/javascript"></script>
		<script src="resources/material_kit/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="resources/material_kit/js/material.min.js"></script>

		<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
		<script src="resources/material_kit/js/nouislider.min.js" type="text/javascript"></script>

		<!-- Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
		<script src="resources/material_kit/js/bootstrap-datepicker.js" type="text/javascript"></script>

		<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
		<script src="resources/material_kit/js/material-kit.js" type="text/javascript"></script>

		<!-- Fonts and icons -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

		<!-- CSS Files -->
		<link href="resources/material_kit/css/bootstrap.min.css" rel="stylesheet" />
		<link href="resources/material_kit/css/material-kit.css" rel="stylesheet"/>

		<!-- p5.js -->
		<script src="resources/p5/p5.min.js"></script>
		<script src="resources/p5/addons/p5.dom.min.js"></script>
		<script src="resources/p5/addons/p5.sound.min.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110523817-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-110523817-1');
		</script>
	</head>

	<body>
		<?php
			include 'header.php';
		?>

		<div id='container'>
			<?php
				$loc = (isset($_GET['loc']) ? $_GET['loc'] : null);

				if ($_GET['loc'] == 'aboutme'){
					include 'aboutme.php';
				} else if ($_GET['loc'] == 'majorprojects') {
					include 'majorprojects.php';
				} else if ($_GET['loc'] == 'minorprojects') {
					include 'minorprojects.php';
				} else if ($_GET['loc'] == 'publications') {
					include 'publications.php';
				} else if ($_GET['loc'] == 'contact') {
					include 'contact.php';
				} else {
					include 'main.php';
				}
			?>
		</div>

		<?php
			include 'footer.php';
		?>
	</body>
</html>