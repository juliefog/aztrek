$(document).ready(function () {
    console.log("ready!");

    // $(".burger").sidr({
    //     source: ".main-menu",
    //     displace: false,
    // });

    // pour fermer le menu n'importe où sur l'écran:
    $('body').click(function () {
        $.sidr('close', 'sidr');
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        margin: 0,
        autowidth: true,
        responsiveClass: true,
        items: 1,
    });


    $('.single-item').slick({
        dots: true
    });


    
    const bpNav = 768;
    const burger = $('.burger');
    const nav = $(burger.data('target'));
    //Récupère le contenu HTML de la nav
    const navContent = nav.html();

    $(".has-sublist a").click(function () {        
        $(".has-sublist ul").slideUp();
        $(this).next().stop(true).slideToggle();
        $(".has-sublist  > a").not(this).removeClass('expanded');
        $(this).toggleClass('expanded');

    });


    //Click burger pour activer la nav:
    burger.click(function () {
        //Ajout et retrait de la nav avec la classe nav-expanded:
        $('body').toggleClass('nav-expanded');
    });


});