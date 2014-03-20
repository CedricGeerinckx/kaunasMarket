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

    $(".editButton").on("click",function(){
        var value = $(this).val();
        var text;
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'http://localhost/kaunasMarket/includes/pages.php?content='+value,
            success: function(data) {
                text = data[0].content;
                $.fancybox.open({
                    beforeShow: function(){ 
                        CKEDITOR.replace("contentBox")
                    },
                    content : "<form method='POST' action='includes/pages.php?save'>Content:<br/><textarea class='ckeditor' name='contentBox'>"+text+"</textarea><br/><input type='submit' value='Save' id='saveButton'/><input type='hidden' name='contentId' value='"+data[0].id+"'/></form>"

                }); 
            }
        });
        
    })
});


