		$(document).ready(function() {
		
		/*
		
		<datalist id="lstSuggestion">  
		 				</datalist> 
		 				*/
		
			initSearchCriterias();
		
			var zIndexNumber = 1000;
			jQuery.each($('.jqTransformSelectWrapper'), function(i, el) {
				$(this).css("z-index",zIndexNumber);
				zIndexNumber -= 10;
			});
		});  
		
		
	function reset()
	{
	
		$('form#advanced-search div.row-search select[name=op]').attr("value","and");
		$('form#advanced-search div.row-search select[name=idx]').attr("value","kw");
		$('form#advanced-search div.row-search select[name=equalityOp]').attr("value","LIKE");
		$('form#advanced-search div.row-search input[type=text]').attr("value","");
		
		var $otherRows = $('form#advanced-search div.row-search:gt(2)');
		$otherRows.slideUp("fast", function(){ $otherRows.remove(); });
	}
	
	
	function initSearchCriterias()
	{

		$('input[type=reset]').click(reset);
		
		$('form#advanced-search select[name=idx]').change(loadDataList);
		
		var $lastRowSearch = $('form#advanced-search div.row-search:last-of-type');
		$lastRowSearch.after('<span class="buttonAdd" title="Ajouter un autre champ" >[+]</span>');
		$lastRowSearch.next('span.buttonAdd').click(add_field);
	}
		
	function loadDataList()
	{
	var selectActuel = $(this);
	var value =  selectActuel.val();
		switch(value)
			{
			case 'artistes.nom':
						
			 	var lstArtistes = $('#lstSuggestionArtistes');
                      	
                //vérifie si la liste de suggestion n'existe pas
		            if (lstArtistes.length==0)
		            {
		            //liste n'existe pas
		            $('#advanced-search').append('<datalist id="lstSuggestionArtistes"></datalist>');
		            	$.ajax({
						type: "GET",
						url: "xml/sugArtistes.xml",
						dataType: "xml",
						success: function(xml) {
		                  
		                   $(xml).find('artiste').each(function() {
		                        var artiste = $(this).attr('nom');
		                      
				               //rafraichir la liste dans le cas où la liste n'existait pas au départ
				               	lstArtistes = $('#lstSuggestionArtistes');
				               	lstArtistes.append('<option value="'+artiste+'">');
				             
		               	   });
		               	   
		               	   }
		              });
		                  //lier la datalist au input de la ligne courante
		            	  
		            }
		            lierDataList(selectActuel,'lstSuggestionArtistes');
                			 	
			  break;
			case 'medias.titre':
			  
			  var lstTitresMedia = $('#lstSuggestionTitresMedia');
                      	
                //vérifie si la liste de suggestion n'existe pas
		            if (lstTitresMedia.length==0)
		            {
		            //liste n'existe pas
		            $('#advanced-search').append('<datalist id="lstSuggestionTitresMedia"></datalist>');
		            	$.ajax({
						type: "GET",
						url: "xml/sugTitres.xml",
						dataType: "xml",
						success: function(xml) {
		                  
		                   $(xml).find('titre').each(function() {
		                        var titre = $(this).attr('titre');
		                      
				               //rafraichir la liste dans le cas où la liste n'existait pas au départ
				               	lstTitresMedia = $('#lstSuggestionTitresMedia');
				               	lstTitresMedia.append('<option value="'+titre+'">');
				             
		               	   });
		               	   
		               	   }
		              });
		                  //lier la datalist au input de la ligne courante
		            	  
		            }
		            lierDataList(selectActuel,'lstSuggestionTitresMedia');
			  
			  break;
			case 'pieces.genreID':
			case 'details_imprimes.genreID':
			  //alert('3');
			break;
			default:
			 // alert('fin');
			}
			
	}
	
	function lierDataList(list,dataList)
	{
		var ligneCourante=list.closest('div');
		var inputCourant = ligneCourante.find('input[type=text]');
		inputCourant.attr('list',dataList);
	}
		
	
  
    /* This function allows to display a new field to search.
    */
    function add_field() {
	
	var $newLine = $(this).prev('div.row-search').clone();
	
	if($newLine.find('span.buttonRemove').length == 0)
	
		$newLine.append('<span class="buttonRemove" title="Supprimer le champ" >[-]</span>');
		
	
	$newLine.find('input[type=text]').val('');	
	$newLine.find('span.buttonRemove').click(removeField);

	
	$(this).before($newLine);
	$(this).prev().hide();
	$(this).prev().fadeIn(300);
	$(this).prev().css("display","");
    }
    
 
    function removeField() {
   
   
	var ligneParente=$(this).closest('div.row-search');
	
	ligneParente.fadeOut(300, function(){ ligneParente.remove(); });

	};
