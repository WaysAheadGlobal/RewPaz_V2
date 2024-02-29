$('.sign_form .check_boxgrp .custom-control-input').click(function () {
    $('.custom-radio').removeClass('selected');
     $(this).parents('.custom-radio').addClass('selected')
     
    });

    $(function () {
        $(".check_boxgrp [name=toggler]").each(function (i) {
            $(this).change(function () {
                $('#blk-1, #blk-2,#blk-3').hide();
                divId = 'blk-' + $(this).val();
                $("#" + divId).show('slow');
            });
        });
    });

    (function($) {
        'use strict';
        //Open submenu on hover in compact sidebar mode and horizontal menu mode
        $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function(ev) {
          var body = $('body');
          var sidebarIconOnly = body.hasClass("sidebar-icon-only");
          var sidebarFixed = body.hasClass("sidebar-fixed");
          if (!('ontouchstart' in document.documentElement)) {
            if (sidebarIconOnly) {
              if (sidebarFixed) {
                if (ev.type === 'mouseenter') {
                  body.removeClass('sidebar-icon-only');
                }
              } else {
                var $menuItem = $(this);
                if (ev.type === 'mouseenter') {
                  $menuItem.addClass('hover-open')
                } else {
                  $menuItem.removeClass('hover-open')
                }
              }
            }
          }
        });
      })(jQuery);


      (function($) {
        'use strict';
        $(function() {
          var body = $('body');
          var contentWrapper = $('.content-wrapper');
          var scroller = $('.container-scroller');
          var footer = $('.footer');
          var sidebar = $('.sidebar');
      
          //Add active class to nav-link based on url dynamically
          //Active class can be hard coded directly in html file also as required
      
          function addActiveClass(element) {
            if (current === "") {
              //for root url
              if (element.attr('href').indexOf("index.html") !== -1) {
                element.parents('.nav-item').last().addClass('active');
                if (element.parents('.sub-menu').length) {
                  element.closest('.collapse').addClass('show');
                  element.addClass('active');
                }
              }
            } else {
              //for other url
              if (element.attr('href').indexOf(current) !== -1) {
                element.parents('.nav-item').last().addClass('active');
                if (element.parents('.sub-menu').length) {
                  element.closest('.collapse').addClass('show');
                  element.addClass('active');
                }
                if (element.parents('.submenu-item').length) {
                  element.addClass('active');
                }
              }
            }
          }
      
          var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
          $('.nav li a', sidebar).each(function() {
            var $this = $(this);
            addActiveClass($this);
          })
      
          $('.horizontal-menu .nav li a').each(function() {
            var $this = $(this);
            addActiveClass($this);
          })
      
          //Close other submenu in sidebar on opening any
      
          sidebar.on('show.bs.collapse', '.collapse', function() {
            sidebar.find('.collapse.show').collapse('hide');
          });
      
          $(".aside-toggler").on("click", function () {
            $(".mail-sidebar,.chat-list-wrapper").toggleClass("menu-open");
          });
      
      
          //Change sidebar and content-wrapper height
          applyStyles();
      
          function applyStyles() {
            //Applying perfect scrollbar
            if (!body.hasClass("rtl")) {
              if ($('.settings-panel .tab-content .tab-pane.scroll-wrapper').length) {
                const settingsPanelScroll = new PerfectScrollbar('.settings-panel .tab-content .tab-pane.scroll-wrapper');
              }
              if ($('.chats').length) {
                const chatsScroll = new PerfectScrollbar('.chats');
              }
              if (body.hasClass("sidebar-fixed")) {
                var fixedSidebarScroll = new PerfectScrollbar('#sidebar .nav');
              }
            }
          }
      
          $('[data-toggle="minimize"]').on("click", function() {
            if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
              body.toggleClass('sidebar-hidden');
            } else {
              body.toggleClass('sidebar-icon-only');
            }
          });
      
          //checkbox and radios
        
        });

        $('.Reviews_slider').owlCarousel({
          loop:true,
          margin:30,
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
              items:2
            },
            1000:{
              items:2
            }
          }
        });

        
      



      })(jQuery);