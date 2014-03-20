$(document).ready(function() {

    $.fn.fullpage({
    	anchors: ['home', 'info', 'gallery', 'map', 'contact'],
    	menu: '#navlinks',
    	scrollingSpeed: 500,
    	easing: 'easeInOutSine',
    	paddingTop: '80px',
    	afterRender: function(){
    		$('.fotorama').fotorama();
    	}    	
    });
    $("#homeVid").get(0).play();
});


