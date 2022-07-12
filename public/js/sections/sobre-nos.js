$(document).ready(function(){
    carrousel();
});

function carrousel(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        items: 1,
        nav: true,
        navText : ['<img src="./public/imgs/estrutura/nav-prev-depoimentos.png">','<img src="./public/imgs/estrutura/nav-next-depoimentos.png">']
    });
}