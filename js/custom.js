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
  var win;
   $(".faded-item").bind("mouseenter mouseleave", function(e) {

      //console.log(e);
      if (e.type == "mouseenter")
      {
        $(this).stop(true, true).animate({"opacity" : 1}, "fast");
      }
      else
      {
        $(this).stop(true, true).animate({"opacity" : 0.5}, "fast");
      }
    });


  $(window).resize(function() {

	  $("body > .section")
	  	.width($(window).width())
	  	.height($(window).height());

    $("#s4-viewport").height($(window).height()  / 2);
    $("#s4-viewport").mCustomScrollbar();

    $("#johns-story").height($(window).height()  * 3 / 4);


    $("video").each(function(i, item) {


      var $this = $(this);

      $this.width($(window).width());
      $this.height("auto");
      $this.css("margin-left", "0");
/*
      if ($this.height() < $(window).height())
      {
        $this.height($(window).height());
        $this.width("auto");
        //$this.css("margin-left", 0 - ($this.width() - $(window).width())/2 );
        //$(this).width("100%");
      }

      if ($this.width() < $(window).width())
      {
        $this.width($(window).width());
        $this.height("auto");
        //$this.css("margin-left", 0 - ($this.height() - $(window).height())/2 );
        //$(this).width("100%");
      }
      */

    });
  });

  $(".map").height(screen.height * 0.60);

  $(window).trigger("resize");


  /* Incorporate Slide shows*/

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

   $(".human-story").colorbox({iframe:true, innerWidth:"90%", innerHeight: "90%" });

   var env = findBootstrapEnvironment();

