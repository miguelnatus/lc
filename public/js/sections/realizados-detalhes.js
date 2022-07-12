/*  
    Document   : empreendimentos-detalhes.js
    Description: Scripts used in this section.
	Summary     :
        | window.ready and window.load
		
*/      

$( document ).ready(function() {
	navegacaoFotos();
	imobiliarias();
	ativaQuandoAparece();
	showImobiliarias();
});
 
$( window ).load(function() {

});

function navegacaoFotos() {
	$(".foto-ampliada").children().first().addClass("selecionada");
	$(".album-selecionado .foto-ampliada li.selecionada a").attr("data-lightbox","1");

	//Navegação entre albuns
	$(".categorias-fotos a").click(function(event){
		event.preventDefault();
		$(".foto-ampliada li").removeClass("selecionada");

		var album = $(this).attr("href");
		$(album+" .foto-ampliada").children().first().addClass("selecionada").children("a").attr("data-lightbox","1");
		
		//marca a aba selecionada
		$(".categorias-fotos li.ativo").removeClass("ativo");
		$(this).parent().addClass("ativo");

		//ativa album selecionado
		$(".albuns-fotos .album-selecionado").removeClass("album-selecionado");
		$(".albuns-fotos").find(album).addClass("album-selecionado");

	});

	$(".albuns-fotos > div").each(function(index){
		//insere miniaturas
		var htmlNavegacaoFotos = "<ul class='navegacao-fotos clearfix iteracao"+index+"'>"+$(this).find("ul").html()+"</ul>";
		$(this).append(htmlNavegacaoFotos);
		$(this).find(".navegacao-fotos li img").wrap("<span></span>");

		$(".navegacao-fotos li a").removeAttr("data-lightbox");

		//acoes da navegacao
		$(this).find(".navegacao-fotos li a").click(function(event){
			event.preventDefault();
			var fotoN = $(this).parent("li").index(); //verifica a miniatura clicada
			//troca a foto ampliada no album pela clicada
			$(this).parent().parent().parent().find(".foto-ampliada li").children("a").removeAttr("data-lightbox");
			$(this).parent().parent().parent().find(".foto-ampliada li").removeClass("selecionada").eq(fotoN).addClass("selecionada");
			
			//troca a foto marcada na navegacao. Primeiro retira a classe selecionada, depois adiciona a classe no item clicado
			$(this).parent().parent().find("li").removeClass("selecionada");
			$(this).parent().addClass("selecionada");

			$(".album-selecionado .foto-ampliada li.selecionada a").attr("data-lightbox","1");
		});

	});
	//insere setas laterais
	$(".albuns-fotos").append("<span class='prev controles-album ir'>anterior</span><span class='next controles-album ir'>próxima</span>");
	//acoes das setas laterais
	$(".prev").click(function(){
		var qtdFotos = $(".album-selecionado .foto-ampliada li").length;
		var fotoAtual = $(".album-selecionado .foto-ampliada li.selecionada").index();
		if (fotoAtual == 0){
			$(".album-selecionado .foto-ampliada li.selecionada").removeClass("selecionada");
			$(".album-selecionado .foto-ampliada li").eq(qtdFotos-1).addClass("selecionada").children("a").attr("data-lightbox","1");	
		}
		else {
			$(".album-selecionado .foto-ampliada li.selecionada").removeClass("selecionada").removeAttr("data-lightbox").prev().addClass("selecionada");
		}
		//marca como selecionada a foto correta na navegação
		fotoAtual = $(".album-selecionado .foto-ampliada li.selecionada").index();
		$(".album-selecionado .navegacao-fotos li").removeClass("selecionada");
		$(".album-selecionado .navegacao-fotos li").eq(fotoAtual).addClass("selecionada");
	});
	$(".next").click(function(){
		var qtdFotos = $(".album-selecionado .foto-ampliada li").length;
		var fotoAtual = $(".album-selecionado .foto-ampliada li.selecionada").index();

		if (fotoAtual == qtdFotos-1) {
			$(".album-selecionado .foto-ampliada li.selecionada").removeClass("selecionada").removeAttr("data-lightbox");
			$(".album-selecionado .foto-ampliada li").eq(0).addClass("selecionada");
		}
		else {
			$(".album-selecionado .foto-ampliada li.selecionada").removeClass("selecionada").next().addClass("selecionada").children('a').attr("data-lightbox","1");	
		}
		//marca como selecionada a foto correta na navegação
		fotoAtual = $(".album-selecionado .foto-ampliada li.selecionada").index();
		$(".album-selecionado .navegacao-fotos li").removeClass("selecionada");
		$(".album-selecionado .navegacao-fotos li").eq(fotoAtual).addClass("selecionada");
	});
}

function andamento(){
	var file_json = "../public/data/andamento.json";

	$.getJSON(file_json, function (data) {
		var valorSoma = 0;
		var qtdItens = $("#andamento li").length;
		
		$("#andamento li").each(function(index){
			var valorItem = data[$(this).find(".barra-vazia").attr("id")];

			$(this).find(".porcentagem").text(valorItem+"%");
			$(this).find(".barra-preenchimento").css("width", valorItem+"%");

			valorSoma += Number(valorItem);

			if (index+1 == qtdItens) {
				valorSoma = valorSoma/qtdItens;
				if(valorSoma !== 100){
					$("#total-da-obra").find(".porcentagem").text(valorSoma+"%");
					$("#total-da-obra").find(".barra-preenchimento").css("width", valorSoma+"%");
				}else{
					$("#andamento .container").children().not(".titulo-duas-linhas").hide();
					$("#andamento div.obra-completa").show();
				}


			};
		});

	});
}

function imobiliarias(){
	$(".bt-imobiliarias").click(function(){
		$(".drop-menu ul").toggle(500);
	});
}

function ativaQuandoAparece(){
	var posicaoAndamento = $("#andamento").offset().top;
	$(window).scroll(function(){
		var tamanhoTela = $(window).height();
		if ($(window).scrollTop() > posicaoAndamento - (tamanhoTela*0.7)){
			andamento();
		}
	});
}

function showImobiliarias(){ 
	$(".bt-imobiliarias").on("click",function(){
		$(".box-imobiliarias").slideToggle();
	});
}

