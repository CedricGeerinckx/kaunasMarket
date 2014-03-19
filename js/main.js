$(document).ready(function() {

    $.fn.fullpage({
    	anchors: ['home', 'info', 'gallery', 'map2']
    });

    $("#homeVid").get(0).play();

    $(".active li a").css("color", "red");
});


