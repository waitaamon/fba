/**
 * Created by amon on 8/30/17.
 */

import { $,jQuery }  from 'jquery'

import {lightcase} from 'lightcase'



// isotope
// initialize Portfolio isotope
export const  isotope = $(window).on('load',() => {
    var $container = $('.portfolio_container');
    $container.isotope({
        filter: '*',
    });

    $('.pta-portfolio_filter a').click(function () {
        $('.pta-portfolio_filter .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 500,
                animationEngine: "jquery"
            }
        });
        return false;
    });

});

//Jarallax Init//

/*
export const j = ($('.pta-jarallax').jarallax({
    speed: 0.6
}));
*/

// Lightcase Gallery Popup//

export const Lightcase = $(document).ready(($) => {
    $('a[data-rel^=lightcase]').lightcase();
    swipe: true
});

// Justified gallery//

export const justifiedGallery = $('#basicExample').justifiedGallery({
    rowHeight :220,
    lastRow : 'justify',
    margins : 15
});

// Full Page Slider//

export const sliderPro = $('#my-slider').sliderPro({
    forceSize: 'fullWindow',
    autoplay: true,
    arrows: true,
    buttons: false,
    fade: true,
    touchSwipe: true,
    imageScaleMode: 'cover',
    slideAnimationDuration: 1000
});
