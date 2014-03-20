var a = true;
$(document).ready(function() {

    $.fn.fullpage({
    	anchors: ['home', 'info', 'gallery', 'map', 'contact'],
    	menu: '#navlinks',
        slidesNavigation: false,

    	scrollingSpeed: 500,
    	easing: 'easeInOutSine',
    	paddingTop: '80px',
        fixedElements: '#navigation',
        loopBottom:true,
        scrollOverflow: true,
        autoScrolling: true,
    	afterRender: function(){
    		$('.fotorama').fotorama();
    	}
  	
    });
    $("#homeVid").get(0).play();

    $(".arrowDown").click(function(){
        $.fn.fullpage.moveSectionDown();
    })

    $("#pictures").on("click", function(){
        $.fn.fullpage.moveTo(3, 0); 


    });
    $("#movies").on("click", function(){
        $.fn.fullpage.moveTo(3, 1); 

    });

    $("#documentary").on("click", function(){
        $.fn.fullpage.moveTo(3, 2); 

    });


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
                    content : "<div id='editBox'><form method='POST' action='includes/pages.php?save'><p>Edit content</p><textarea class='ckeditor' name='contentBox'>"+text+"</textarea><br/><input type='submit' value='Save' class='saveButton'/><input type='hidden' name='contentId' value='"+data[0].id+"'/></form></div>"
                }); 
            }
        });
    })
    $("#readMoreHistory").on("click",function(e){
        e.preventDefault();
        var text;
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'http://localhost/kaunasMarket/includes/pages.php?content=history',
            success: function(data) {
                text = data[0].content;
                $.fancybox.open({
                    content : text
                }); 
            }
        });
    })
});


$(function() {
    
      $("#logo").click(function( event ) {
        if (a) {
        $( "#navigation #navlinks" ).slideDown( "slow" );
        
          };
    if (!a) {
      $( "#navigation #navlinks" ).slideUp( "slow" );
      };

    a = !a;
      });
  });


