/**
 * Created by amon on 8/30/17.
 */

import * as $ from 'jquery'

// Custom Scripts for Proton Template //


export const loader = $(window).on('load', () => {
    setTimeout(()=> {
        $('#loading').fadeOut('slow', () => {
        });
    }, 3000);
})