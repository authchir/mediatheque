<?php
require_once('Application.class.php');

//variable uniquement pour la présentation de la conception
//cette variable contient le numéro de niveau de détail utilisée lors de la présentation
$presentationID = 0;

/**
 * \brief Fonction qui créer la requête sql à partir du tableau $_POST fournit en paramètre.
 * \author Samuel Milette Lacombe
 * \param criterias Tableau $_POST contenant les critères de recherche et leurs valeurs
 * \return La requête SQl complète pour afficher les résultats de la recherche
 */
function createSqlQuery($criterias)
{
	global $application;
	
	//uniquement pour la présentation de la conception
	global $presentationID;
	$presentationID = $criterias;
	
	//Requête sql de base (clause select)
	$basicQuery = '
		SELECT medias.ID, 
			medias.notes, 
			medias.titre, 
			medias.annee_publication, 
			medias.image,
			artistes.nom AS nomArtiste, 
			categories_media.nom AS nomCategorie, 
			categories_media.image AS imageCategorie, 
			supports.nom AS nomSupport, 
			maisons_edition.nom AS nomMaisonEdition, 
			genres.nom AS nomGenre';
			
	/*
	Dans le cadre de la phase conception, un "switch" est utilisé pour pouvoir déterminer quelle requête sql utilisé pour le niveau de détail en cours.
	La variable $criterias devrait contenir normalement un tableau $_POST mais pour les besoins de la présentation devant le client, cette variable va
	contenir le numéro de la recherche voulue. Par exemple, le no 1 affiche tous les médias, le no 2 affiche seulement les médias audio. Dans la phase technique,
	les programmeurs devront créer la requête sql à partir des critères et valeur de recherche contenue dans le tableau $_POST envoyé à partir de la recherche simple ou avancée.
	*/
	switch ($criterias)
	{
	case 1:
		$sqlFromWhere = ' FROM medias 
				LEFT JOIN artistes ON artistes.ID = medias.artisteID
				INNER JOIN supports ON medias.supportID = supports.ID
				INNER JOIN categories_media ON supports.categorie_mediaID = categories_media.ID
				LEFT JOIN genres ON genres.ID = medias.genreID
				LEFT JOIN maisons_edition ON maisons_edition.ID = medias.maison_editionID
			WHERE medias.inactif=FALSE ORDER BY medias.titre
			';
	
		break;
	case 2:
		$sqlFromWhere = ' FROM medias 
				LEFT JOIN artistes ON artistes.ID = medias.artisteID
				INNER JOIN supports ON medias.supportID = supports.ID
				INNER JOIN categories_media ON supports.categorie_mediaID = categories_media.ID
				LEFT JOIN genres ON genres.ID = medias.genreID
				LEFT JOIN maisons_edition ON maisons_edition.ID = medias.maison_editionID
			WHERE medias.inactif=FALSE and Upper(categories_media.nom) = Upper(\'audio\') ORDER BY medias.titre
			';
		break;
	case 3:
		$sqlFromWhere = ' FROM medias 
				LEFT JOIN artistes ON artistes.ID = medias.artisteID
				INNER JOIN supports ON medias.supportID = supports.ID
				INNER JOIN categories_media ON supports.categorie_mediaID = categories_media.ID
				LEFT JOIN genres ON genres.ID = medias.genreID
				LEFT JOIN maisons_edition ON maisons_edition.ID = medias.maison_editionID
			WHERE medias.inactif=FALSE and Upper(categories_media.nom) = \'AUDIO\' 
			AND Upper(artistes.nom) = Upper(\'Les cowboys fringants\')  ORDER BY medias.titre
			';
		break;
	case 4:
		$sqlFromWhere = ' FROM medias 
				LEFT JOIN artistes ON artistes.ID = medias.artisteID
				INNER JOIN supports ON medias.supportID = supports.ID
				INNER JOIN categories_media ON supports.categorie_mediaID = categories_media.ID
				LEFT JOIN genres ON genres.ID = medias.genreID
				LEFT JOIN maisons_edition ON maisons_edition.ID = medias.maison_editionID
			WHERE medias.inactif=FALSE and Upper(categories_media.nom) = \'AUDIO\' 
			AND Upper(artistes.nom) = Upper(\'Les cowboys fringants\')  AND medias.annee_publication=2008 ORDER BY medias.titre
			';
		break;
	case 5:
		$titre = $application->database->quote("La communauté de l'anneau");
		$sqlFromWhere = ' FROM medias 
				LEFT JOIN artistes ON artistes.ID = medias.artisteID
				INNER JOIN supports ON medias.supportID = supports.ID
				INNER JOIN categories_media ON supports.categorie_mediaID = categories_media.ID
				LEFT JOIN genres ON genres.ID = medias.genreID
				LEFT JOIN maisons_edition ON maisons_edition.ID = medias.maison_editionID
			WHERE Upper(medias.titre) = Upper('.$titre.')
			';
		break;
	case 6:
		$titre = $application->database->quote("%Indiana Jones%");
		$sqlFromWhere = ' FROM medias 
				LEFT JOIN artistes ON artistes.ID = medias.artisteID
				INNER JOIN supports ON medias.supportID = supports.ID
				INNER JOIN categories_media ON supports.categorie_mediaID = categories_media.ID
				LEFT JOIN genres ON genres.ID = medias.genreID
				LEFT JOIN maisons_edition ON maisons_edition.ID = medias.maison_editionID
			WHERE Upper(medias.titre) like Upper('.$titre.')
			';
		break;
	}
return $basicQuery.$sqlFromWhere;
}

/**
 * \brief Fonction qui écrit les résultats de la recherche dans la page avec le balise html.
 * \author Samuel Milette Lacombe
 * \param sqlQuery Requête sql de la recherche
 */
function printSearchResults($sqlQuery)
{
	global $application;
	global $presentationID;
	//$basicQuery : requête de base (select seulement)
	//$sqlFromWhere: deuxième partie de la requête incluant la clause where et from
 
	require('php/Pagination.class.php');
	
	$fromStartPosition = strrpos(strtoupper($sqlQuery), "FROM") + 5;
	$fromEndPosition = strrpos(strtoupper($sqlQuery), "WHERE");
	$fromClause = substr ($sqlQuery, $fromStartPosition, $fromEndPosition-$fromStartPosition);
	$whereStartPosition = $fromEndPosition + 6;
	$whereClause =  substr ($sqlQuery, $whereStartPosition, strlen($sqlQuery)-$whereStartPosition);
		
   	$pagination = new Pagination();
	$pagination->setDataBase($application->database);
	$pagination->setFromClause($fromClause);
	$pagination->setWhereClause($whereClause);
	
	if (isset($_GET['presentation']) || !empty($_GET['presentation']))
		$pagination->setDestinationPage('searchResults.php?presentation='.$_GET['presentation']);
	else
		$pagination->setDestinationPage('searchResults.php?presentation=1');
		
	
	if(isset($_GET['page']))
    	$pagination->setCurrentPage($_GET['page']);
    else
      	$pagination->setCurrentPage(1);
      	
    printSearchRequest($presentationID,$pagination); 	
    $pagination->show();
    
    $sqlQuery = $sqlQuery." limit ".$pagination->currentPageFirstItemNumber().", ".$pagination->itemsPerPage();
    $query = $application->database->prepare($sqlQuery);
	$query->execute();
	
	echo '<table id="resultTable">';
	
	foreach($query as $row)
	{
		echo '<tr class="mediaRowResult">';
		
		echo '<td>';
		if (!empty($row['image']))
		{
			echo '<p>';
			echo '<a href="media.php?id='.$row['ID'].'"><img class="resultPicture" src="images/medias/'.$row['image'].' " alt="Illustration du média: '.$row['titre'].'"/></a>';
			echo '</p>';
		}
		else
		{
			echo '<p>';
			echo '<a href="media.php?id='.$row['ID'].'"><img class="mediaTypePicture" src="images/typesMedia/'.$row['imageCategorie'].'" alt="'.$row['nomCategorie'].'"/></a>';
			echo '</p>';
		}
		echo '</div>';//mediaPicture
		
		echo '<td>';
		echo '<h4 class="mediaTitle"><a href="media.php?id='.$row['ID'].'">'.$row['titre'].'</a></h4>';
		
		if (!empty($row['nomMaisonEdition']))
		{
		echo '<p>';
		echo '<span class="label">Éditeur: </span><span class="value">'.$row['nomMaisonEdition'].'</span>';
		echo '</p>';
		}
		
		if (!empty($row['annee_publication']))
		{
		echo '<p>';
		echo '<span class="label">Année de publication: </span><span class="value">'.$row['annee_publication'].'</span>';
		echo '</p>';		
		}
		
		if (!empty($row['nomSupport']))
		{
		echo '<p>';
		echo '<span class="label">Catégorie: </span><span class="value">'.$row['nomCategorie'].' - '.$row['nomSupport'].'</span>';
		echo '</p>';
		}
		
		if (!empty($row['nomGenre']))
		{
			echo '<p>';
			echo '<span class="label">Genre: </span><span class="value">'.$row['nomGenre'].'</span>';
			echo '</p>';
		}
		
		if (!empty($row['notes']))
		{
			echo '<p>';
			echo '<span class="label">Notes: </span><span class="value">'.$row['notes'].'</span>';
			echo '</p>';
		}
		
		if (!empty($row['nomArtiste']))
		{
			echo '<p>';
			echo '<span class="label">Artiste:</span><span class="value">'.$row['nomArtiste'].'</span>';
			echo '</p>';
		}
		
	echo '<p>';
	echo '<span class="label">Action:</span><span class="value"><a class="reserveLink" href="makeReservation.php?id='.$row['ID'].'">Réserver</a></span>';
	echo '</p>';			
	echo '</td>';//fin de mediaInformations
	echo '</tr>';//
		
	}
	
	echo '</table>';
	$pagination->show();
}
/**
 * \brief Fonction qui écrit dans la page la requête de recherche en mots compréhensibles pour l'utilisateur 
 * \author Samuel Milette Lacombe
 * \param sqlQuery Requête sql de la recherche
 * \param pagination Objet de pagination utilisé pour afficher le nombre de médias contenu dans la recherche.
 * \return Une chaine de caractère contenant une balise div contenant la description de la recherche demandée.
 */
function printSearchRequest($sqlQuery,Pagination $pagination)
{

	switch ($sqlQuery) {
		case 1:
		    $requestText= "Tous les médias";
		    break;
		case 2:
		    $requestText= "Tous les médias de catégorie « audio »";
		    break;
		case 3:
		    $requestText= "Tous les médias « audio » de l'artiste « Les cowboys fringuants »";
			break;
	    case 4:
	    $requestText= "Tous les médias « audio » de l'artiste « Les cowboys fringuants » dont l'année de publication est « 2008 »";
	    	break;
	    case 5:
	    $requestText= "Les médias ayant pour titre: « La communauté de l'anneau »";
	    	break;
	    case 6:
	    $requestText= "Les médias ayant le mot clé: « Indiana Jones »";
	    	break;
	}

echo '<div id=searchRequest>Recherche demandée: '.$requestText.', '.$pagination->ItemsCount().' média(s) trouvé(s)</div>';

}

?>
