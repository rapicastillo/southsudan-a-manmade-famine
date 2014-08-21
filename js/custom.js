function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env
        }
    };
}  

$(function() {

  $(window).resize(function() {

	  $("body > section")
	  	.width($(window).width())
	  	.height($(window).height());

    $("#s4-viewport").height($(window).height()  / 2);
    $("#s4-viewport").mCustomScrollbar();

    $("#johns-story").height($(window).height()  * 3 / 4);
  });

  $(".map").height(screen.height * 0.60);

  $(window).trigger("resize");


  /* Incorporate Slide shows*/
  var win;
  $("#s15-slides").slidesjs({
    width: screen.width,
    height: screen.height,
    play: {
    	effect: "fade",
    	auto: true,
    	interval: 5000
    },
    pagination: {
    	effect: "fade"
    },
     navigation: {
     	active: false
     },
    effect: {
    	fade : { 
    		speed: 1000,
    		crossfade: true
    	}
    },
    callback: {
    	loaded: function(number)
    	{
    		var _caption = $("#s15-slides [ind=" + number + "]").attr("title");
    		$("#s15-caption-area p").html(_caption + "<br/><a href='javascript: void(0);' class='tweet-button'><img src='./img/tweet.png' height='25px' /></a>");

        $("#s15-caption-area p a").bind("click", function() {
          if (win)
          {
            win.close();
          }

          show_text = $(this).find("p").text();

          var param = $.param({
            url: "http://www.unocha.org/south-sudan", 
            via: "unocha",
            hashtags: "SouthSudan",
            text: _caption
          });

          win = window.open("https://twitter.com/intent/tweet?" + param, "twitter", "height=300,width=600,modal=yes,alwaysRaised=yes");
          win.focus();
        });        
    	},
    	start: function(number)
    	{
      
      number = number + 1;

      if (number > 5) number = 1;

			var _caption = $("#s15-slides [ind=" + number + "]").attr("title");
    		$("#s15-caption-area p").html(_caption + "<br/><a href='javascript: void(0);' class='tweet-button'><img src='./img/tweet.png' height='25px' /></a>");
    		//console.log($("#s15-caption-area").width());

        $("#s15-caption-area p a").bind("click", function() {
          if (win)
          {
            win.close();
          }

          show_text = $(this).find("p").text();

          var param = $.param({
            url: "http://www.unocha.org/south-sudan", 
            via: "unocha",
            hashtags: "SouthSudan",
            text: _caption
          });

          win = window.open("https://twitter.com/intent/tweet?" + param, "twitter", "height=300,width=600,modal=yes,alwaysRaised=yes");
          win.focus();

          $("#s15-slides").slidesjs("start");
        });



    	}
    }
  });
   
   /* LIGHTBOX */
   $(".ss-youtube").colorbox({iframe:true, innerWidth:740, innerHeight: 500});

   var env = findBootstrapEnvironment();

   if (env != "xs" && env != "sm")
   {
   var s = skrollr.init({
      box: '200p'
   });

   skrollr.menu.init(s, {

    duration: function(currentTop, targetTop) {


        //By default, the duration is hardcoded at 500ms.
        var dura = Math.abs(currentTop - targetTop) * 0.8;
        console.log(currentTop, targetTop, "DURATION :: ", dura);
        return dura;

        //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
        //return Math.abs(currentTop - targetTop) * 10;
    }

   });
   }
   else
   {
     $("section").css("position", "relative");

     $(".stage, .stage .stage-item").css("position", "absolute");

     $("body > section").width("auto").height("auto");

     $(".absolute-staging").css("position", "relative");  

     $(".relative-but-children-abs *").css("position", "relative");
  
     $("body > section#s2 > div.container-fluid, body > section#s3 > div.container-fluid > .row, body > section#s4 > div.container-fluid, body > section#s11 > div.container-fluid, body > section#s12 > div.container-fluid, body > section#s15 > div.container-fluid, body > section#s18 > div.container-fluid").css("position", "relative");
     $(".black-overlay").hide();

     $("#s15 #captions-area").css("position", "relative");
   }


   /*MAPBOX AREA*/
   L.mapbox.accessToken = 'pk.eyJ1IjoicmVsaWVmd2ViIiwiYSI6IldYR2ZuV3cifQ.eSPZMZWE6UyLtO0OH_-qrw'; 

    var map1 = L.mapbox.map('map-one', 'reliefweb.j5j9a8aa', { minZoom: 6, attributionControl: false, 
        infoControl:true }); 

        map1.gridControl.options.follow = true; 


    var map2 = L.mapbox.map('map-two', 'reliefweb.j62j4f22', { 
            minZoom: 6, attributionControl: false, 
            infoControl:true 
        }).setView([7.542,29.399], 6); 
  
        map2.gridControl.options.follow = true; 
    
    map1.scrollWheelZoom.disable();
    map2.scrollWheelZoom.disable();

    $("#map-one-shadow").height($("#map-one").height());
    $("#map-two-shadow").height($("#map-two").height());

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) 
    {
      map1.dragging.disable();
      map2.dragging.disable();
    }

    $("#navigation-area a").tooltip();

     

});
