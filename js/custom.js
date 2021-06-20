$(function () {
    'use strict';

    var myHeader =  $('.header')
   myHeader.height($(window).height());

    $(window).resize(function () 
    {
        myHeader.height($(window).height());
    });  

    $('links li').click(function (){
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.links li a').click(function (){
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top 
        }, 1000);
    });

  /*for the scrolling down 
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () =>{
        if (window.scrollY >=450 ) {
            header.classList.add('scrolled');
        }else if(window.scrollY <= 400){
            header.classList.remove('scrolled');
        }
    });*/
    /*var typed = new Typed('.animate', {
        strings: [
            "Developer",
            "photographer",
            "designer"
        ],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true,
    });*/
}); 

