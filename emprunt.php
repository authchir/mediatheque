<?php require('sharedFiles/pageStart.inc.php'); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Martin Desharnais">

		<title>Médiatech du département de musique du cégep de Trois-Rivières</title>

		<link rel="stylesheet" href="css/style1.css">
		<link rel="icon" href="images/logoCegep.svg">

		<script src="javascript/jquery/jquery.js"></script>
		<script src="javascript/generateEmprunt.js"></script>

		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php require('sharedFiles/header.inc.php'); ?>
		<div id="content">
			<div id="vertical-breadcrumb">
				<h3>Affinez votre recherche</h3>
				<h4>Lorem ipsum </h4>
				<ul>
					<li><a href="http://www.google.com" onclick="return confirm('Voulez-vous vraiment supprimer cet enregistrement?');">Lorem</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Amet</a></li>
				</ul>
				<h4>Lorem ipsum </h4>
				<ul>
					<li><a href="#">Lorem</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Sit</a></li>
					<li><a href="#">Amet</a></li>
				</ul>
				<h4>Lorem ipsum </h4>
				<ul>
					<li><a href="#">Lorem</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Dolor</a></li>
					<li><a href="#">Sit</a></li>
					<li><a href="#">Amet</a></li>
				</ul>
				<h4>Lorem ipsum </h4>
				<ul>
					<li><a href="#">Lorem</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Dolor</a></li>
					<li><a href="#">Sit</a></li>
					<li><a href="#">Amet</a></li>
					<li><a href="#">Consectetur</a></li>
					<li><a href="#">Lorem</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Dolor</a></li>
					<li><a href="#">Sit</a></li>
					<li><a href="#">Amet</a></li>
					<li><a href="#">Consectetur</a></li>
				</ul>
			</div>
			<div id="search-results">
				<h1>Emprunt</h1>
				<form id="emprunt">
					<input type="hidden" id="ID" name="ID"><br>
					<label id="lblUtilisateurID" for="utilisateurID">Utilisateur</label>
					<input type="number" id="utilisateurID" name="utilisateurID"><br>
					<?php
						include("php/setDateList.php");
					?>
					<label for="mediaID">Media</label>
					<input type="number" id="mediaID" name="mediaID"><br>
					<input type="submit">
				</form>
			</div>
		</div>
		<?php require('sharedFiles/footer.inc.php'); ?>
	</body>
</html>
