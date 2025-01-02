$(document).ready(function(){
    $('.home-banner-box').owlCarousel({
        loop:true,
        margin:5,
        responsiveClass:true,
        autoplay: true,
        slideTransition: 'linear',
        autoplaySpeed: 6000,
        smartSpeed: 6000,
        center: true,
        autoplayHoverPause: false,
        responsive:{
            0:{
                items:1
                
            },
            600:{
                items:3
            },
            1000:{
                items:4
            },
            1200:{
                items:6
            }
        }
    })


    $('.car-slider').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
                
            },
            600:{
                items:1
                
            },
            1000:{
                items:1
            },
            1200:{
                items:1
            }
        }
    })

    $('.customer').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplay:true,
        nav:true,
        center: true,
        responsive:{
            0:{
                items:1
                
            },
            600:{
                items:1
            },
            1000:{
                items:1
            },
            1200:{
                items:1
            }
        }
    })

    jQuery('.home-banner-box').trigger('play.owl.autoplay',[2000]);

    function setSpeed(){
        jQuery('.home-banner-box').trigger('play.owl.autoplay',[6000]);
    }

    setTimeout(setSpeed, 1000);


})

const body = document.querySelector("body")
const navbar = document.querySelector(".navbar");
const menu = document.querySelector(".menu-list");

window.onscroll = ()=>{
    this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}