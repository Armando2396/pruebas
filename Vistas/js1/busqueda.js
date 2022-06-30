

	
$(document).ready(function(){
		

	$("#id-busqueda").keyup(function(e){
		
		var campo=$("#id-busqueda").val
		
		if(e.keyCode==13){
			
			searchproducto();
		}
		
		

		
		
	});

});

function searchproducto(){

window.location.href="busqueda.php?text="+$("#id-busqueda").val();
} 
