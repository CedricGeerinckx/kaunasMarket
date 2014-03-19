$(document).ready(function() {

    $.fn.fullpage({
    	anchors: ['home', 'info', 'gallery', 'map2', 'contact'],
    	menu: '#navlinks'
    });
    $("#homeVid").get(0).play();
});


