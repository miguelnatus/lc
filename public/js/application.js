/*  
    Summary     :
        | window.ready and window.load

*/      
$(document).ready(function() {
	menuMobile();
});
 
$(window).load(function() {
	logoSizeEmpreendimento();
});

function menuMobile(){
	$("header nav").append("<span class='fechar-menu'></span>");
	$("header #mobile-menu-icon").click(function(event){
		event.preventDefault();
		$("header nav").show("600");
		$("header nav .fechar-menu").click(function(){
			$("header nav").hide("600");
		});
	});
}

function logoSizeEmpreendimento(){
	var image = new Image();
	var screen = $(window).width();
	
	if (screen < 768) {
		var logo_size = "125px";
	}else{
		var logo_size = "25%";
	}

	$(".emp-info h2.ir,.info-empreendimento h1.ir").each(function(){
		image.src = $(this).css("background-image").replace(/"/g,"").replace(/url\(|\)$/ig, "");

		if(image.width < image.height){
			$(this).css("background-size",logo_size);
		}
	});
}