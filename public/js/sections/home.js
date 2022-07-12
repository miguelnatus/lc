/*  
    Document   : home.js
    Description: Scripts used in this section.
	Summary     :
        | window.ready and window.load
		
*/      

$( document ).ready(function() {
    carrousel();
});
 
$( window ).load(function() {

});

function carrousel(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        items: 1,
        nav: true,
        navText : ['<img src="./public/imgs/home/prev-banner.png">','<img src="./public/imgs/home/next-banner.png">']
    });

    //logoNav();
}

function logoNav(){
    $(".owl-theme .owl-nav button").on("click",function(){
        var prev_img = $(".owl-item.active").prev().children("li").data("logo");
        var next_img = $(".owl-item.active").next().children("li").data("logo");

        $(".logo-nav.logo-prev").attr('src',prev_img);
        $(".logo-nav.logo-next").attr('src',next_img);
    });
}