//Remove video for handheld
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{
}
else
{

  $("#s1").prepend(
    '<video id="video-cover" src="./video/LoopFirstScreen_prores_Mp4_1080.mp4" class="hidden-xs hidden-sm" width="100%" autoplay muted loop style="position: absolute; top: 0; left: 0;">HTML 5 is needed</video>'
  );

  $("#s14").prepend(
    '<video id="video-baby" class="hidden-xs hidden-sm" src="./video/babyloop2-SD.mp4" width="100%" autoplay muted loop data-1180p="opacity: 0;" data-1190p="opacity: 1;" style="position: absolute; top: 0; left: 0;">HTML 5 is needed</video>'
  );

   /*VIDEO MUTE*/
    var video_cover = document.getElementById("video-cover");
      video_cover.volume = 0.0;

    var video_baby = document.getElementById("video-baby");
      video_baby.volume = 0.0;


}
 initialize_maps();

   if (env != "xs")
   {

       var s = skrollr.init({
          box: '200p'
       });

       skrollr.menu.init(s, {

        duration: function(currentTop, targetTop) {


            //By default, the duration is hardcoded at 500ms.
            var dura = Math.abs(currentTop - targetTop) * 0.8;
            return dura;

            //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
            //return Math.abs(currentTop - targetTop) * 10;
        }

       });
   }
   else
   {
     $(".section").css("position", "relative");

     $(".stage, .stage .stage-item").css("position", "absolute");

     $("body > .section").width("auto").height("auto");

     $(".absolute-staging").css("position", "relative");

     $(".relative-but-children-abs *, .absolute-position-content, .absolute-position-content *").css("position", "relative");

     $(window).unbind("resize");

     $("#s6, #s16").height($(window).height());

  /*
     $("body > #s2 > div.container-fluid,
        body > #s3 > div.container-fluid > .row,
        body > #s4 > div.container-fluid,
        body > #s11 > div.container-fluid,
        body > #s12 > div.container-fluid,
        body > #s15 > div.container-fluid,
        body > #s18 > div.container-fluid").css("position", "relative"); */
     $(".black-overlay").hide();

     $("#s15 #captions-area").css("position", "relative");
   }


   /*MAPBOX AREA*/
    $("#navigation-area a").tooltip();


    $("a.twitter-caller").bind("click", function() {

          if (win)
          {
            win.close();
          }

          show_text = $(this).attr("twitter-msg");

          var param = $.param({
            url: "http://bit.ly/SthSudan",
            /*via: "unocha",*/
            /*hashtags: "SouthSudan", */
            text: show_text,
            lang: 'en'
          });

          win = window.open("https://twitter.com/intent/tweet?" + param, "twitter", "height=300,width=600,modal=yes,alwaysRaised=yes");
          win.focus();

          $("#s15-slides").slidesjs("start");
    });

    $("a.facebook-caller").bind("click", function() {
          if (win)
          {
            win.close();
          }

          show_text = $(this).attr("facebook-msg");

          var param = $.param({
            u: "http://southsudan.messengersofhumanity.org",
            /*via: "unocha",*/
            /*hashtags: "SouthSudan", */
            text: show_text,
            lang: 'en'
          });

          win = window.open("https://www.facebook.com/sharer/sharer.php?" + param, "facebook", "height=300,width=600,modal=yes,alwaysRaised=yes");
          win.focus();

          $("#s15-slides").slidesjs("start");
    });


  function initialize_maps()
  {
    L.mapbox.accessToken = 'pk.eyJ1IjoicmVsaWVmd2ViIiwiYSI6IldYR2ZuV3cifQ.eSPZMZWE6UyLtO0OH_-qrw';
    var map1 = L.mapbox.map('map-one', 'reliefweb.j5j9a8aa', {
          minZoom: 6, maxZoom: 7, attributionControl: false,
          infoControl:true, doubleClickZoom: false, zoomControl: false
      }).setView([8.545, 26.422], 6);

    map1.on('dblclick', function (e) {
  //    console.log("ZOOM :: " , map1.getZoom());

      if (map1.getZoom() == 6)
      {
        map1.setView(e.latlng, map1.getZoom() + 1);
        $("#map1-instruction").html('Double click on the map to <strong class="highlight">zoom out</strong>');
      }
      else if (map1.getZoom() == 7)
      {
        map1.setView(e.latlng, map1.getZoom() - 1);
        $("#map1-instruction").html('Double click on the map to <strong class="highlight">zoom in</strong>');
      }


    });
    map1.gridControl.options.follow = true;
    map1.scrollWheelZoom.disable();

    /*  var map1 = L.mapbox.map('map-one', 'reliefweb.j5j9a8aa', { minZoom: 6, attributionControl: false,
          infoControl:true, zoomControl: false });

          map1.gridControl.options.follow = true; */

  //    new L.Control.Zoom({ position: 'bottomright' }).addTo(map1);


      var map2 = L.mapbox.map('map-two', 'reliefweb.j62j4f22', {
              minZoom: 6, maxZoom: 7, attributionControl: false,
              infoControl:true, zoomControl: false
          }).setView([8.545, 26.422], 6);


      map2.on('dblclick', function (e) {

        if (map2.getZoom() == 6)
        {
          map2.setView(e.latlng, 7);
          $("#map2-instruction").html('Double click on the map to <strong class="highlight">zoom out</strong>');

        }
        else if (map2.getZoom() == 7)
        {
          map2.zoomOut(1);
          //map2.setView(e.latlng, 6);
          $("#map2-instruction").html('Double click on the map to <strong class="highlight">zoom in</strong>');
        }
      });
  /*
      var map2 = L.mapbox.map('map-two', 'reliefweb.j62j4f22', {
              minZoom: 6, attributionControl: false,
              infoControl:true , zoomControl: false
          }).setView([7.542,29.399], 6);

      map2.gridControl.options.follow = true; */
      map2.gridControl.options.follow = true;
      map2.scrollWheelZoom.disable();

  //    new L.Control.Zoom({ position: 'bottomright' }).addTo(map2);

      $("#map-one-shadow").height($("#map-one").height());
      $("#map-two-shadow").height($("#map-two").height());

      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
      {
        map1.dragging.disable();
        map2.dragging.disable();
      }
  }


});
