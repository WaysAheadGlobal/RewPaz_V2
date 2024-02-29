(function ($) {
	
	"use strict";

	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");
	        
	        $('a').each(function () {
	            $(this).removeClass('active');
	        })
	        $(this).addClass('active');
	      
	        var target = this.hash,
	        menu = target;
	       	var target = $(this.hash);
	        $('html, body').stop().animate({
	            scrollTop: (target.offset().top) - 79
	        }, 500, 'swing', function () {
	            // window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.navbar-nav a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.navbar-nav li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}

  $(window).scroll(function () {
    var sticky = $('.header_top'),
        scroll = $(window).scrollTop();
  
    if (scroll >= 60) sticky.addClass('top-fixed');
    else sticky.removeClass('top-fixed');
  });
  
  $('.slider_testi .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    autoplay:true,
    pagination:true,
    responsive:{
      0:{
        items:1
      },
      575:{
        items:1
      },
      768:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });

  $('.plan__navbar .plan_tab .item-tab .nav-link').click(function(){
    $(this).next('ul').slideToggle();
    
    $(this).parent().siblings().children('.plan__navbar .plan_tab ul').slideUp();
    $(this).addClass('active').parent().siblings().children().removeClass('active');
    if ($(this).attr("data-id").length != 0) {
       var ActSidebar = $(this).attr("data-id")
       $('.tab-cont .tab-pane').hide().removeClass('show');
       $('.tab-cont .tab-pane[data-value="'+ActSidebar+'"]').show().addClass('show');
    }
  });
  
    
})(window.jQuery);





