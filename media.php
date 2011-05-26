<?php require('sharedFiles/pageStart.inc.php'); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Martin Desharnais">

		<title>Médiatech du département de musique du cégep de Trois-Rivières</title>

		<?php include('sharedFiles/style.inc.php'); ?>
		<?php include('sharedFiles/javascript.inc.php'); ?>
		<script src="javascript/media.js"></script>
	</head>
	<body>
		<?php require('sharedFiles/header.inc.php'); ?>
		<div id="content">
			<h1>L'expédition</h1>
			<form id="media">
				<aside id="mediaInformations">
					<img src="images/l_expedition.jpg" width="250px">
				</aside>
				<div class="detailsLevel1">
					<p><label for="titre">Titre</label><input type="text" id="titre" name="titre" value="L'expédition" required></p>
					<p><label for="annee_publication">Année de publication</label><input type="number" id="annee_publication" name="annee_publication" value="2008"></p>
					<p><label for="reference">Numéro de référence</label><input type="text" id="reference" name="reference" value="CD-08573" required></p>
					<p>
						<label for="maison_editionID">Maison d'édition</label><!--
						--><select id="maison_editionID" name="maison_editionID">
							<option value="0"></option>
							<option value="1" selected>Archambault Musique</option>
							<option value="2">BBBBB</option>
							<option value="3">CCCCC</option>
							<option value="4">DDDDD</option>
							<option value="5">EEEEE</option>
						</select>
					</p>
					<p>
						<label for="categorieID">Catégorie</label><!--
						--><select id="categorieID" name="categorieID">
							<option value="0"></option>
							<option value="1" selected>CD</option>
							<option value="2">BBBBB</option>
							<option value="3">CCCCC</option>
							<option value="4">DDDDD</option>
							<option value="5">EEEEE</option>
						</select>
					</p>
					<p>
						<label for="collectionID">Collection</label><!--
						--><select id="collectionID" name="collectionID">
							<option value="0" selected></option>
							<option value="1">AAAAA</option>
							<option value="2">BBBBB</option>
							<option value="3">CCCCC</option>
							<option value="4">DDDDD</option>
							<option value="5">EEEEE</option>
						</select>
					</p>
					<p><label for="position_collection">Position</label><input type="number" id="position_collection" name="position_collection" min="0"></p>
					<p><label for="CUP">CUP</label><input type="number" id="CUP" name="CUP" min="0"></p>
					<p>
						<label for="nationaliteID">Nationalité</label>
						<select id="nationaliteID" name="nationaliteID">
							<option value="0"></option>
							<option value="1" selected>Canadienne</option>
							<option value="2">BBBBB</option>
							<option value="3">CCCCC</option>
							<option value="4">DDDDD</option>
							<option value="5">EEEEE</option>
						</select>
					</p>
				</div>
				<div class="detailsLevel2">
					<div class="detailsLevel2Row">
						<p><label for="details_titre">Titre</label><input type="text" id="details_titre" name="details_titre" value="Droit devant"></p>
						<p><label for="details_position_media">Position</label><input type="number" id="details_position_media" name="details_position_media" value="1"></p>
						<p><label for="details_annee_enregistrement">Année d'enregistrement</label><input type="number" id="details_annee_enregistrement" name="details_annee_enregistrement"></p>
						<p><label for="details_duree">Durée</label><input type="text" id="details_duree" name="details_duree" value="4:45"></p>
						<p>
							<label for="details_arrangeurs">Arrangeurs</label><!--
							--><span id="details_arrangeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_arrangeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_arrangeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_artistes">Artistes</label><!--
							--><span id="details_artistes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_artistes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_compositeurs">Compositeurs</label><!--
							--><span id="details_compositeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_compositeurs" name="details_compositeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
						<label for="details_parolier">Parolier</label><!--
							--><span id="details_parolier" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_parolier" name="details_parolier">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_interpretes">Interprètes</label><!--
							--><span id="details_interpretes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_interpretes" name="details_interpretes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_catalogueID">Catalogue</label><!--
							--><select id="details_catalogueID" name="details_catalogueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_epoqueID">Époque</label><!--
							--><select id="details_epoqueID" name="details_epoqueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_formeID">Forme</label><!--
							--><select id="details_formeID" name="details_formeID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_genreID">Genre</label><!--
							--><select id="details_genreID" name="details_genreID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_instrumentationID">Instrumentation</label><!--
							--><select id="details_instrumentationID" name="details_instrumentationID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_tonaliteID">Tonalité</label><!--
							--><select id="details_tonaliteID" name="details_tonaliteID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
					</div>
					<div class="detailsLevel2Row">
						<p><label for="details_titre">Titre</label><input type="text" id="details_titre" name="details_titre" value="Chêne et roseau"></p>
						<p><label for="details_position_media">Position</label><input type="number" id="details_position_media" name="details_position_media" value="2"></p>
						<p><label for="details_annee_enregistrement">Année d'enregistrement</label><input type="number" id="details_annee_enregistrement" name="details_annee_enregistrement"></p>
						<p><label for="details_duree">Durée</label><input type="text" id="details_duree" name="details_duree" value="2:12"></p>
						<p>
							<label for="details_arrangeurs">Arrangeurs</label><!--
							--><span id="details_arrangeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_arrangeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_artistes">Artistes</label><!--
							--><span id="details_artistes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_artistes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_compositeurs">Compositeurs</label><!--
							--><span id="details_compositeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_compositeurs" name="details_compositeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
						<label for="details_parolier">Parolier</label><!--
							--><span id="details_parolier" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_parolier" name="details_parolier">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_interpretes">Interprètes</label><!--
							--><span id="details_interpretes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_interpretes" name="details_interpretes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_catalogueID">Catalogue</label><!--
							--><select id="details_catalogueID" name="details_catalogueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_epoqueID">Époque</label><!--
							--><select id="details_epoqueID" name="details_epoqueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_formeID">Forme</label><!--
							--><select id="details_formeID" name="details_formeID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_genreID">Genre</label><!--
							--><select id="details_genreID" name="details_genreID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_instrumentationID">Instrumentation</label><!--
							--><select id="details_instrumentationID" name="details_instrumentationID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_tonaliteID">Tonalité</label><!--
							--><select id="details_tonaliteID" name="details_tonaliteID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
					</div>
					<div class="detailsLevel2Row">
						<p><label for="details_titre">Titre</label><input type="text" id="details_titre" name="details_titre" value="Entre deux taxis"></p>
						<p><label for="details_position_media">Position</label><input type="number" id="details_position_media" name="details_position_media" value="3"></p>
						<p><label for="details_annee_enregistrement">Année d'enregistrement</label><input type="number" id="details_annee_enregistrement" name="details_annee_enregistrement"></p>
						<p><label for="details_duree">Durée</label><input type="text" id="details_duree" name="details_duree" value="3:32"></p>
						<p>
							<label for="details_arrangeurs">Arrangeurs</label><!--
							--><span id="details_arrangeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_arrangeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_artistes">Artistes</label><!--
							--><span id="details_artistes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_artistes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_compositeurs">Compositeurs</label><!--
							--><span id="details_compositeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_compositeurs" name="details_compositeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
						<label for="details_parolier">Parolier</label><!--
							--><span id="details_parolier" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_parolier" name="details_parolier">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_interpretes">Interprètes</label><!--
							--><span id="details_interpretes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_interpretes" name="details_interpretes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_catalogueID">Catalogue</label><!--
							--><select id="details_catalogueID" name="details_catalogueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_epoqueID">Époque</label><!--
							--><select id="details_epoqueID" name="details_epoqueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_formeID">Forme</label><!--
							--><select id="details_formeID" name="details_formeID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_genreID">Genre</label><!--
							--><select id="details_genreID" name="details_genreID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_instrumentationID">Instrumentation</label><!--
							--><select id="details_instrumentationID" name="details_instrumentationID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_tonaliteID">Tonalité</label><!--
							--><select id="details_tonaliteID" name="details_tonaliteID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
					</div>
					<div class="detailsLevel2Row">
						<p><label for="details_titre">Titre</label><input type="text" id="details_titre" name="details_titre" value="La Catherine"></p>
						<p><label for="details_position_media">Position</label><input type="number" id="details_position_media" name="details_position_media" value="4"></p>
						<p><label for="details_annee_enregistrement">Année d'enregistrement</label><input type="number" id="details_annee_enregistrement" name="details_annee_enregistrement"></p>
						<p><label for="details_duree">Durée</label><input type="text" id="details_duree" name="details_duree" value="3:03"></p>
						<p>
							<label for="details_arrangeurs">Arrangeurs</label><!--
							--><span id="details_arrangeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_arrangeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_artistes">Artistes</label><!--
							--><span id="details_artistes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_artistes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_compositeurs">Compositeurs</label><!--
							--><span id="details_compositeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_compositeurs" name="details_compositeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
						<label for="details_parolier">Parolier</label><!--
							--><span id="details_parolier" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_parolier" name="details_parolier">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_interpretes">Interprètes</label><!--
							--><span id="details_interpretes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_interpretes" name="details_interpretes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_catalogueID">Catalogue</label><!--
							--><select id="details_catalogueID" name="details_catalogueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_epoqueID">Époque</label><!--
							--><select id="details_epoqueID" name="details_epoqueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_formeID">Forme</label><!--
							--><select id="details_formeID" name="details_formeID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_genreID">Genre</label><!--
							--><select id="details_genreID" name="details_genreID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_instrumentationID">Instrumentation</label><!--
							--><select id="details_instrumentationID" name="details_instrumentationID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_tonaliteID">Tonalité</label><!--
							--><select id="details_tonaliteID" name="details_tonaliteID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
					</div>
					<div class="detailsLevel2Row">
						<p><label for="details_titre">Titre</label><input type="text" id="details_titre" name="details_titre" value="Histoire de pêche"></p>
						<p><label for="details_position_media">Position</label><input type="number" id="details_position_media" name="details_position_media" value="5"></p>
						<p><label for="details_annee_enregistrement">Année d'enregistrement</label><input type="number" id="details_annee_enregistrement" name="details_annee_enregistrement"></p>
						<p><label for="details_duree">Durée</label><input type="text" id="details_duree" name="details_duree" value="3:09"></p>
						<p>
							<label for="details_arrangeurs">Arrangeurs</label><!--
							--><span id="details_arrangeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_arrangeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_artistes">Artistes</label><!--
							--><span id="details_artistes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_arrangeurs" name="details_artistes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_compositeurs">Compositeurs</label><!--
							--><span id="details_compositeurs" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_compositeurs" name="details_compositeurs">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
						<label for="details_parolier">Parolier</label><!--
							--><span id="details_parolier" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_parolier" name="details_parolier">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_interpretes">Interprètes</label><!--
							--><span id="details_interpretes" class="detailsLevel3">
								<span class="rowLevel3">
									<select id="details_interpretes" name="details_interpretes">
										<option value="0"></option>
										<option value="1" selected>AAAAA</option>
										<option value="2">BBBBB</option>
										<option value="3">CCCCC</option>
										<option value="4">DDDDD</option>
										<option value="5">EEEEE</option>
									</select>
								</span>
							</span>
						</p>
						<p>
							<label for="details_catalogueID">Catalogue</label><!--
							--><select id="details_catalogueID" name="details_catalogueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_epoqueID">Époque</label><!--
							--><select id="details_epoqueID" name="details_epoqueID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_formeID">Forme</label><!--
							--><select id="details_formeID" name="details_formeID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_genreID">Genre</label><!--
							--><select id="details_genreID" name="details_genreID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_instrumentationID">Instrumentation</label><!--
							--><select id="details_instrumentationID" name="details_instrumentationID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
						<p>
							<label for="details_tonaliteID">Tonalité</label><!--
							--><select id="details_tonaliteID" name="details_tonaliteID">
								<option value="0" selected></option>
								<option value="1">AAAAA</option>
								<option value="2">BBBBB</option>
								<option value="3">CCCCC</option>
								<option value="4">DDDDD</option>
								<option value="5">EEEEE</option>
							</select>
						</p>
					</div>
				</div>
				<button type="submit">Enregistrer</button>
				<button type="reset">Annuler</button>
			</form>
		</div>
		<?php require('sharedFiles/footer.inc.php'); ?>
	</body>
</html>

