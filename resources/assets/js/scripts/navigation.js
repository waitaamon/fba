/**
 * Created by amon on 8/30/17.
 */


import * as $ from 'jquery'

export const navigation = $(document).ready(function($){
    var isLateralNavAnimating = false;

    //open/close lateral navigation
    $('.nav-trigger').on('click', function(event){
        event.preventDefault();
        //stop if nav animation is running
        if( !isLateralNavAnimating ) {
            if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true;

            $('body').toggleClass('menu-active');
            $('.menu-container').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                //animation is over
                isLateralNavAnimating = false;
            });
        }
    });
});
