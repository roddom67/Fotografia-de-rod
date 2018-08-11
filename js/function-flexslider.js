    $(window).load(function(){
	
		
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 110,
        itemMargin: 5,
        asNavFor: '#slider'
      });
      
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');

        }
      });
    });
  /* Menu Mobile */
 $('a#menu-icon').bind('click',function(){
   $(this).hasClass("menuactive")?$(this).removeClass("menuactive"):$(this).addClass("menuactive");
   $('#menutodo').toggle();
 });
