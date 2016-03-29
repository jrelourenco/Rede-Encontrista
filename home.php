<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Slide and Push Menus</title>
		<meta name="description" content="Blueprint: Slide and Push Menus" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body class="cbp-spmenu-push">
		<div class="menu">
			<?php include 'menu.php'; ?>
		</div>
		<div class="container">
			<header class="clearfix">
				<span>Olá João</span>
				<h1>Bem vindo à rede encontristas</h1>
				<nav>
					<a href="../profile.php" class="icon-drop" data-info="user profile">Ver Perfil</a>
					<a href="./login.php" class="icon-arrow-left" data-info="logout">Logout</a>
				</nav>
			</header>
			<div class="main">
				<section>
					<h2>Slide Menus</h2>
					<!-- Class "cbp-spmenu-open" gets applied to menu -->
					<button id="showLeft">Show/Hide Left Slide Menu</button>
				</section>
			</div>
		</div>
	</body>
</html>
