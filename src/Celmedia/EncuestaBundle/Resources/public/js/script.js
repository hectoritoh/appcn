
$(document).ready(function(){

	$("#trivia").find("div.preguntas:last").addClass("ultima");

});

function empezar(){
	$('#iniciar').hide();
	$('#cuestionario').show("", function(){
		timer();
	});
}
function ranking(){
	$('#mensaje').hide("fast",function(){

		$("#seccion-trivia").css('background-image', 'url(../bundles/celmediasite/img/BG/IMG-BG-trivia.jpg)');
		$("#seccion-trivia").css('background-color', 'transparent' );
		
	});
	$('#ranking').show();
}
function continuar(){
	$("#mensaje-continuar").hide('slow');


	$('.preguntas:hidden:not(.contestada):eq(0)').show('slow');	
	$("#cuestionario").show("fast",function(){
		$("#seccion-trivia").css('background-image', 'url(../bundles/celmediasite/img/BG/IMG-BG-trivia.jpg)');
		$("#seccion-trivia").css('background-color', 'transparent' );
	});
}