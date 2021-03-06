$(document).ready(function() {
	$('form#emprunt input#utilisateurID').after('<input type="button" value="Afficher" class="foo">');
	$('form#emprunt input[type="button"].foo').click(function() {
		$.ajax({
			type: "GET",
			url: "xml/utilisateurs.xml",
			dataType: "xml",
			success: function(xml) {
				$(xml).find('utilisateur').each(function() {
					var $userInfo = $('<div id="userInfo"></div>');
					if ($('form#emprunt input[type="number"]#utilisateurID').val() == $(this).attr('matricule'))
					{
						$userInfo.append($(this).attr('matricule') + '<br/>' + $(this).attr('prenom') + ' ' + $(this).attr('nom') + '<br/>' + $(this).attr('telephone') + '<br/>' + $(this).attr('email'));
						$('form#emprunt input[type="button"].foo').after($userInfo);
						$('form#emprunt label #lblUtilisateurID').hide();
						$('form#emprunt input#utilisateurID').hide();
						$('form#emprunt input[type="button"].foo').hide();
					}
				});
			}
		});
	});
	
	$('form#emprunt input#mediaID').after('<input type="button" value="+" class="add">');
	$('form#emprunt input[type="button"].add').click(function() {
		showMedia($('form#emprunt input[type="number"]#mediaID').val());
	});
	
	$('form#emprunt input#mediaID').after('<input type="button" value="-" class="suppress">');
	$('form#emprunt input[type="button"].suppress').click(function() {
		if ($('form#emprunt input[type="number"]#mediaID').val().length != 0) {
			$('div#' + $('form#emprunt input[type="number"]#mediaID').val()).remove();
			//$('div#outerDiv').remove();
		}
	});
});

function showMedia(str) {
	$.ajax({
		type: "GET",
		url: "php/getMedia.php",
		data: "q="+str,
		dataType: "html",
		success: function(html){
			$('form#emprunt input[type="button"].add').after(html);
		}
	});
}
