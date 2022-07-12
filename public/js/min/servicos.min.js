/*  
    Document   : servicos.js
    Description: Scripts used in this section.
	Summary     :
        | window.ready and window.load
		
*/      

$( document ).ready(function() {
	menuServicos();
});
 
$( window ).load(function() {

});

function menuServicos(){
	$(".menu-servicos li a").click(function(){
		$(".menu-servicos li a").removeClass("selecionado");
		$(this).addClass("selecionado");

		var _element = $(this).attr("href");
		var scroll_to = $(_element).offset().top; 

		$("html, body").animate({ scrollTop: scroll_to }, 600);
    	return false;
	});
}




