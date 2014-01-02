(function ($) {

  Drupal.behaviors.campointra = {
    attach: function(context) {
      // Get your Yeti started.
       $(document).ready(function(){
        /*  $("#content-likelist").mouseover(function(){
              $("#block-views-who-likes-block").show();

          })
           .mouseout(function(){
              $("#block-views-who-likes-block").hide();

          }); */        
          $(".node-forum-form #edit-taxonomy-forums-und option[value='_none']").text(' - Vælg et emne -');
          $("select#edit-og-group-ref-und option[value='_none']").text(' - Vælg en gruppe -');

          $(".page-messages .main ul.action-links li").css("display","none");
          $(".views-field-field-upload-filer .file a").attr({target: "_blank"});
          $('.views-exposed-form #edit-field-navn-value').focus();



          /* Menu active class */
          if (location.pathname.split("/")[1]) {
            $('.l-header-region li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
            $('.menu-block-5 li.menu-mlid-2 a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
          }
          if (!location.pathname.split("/")[2]) {
            $('.attachment li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
          }

          $('.view-group-menu-block li a[href^="/' + location.pathname.split("/")[1] + '/' + location.pathname.split("/")[2] + '"]').addClass('active');
		  
		  
		  $('#showMobileNav').on('click', function(e){
			
			$('.header-navigation-and-search').slideToggle(500);
			  
			e.preventDefault();  
			  
		  });
           if (location.pathname.split("/")[1] == 'messages' && (!location.pathname.split("/")[2])) {
              $(".main h3").text('Indbakke');
              $('.block-menu-menu-user-sidebar-menu li a[href="/user/messages"]').addClass('active');
           }		  		  
           if (location.pathname.split("/")[2] == 'messages' || 
             (location.pathname.split("/")[1] == 'messages' && location.pathname.split("/")[2] == 'list')) {
              $(".main h3").text('Indbakke');
              $(".main h3").css('display','block');
              $('.menu-block-5 li a[href^="/messages"]').addClass('active');
              $('.block-menu-menu-user-sidebar-menu li a[href="/user/messages"]').addClass('active');
           }
            if ((location.pathname.split("/")[1] == 'user' && (!location.pathname.split("/")[2])) || !location.pathname.split("/")[1]) {
              $(".not-logged-in .main h3").text('CenterCampo Intranet Login');
              $("head title").text("CenterCampo Intranet Login");
              
            }
            $(".profile .field-name-og-user-node a").click(function(){
                      return false; // prevents default action
            });
		
			
		  
       });
    }
  };

})(jQuery);
