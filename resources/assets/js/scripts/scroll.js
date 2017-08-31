/**
 * Created by amon on 8/30/17.
 */

import * as $ from 'jquery'

 // Scroll To Top

export const scroll =    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top').click(function () {
            $('#back-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });