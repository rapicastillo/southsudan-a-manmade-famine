<?php
  require_once("inc/Parsedown.inc");
  $Parsedown = new Parsedown();
  $language_options = array("es", "en");
  $language = isset( $_GET['lang'] ) ? $_GET['lang'] : "en";

  switch( $language )
  {
    case "es" :
      require_once("inc/es.inc");
      require_once("inc/johns-stories-es.inc");
      break;

    default:
      require_once("inc/en.inc");
      require_once("inc/johns-stories.inc");
      break;
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $text_script['site_title'] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" conelevent="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.css' rel='stylesheet' />

<meta property="og:title" content="A Man-made Catastrophe | A multimedia journey through South Sudan" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://bit.ly/SthSudan" />
<meta property="og:image" content="http://southsudan.messengersofhumanity.org/img/cover.jpg" />
<meta property="og:site_name" content="UNOCHA interactive" />
<meta property="og:description" content="<?php echo $metadata ?>" />



<!--[if !IE]>
	<link rel="stylesheet" href="./css/fonts.css">
<![endif]-->

<link rel="stylesheet" href="./css/colorbox.css">
<link rel="stylesheet" href="./css/custom.css">
<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css" />

<!-- Latest compiled and minified JavaScript -->


<!--[if IE]>
	<link rel="stylesheet" href="./css/custom-ie.css">
<![endif]-->


<!--[if lte IE 9]>
	<style>
		#s16 div.container-fluid,
		#s6 div.container-fluid
		{
			position: absolute;
			z-index: 100;
			width: 100%;
		}
	</style>
 <![endif]-->

</head>
<body data-0p="background-color: rgba(0,0,0,1);" data-649p="background-color: rgba(0,0,0,1);" data-650p="background-color: rgba(255,255,255,1);">

<!-- Navbar -->
	<nav id="top-nav" class="navbar navbar-fixed-top" role="navigation" data-40p="opacity: 0;" data-60p="opacity: 1;">
		<!--div id="progress-bar" data-0p="width: 0%" data-1450p="width: 100%">
			<div id="progress-bar-color"
				data-0p="background-color: rgb(221,238,220);"
				data-250p="background-color: rgb(248,234,23);"
				data-750p="background-color: rgb(230,121,38);"
				data-1050p="background-color: rgb(201,28,34);"
				data-1450p="background-color: rgb(96,10,13);"
				></div>
		</div-->
		<div  class="hidden-xs hidden-sm" id="chapter-bar-color"
				data-0p="right: 237px; background-color: rgb(221,238,220);"
				data-150p="right: 237px; background-color: rgb(221,238,220);"
				data-170p="right: 183px; background-color: rgb(248,234,23);"
				data-730p="right: 183px; background-color: rgb(248,234,23);"
				data-750p="right: 130px; background-color: rgb(230,121,38);"
				data-1030p="right: 130px; background-color: rgb(230,121,38);"
				data-1050p="right: 77px; background-color: rgb(201,28,34);"
				data-1430p="right: 77px; background-color: rgb(201,28,34);"
				data-1450p="right: 26px; background-color: rgb(96,10,13);"

		></div

		<div class="container-fluid">
			<!--
			<ul class="nav navbar-nav">
				<li><a href="http://www.messengersofhumanity.org" style="padding: 3px"><img src="./img/moh.png" height="40px"/></a></li>
				<li><a id="south-sudan-title" href="#">SOUTH SUDAN</a></li>

				<li><a>
						<span id="current-title-area" class="relative-but-children-abs">
							<span id="part-1" data-240p="opacity: 1;" data-250p="opacity: 0;">A man-made catastrophe</span>
							<span id="part-2" data-240p="opacity: 0;" data-250p="opacity: 1;"
											  data-740p="opacity: 1;" data-750p="opacity: 0;" >The violence</span>
							<span id="part-3" data-740p="opacity: 0;" data-750p="opacity: 1;"
											  data-1040p="opacity: 1;" data-1050p="opacity: 0;">Displacement</span>
							<span id="part-4" data-1040p="opacity: 0;" data-1050p="opacity: 1;"
											  data-1440p="opacity: 1;" data-1450p="opacity: 0;">The threat of famine</span>
							<span id="part-5" data-1440p="opacity: 0;" data-1450p="opacity: 1;">What can you do?</span>
						</span>
					</a>
				</li>
			</ul> -->

			<ul class="nav navbar-nav navbar-right main-nav-area" id="navigation-area">
				<li class="faded-item"><a href="javascript: void();" class="nav-share-button twitter-caller" twitter-msg="New interactive website! Visit, then help tell the world about what's happening in #SouthSudan RT!">
					<img src="http://ocha.smugmug.com/photos/i-dMF5DKB/0/O/i-dMF5DKB.gif" />
				</a></li>
				<li class="faded-item"><a href="javascript: void();" class="nav-share-button facebook-caller" >
					<img src="http://ocha.smugmug.com/photos/i-zhTjzvp/0/O/i-zhTjzvp.gif" />
				</a></li>
				<li class="hidden-xs hidden-sm"><a href="#main" id="chapter-0-img" data-menu-top="0p" title="A man-made catastrophe"
						data-toggle="tooltip"><img src="http://ocha.smugmug.com/photos/i-hpnd7DK/0/O/i-hpnd7DK.png" /></a></li>
				<li class="hidden-xs hidden-sm"><a href="#chapter-1" id="chapter-1-img" data-menu-top="250p" title="The violence"><img src="http://ocha.smugmug.com/photos/i-mkkp65r/0/O/i-mkkp65r.png" /></a></li>
				<li class="hidden-xs hidden-sm"><a href="#chapter-2" id="chapter-2-img" data-menu-top="750p" title="Displacement"><img src="http://ocha.smugmug.com/photos/i-6JmvFjf/0/O/i-6JmvFjf.png" /></a></li>
				<li class="hidden-xs hidden-sm"><a href="#chapter-3"  id="chapter-3-img" data-menu-top="1050p" title="The threat of famine"><img src="http://ocha.smugmug.com/photos/i-23ZxTsZ/0/O/i-23ZxTsZ.png" /></a></li>
				<li class="hidden-xs hidden-sm"><a href="#call-to-action" id="chapter-cta-img" data-menu-top="1610p" title="What can you do?"><img src="http://ocha.smugmug.com/photos/i-NHmcT5p/0/O/i-NHmcT5p.png" /></a></li>
			</ul>

		</div>
	</nav>
<!-- End of nav bar -->



<!--

	SECTION 1
-->
<div class="section"  id="s1" data--1p="transform: translate(0,0%);"
	data-70p="transform: translate(0,0%); opacity: 1" data-100p="opacity: 0; transform: translate(0,0%)"
	data-101p="transform: translate(0,-100%);"
	style="overflow: hidden">
	<div class="front-page-lang" style="position: absolute; top: 20px; right: 30px; height: 40px; z-index: 1000;">
            <!-- a href="javascript: void(0);" onclick="window.location='./ar.html'" style="margin: 0; padding: 10px; font-weight: bold; font-size: 23px; background-color: white; color: #DB4E44;">AR</a -->
            <?php foreach( $language_options as $opts ) : ?>
                <?php if ($opts != $language): ?>
                    <a href="?lang=<?php echo $opts ?>"
                      style="margin: 0; padding: 10px; font-weight: bold; font-size: 23px;"><?php echo strtoupper($opts); ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
            <a href="./fr.php"
            	style="margin: 0; padding: 10px; font-weight: bold; font-size: 23px;">
            	FR
           	</a>
            <!-- a href="javascript: void(0);" onclick="window.location='./'" style="margin: 0; padding: 10px; font-weight: bold; font-size: 20px;">English</a-->
    </div>


	<div class="black-overlay" data--1p="background-color: rgba(0,0,0,1); opacity: 0;" data-30p="opacity: 0" data-50p="opacity: 1;"></div>
	<div class="container-fluid" data-60p="opacity: 1;" data-70p="opacity: 0;">
		<div class="row margin-top-100">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center">
				<div class="title-area">
					<div class="main-item"><?php echo $text_script['title'] ?></div>
					<div class="secondary-item"><?php echo $text_script['subtitle'] ?></div>
					<p>&nbsp;</p>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<article data-20p="opacity: 0" data-40p="opacity: 1;">
					<p><?php echo $text_script['title_para']; ?>
					</p>
				</article>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

	<footer class="container-fluid" style="width: 100%">
		<div class="row">
			<p class="text-center">
				<a href="#screen-down" data-menu-top="120p" style="color: white">
					<sub class="text-center" style="line-height: 18px; text-align: center; ">
						<?php echo $text_script['scrolldown'] ?><br/>
						<img src="./img/s1-scroll-down.PNG" />
					</sub>
				</a>
			</p>
		</div>
	</footer>
</div>
<!--
	END OF SECTION 1
-->


<!--
	SECTION 2
-->
<div class="section"  style="z-index: 20;"  id="s2" data-49p="transform:translate(0,100%);"
		data-50p="transform: translate(0, 0%);opacity: 0;" data-100p="opacity: 1; transform: translate(0, 0%)"
		data-150p="opacity: 1; transform: translate(0, 0%)"
		data-199p="transform: translate(0,-100%); display: block" data-200p="display: none">
	<div class="black-overlay" data--1p="background-color: rgba(0,0,0,1);" data-100p="opacity: 1" data-180p="opacity: 0;" data-190p="opacity: 0;"></div>
	<div class="container-fluid">
		<div class="row margin-top-150">
			<div class="col-md-1"></div>
			<div class="col-sm-6 col-md-5" style="position: relative;">
				<p style="font-size: 28px;">

					<span data-120p="opacity:1" data-140p="opacity: 0;">
            <?php echo $text_script['page1']['para1'] ?>
					</span>
					<div
						data-120p="opacity: 0" data-140p="opacity: 1">
					<p class="orange-highlighter" style="font-size: 28px;">
						<?php echo $text_script['page1']['para2'] ?>
					</p>
					</div>
					</p>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
<!--
	END OF SECTION 2
-->

<!--
	SECTION 3c2-transmission-1.JPG
c2-transmission-2.JPG
c2-transmission-3.JPG
-->
<div class="section"  style="z-index: 10;" id="s3" data-149p="opacity: 0" data-150p="opacity: 1; " data-300p="transform: translate(0,0%);"
			data-310p="transform:translate(0,-100%); display: block;" data-311p="display: none;">
	<!-- div class="stage" style="overflow: hidden !important; width: 100%; height: 100%;">
		<div class="stage-item" id="chapter-1-bg" data-150p="transform: translate(-3%, 0); width: 120%;" data-400p="transform: translate(-1%, 0); width: 130%;"></div>
		<div class="stage-item" id="chapter-1-kid" data-150p="transform: translate(10%, 0)" data-400p=" transform: translate(3%, 0)"></div>
		<div class="stage-item" id="chapter-1-man" data-150p="transform: translate(-1%,0)" data-400p="transform:translate(2%, 0)"></div>
	</div -->
	<div class="container-fluid" data-250p="opacity: 1" data-260p="opacity: 0">
		<div class="row margin-top-100">
		<div class="col-md-1"></div>
		<div class="col-sm-6 col-md-5 text-center content-item" data-205p="opacity: 0;" data-220p="opacity: 1" >
			<h5><?php echo $text_script['page2']['subtitle']; ?><h5>
			<h1 data-205p="letter-spacing: 2px" data-300p="letter-spacing: 8px"><?php echo $text_script['page2']['title']; ?></h1>
			<p><?php echo $Parsedown->text($text_script['page2']['para1']); ?>
			</p>
		</div>
		</div>
	</div>
</div>

<div class="section"  id="s3-transition" data-249p="transform:translate(0,100%)"
			data-265p="transform:translate(0,0%); opacity: 0;"
			data-275p="opacity: 1;"
			data-320p="transform:translate(0,0%); opacity: 1"
			data-350p="transform:translate(0,-100%); opacity: 0">

	<div class="container-fluid">
		<div class="row margin-top-100">
			<div class="col-md-1"></div>
			<div class="col-sm-6 col-md-5 text-center">
				<p><?php echo $Parsedown->text($text_script['page2']['para2']); ?></p>
        <p><?php echo $Parsedown->text($text_script['page2']['para3']); ?></p>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<!--
	END OF SECTION 3
-->


<!-- START OF SECTION 4 -->
<div class="section"  id="s4" data-319p="transform:translate(0,100%);"
	data-320p="transform:translate(0,0%); opacity: 0;" data-350p="opacity: 1"
	data-600p="transform:translate(0,0%);"
	data-650p="transform:translate(0,-100%);"

	style="overflow: hidden;">

	<!-- div class="black-overlay" data-340p="opacity: 0;" data-370p="opacity: 1"></div -->
	<div class="stage-container">
		<div class="stage" style="overflow: hidden !important; width: 100%; height: 100%;">
			<div class="stage-item" id="chapter-1-military" style="background-position: -10% 30%"
			data-300p="width: 130%; transform: translate(-20%, 0);" data-500p="transform: translate(0%, 0);"
			data-650p="display: block;" data-651p="display: none;"></div>

			<div class="stage-item" id="chapter-1-johnmamer" data-650p="display: block;" data-651p="display: none;"></div>
		</div>

		<div class="container-fluid absolute-position-content" data-400p="opacity: 1" data-450p="opacity: 0"
			data-650p="display: block;" data-651p="display: none;">
			<div class="row margin-top-150">
				<div class="col-sm-2 col-md-2"></div>
				<div class="col-sm-3 col-md-3" data-340p="opacity: 0;" data-370p="opacity: 1"></div>
				<div class="col-sm-6 col-md-6 orange-highlighter" data-340p="opacity: 0;" data-370p="opacity: 1" >
					<div class="well remove-bg" id="john-mamer-intro">
						<p><?php echo $Parsedown->text($text_script['page2']['para4']); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="black-overlay" data-450p="opacity: 0;" data-500p="opacity: 1"></div>
		<div class="container-fluid absolute-position-content" id="s4-speech" data-449p="transform: translate(100%, 0)" data-450p="transform: translate(0%, 0); display: block; opacity: 0;" data-500p="opacity: 1">
			<div class="row margin-top-100">
				<div class="col-sm-4 col-md-4 col-lg-3" >
					<h2><?php echo $text_script['page2']['para5']; ?></h2>
					<div><sub><?php echo $text_script['page2']['transcript_title']; ?></sub></div>
					<div id="s4-viewport" style="position: relative;">

						<div id="s4-scroller"> <!-- data-500p="margin-top: 0%;" data-600p="margin-top: -100%; "-->
							<?php echo $Parsedown->text($johns_transcript); ?>
						</div>
					</div>
				</div>




				<div class="col-sm-6 col-md-8 col-lg-9">
					<div>
							<iframe src="//www.youtube.com/embed/QorXPfA0OgU" id="johns-story" width="100%" height="100%" frameborder="0" allowTransparency="true" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END OF SECTION 4 -->

<!-- SECTION 5 -->
<!-- section id="s5">
	<div class="black-overlay"></div>

</div -->
<!-- END OF SECTION 5 -->

<!-- SECTION 6 MAP 1-->
<div class="section"  id="s6"  data-600p="transform:translate(0,100%);" data-650p="transform:translate(0,0%); opacity: 1;" data-660p="opacity: 1;" data-700p="opacity: 0; transform:translate(0,0%);" data-701p="transform:translate(0, -100%);">
	<div id='map-one' class='map'> </div>
	<div class="container-fluid" style="z-index: 100;">
		<div class="row margin-top-100">
			<div class="col-sm-6 col-md-4" >
				<div class="well remove-bg" style=" background: none; background-color: rgba(0,0,0,0.6); padding: 20px 20px 20px 20px; ">
				<h1 style="color: white"><?php echo $text_script['page2']['interactive_map_title']; ?></h1>
				<p style="font-size: 18px;">
          <?php echo $Parsedown->text($text_script['page2']['para6']); ?>
				</p>
				<p style="font-size: 18px"><?php echo $Parsedown->text($text_script['page2']['para7']); ?></p>

				<p style="font-size: 18px">
					<span class="glyphicon glyphicon-info-sign"></span>
					<span id="map1-instruction"><?php echo $text_script['page2']['para8']; ?></span>.
				</p>
				</div>

			</div>
		</div>
	</div>

	<footer class="container-fluid" style="font-size: 10px;">



			<div class="row">
				<div class="col-md-8"><sub><?php echo $text_script['page2']['disclaimer']; ?></sub>
				</div>
			</div>

	</footer>

</div>
<div class="section"  id="s6-transition" data-664p="transform: translate(0,100%); display: block;" data-665p="transform:translate(0,0%); opacity: 0;" data-700p="opacity: 1" data-730p="opacity: 1" data-750p="opacity: 0;" data-751p="display: none;">
	<div class="container-fluid" data-705p="opacity: 0" data-715p="opacity: 1" data-725p="opacity: 1"
		data-730p="opacity: 0" data-735p="opacity: 0;">
		<div class="row margin-top-150">
			<div class="col-md-2">
			</div>
			<div class="col-md-8 text-center">
				<p><?php echo $Parsedown->text($text_script['page2']['para9']); ?></p>
			</div>
		</div>
	</div>
</div>
<!-- END OF SECTION 6 -->

<!-- SECTION 7 -->
<div class="section"  id="s7"
	data-729p="transform:translate(0,100%);"
	data-730p="transform:translate(0,0%); opacity: 0;"
	data-750p="opacity:1;"
	data-800p="transform: translate(0,0%); opacity: 1;"
	data-825p="transform: translate(0,-50%); opacity: 1;"
	data-875p="opacity: 1"
	data-900p="opacity: 0"
	data-901p="transform: translate(0,-100%);">
	<div class="stage-container">
		<div class="stage">
			<div class="stage-item" id="chapter-7-desat"
			data-759p="display: none;"
			data-760p="display: block; opacity: 0;" data-780p="opacity: 1;"></div>
		</div>

		<div class="container-fluid">
			<div class="row margin-top-50"></div>
			<div class="row margin-top-50"></div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 text-center">
					<h5><?php echo $text_script['page3']['subtitle']; ?></h5>
					<h1 data-730p="letter-spacing: 2px" data-850p="letter-spacing: 8px">
            <?php echo $text_script['page3']['title']; ?></h1>
					<p>
            <?php echo $Parsedown->text($text_script['page3']['spiel']); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SECTION 7 -->

<!-- SECTION 8 -->
<div class="section"  id="s8" data-800p="transform:translate(0,100%);" data-825p="transform:translate(0,50%)"
		data-850p="transform: translate(0,50%); opacity: 1;" data-875p="opacity: 1"
		data-900p="opacity: 0;"
		data-901p="transform: translate(0,-100%);">
	<div class="container-fluid">
		<div class="row margin-top-25">
			<div class="col-xs-4 col-sm-4 col-md-4" style="position: relative;">
				<img src="http://ocha.smugmug.com/photos/i-BJ52Fgk/0/O/i-BJ52Fgk.jpg" width="100%" />
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">
				<img src="http://ocha.smugmug.com/photos/i-zd5T6GG/0/O/i-zd5T6GG.png" width="100%"/>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 orange-highlighter text-left">
				<p><?php echo $Parsedown->text($text_script['page3']['slide1']); ?>
</p>
			</div>
		</div>
	</div>
</div>


<!-- END OF SECTION 8 -->

<!-- SECTION 9 -->
<?php /*
<div class="section"  id="s9" data-874p="transform:translate(0,100%);" data-875p="transform:translate(0,0%); opacity: 0;"
	data-925p="opacity: 1; transform:translate(0,0%);"
	data-950p="transform:translate(0,-100%);"
	>
	<div class="container-fluid">
		<div class="row margin-top-150"></div>
		<div class="row">
			<div class="col-md-12 text-center">

			</div>
		</div>
	</div>
</div>
<?php */ ?>
<!-- END OF SECTION 9 -->

<!-- SECTION 10 -->
<div class="section"  id="s10" data-849p="transform:translate(0,100%); opacity: 0;"
		data-850p="transform: translate(0,0%); opacity: 0;" data-900p="transform:translate(0,0%); opacity: 1;"
		data-935p="transform:translate(0,0%); opacity: 1;"
		data-950p="transform:translate(0,-100%); opacity: 0;">
	<div class="container-fluid" data-915p="opacity: 0" data-925p="opacity:1">
		<div class="row margin-top-150">
			<div class="col-sm-8 col-md-8"></div>
			<div class="col-sm-4 col-md-3 text-left">
				<div class="well remove-bg translucent-white-bg">
					<?php echo $Parsedown->text($text_script['page3']['slide2']); ?>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
</div>
<!-- END OF SECTION 10 -->

<!-- SECTION 11 -->
<div class="section"  id="s11" data-924p="transform:translate(0,100%);" data-935p="transform:translate(0,0%); opacity: 0;"
	data-950p="opacity: 1;" data-975p="opacity: 1;" data-990p="opacity: 0" data-1001p="transform:translate(0,-100%)">
	<div class="stage-container">
		<div class="container-fluid absolute-position-content">
			<div class="row">
				<div class="col-sm-2 col-md-2"></div>
				<div class="col-md-4 col-sm-4 ">
					<?php echo $Parsedown->text($text_script['page3']['slide3']); ?>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a class="ss-youtube" href="http://player.vimeo.com/video/105393643?rel=0&amp;wmode=transparent&amp;autoplay=1">
					<img src="http://ocha.smugmug.com/photos/i-jrtz4pd/0/O/i-jrtz4pd.png" width="100%"/>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="section"  id="s11-transition"
	data-974p="transform: translate(0,100%); display: block;" data-975p="transform:translate(0,0%); opacity: 0;"
	data-990p="opacity: 1" data-1000p="opacity: 1"
	data-1050p="opacity: 0;" data-1051p="display: none;">

	<div class="container-fluid" data-995p="opacity: 0" data-1005p="opacity: 1">
		<div class="row margin-top-50">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center">
				<p>
          <?php echo $Parsedown->text($text_script['page3']['slide4']); ?>

				</p>
			</div>
		</div>
	</div>
</div>
<!-- END OF SECTION 11 -->

<!-- SECTION 12 -->
<div class="section"  id="s12"
	style="overflow: hidden;"
	data-1024p="transform:translate(0,100%);"
				data-1025p="transform:translate(0,0%); opacity: 0;"
				data-1050p="transform:translate(0,0%); opacity: 1;"
				data-1060p="transform:translate(0,0%);"
				data-1100p="transform:translate(0,-100%)">

	<div class="stage-container">
		<div class="container-fluid absolute-position-content">
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6 text-right">
					<div class="well remove-bg">
						<h1 data-1025p="letter-spacing: 2px" data-1100p="letter-spacing: 8px">
              <?php echo $text_script['page4']['title']; ?></h1>
						<p>
              <?php echo $Parsedown->text($text_script['page4']['spiel']); ?>
					</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- END OF SECTION 12 -->


<!-- SECTION 13 -->
<div class="section"  id="s13" data-1060p="transform:translate(0,100%);" data-1100p="transform:translate(0,-0%)" data-1110p="transform:translate(0,0%); opacity: 1;" data-1150p="transform:translate(0,0%); opacity: 0;"
	data-1151p="transform:translate(0,-100%);"
>
	<div class="container-fluid">
		<div class="row margin-top-100">
			<div class="col-sm-7 col-md-8"></div>
			<div class="col-sm-5 col-md-4 text-right">
				<div class="well remove-bg" style="background: none; border: none; box-shadow: none;">
					 <?php echo $Parsedown->text($text_script['page4']['slide1']); ?>


				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
<!-- END OF SECTION 13 -->

<div class="section"  id="s14" data-1109p="transform:translate(0,100%);" data-1110p="transform:translate(0,0%); opacity: 0" data-1150p="opacity: 1;"
		data-1200p="transform:translate(0,0%); opacity: 1;" data-1250p="transform:translate(0,-100%); opacity: 0">

	<div class="container-fluid"
		data-1175p="opacity: 1; display: block;"
		data-1180p="opacity: 0" data-1181p="display: none;">
		<div class="row margin-top-100">
			<div class="col-md-1"></div>
			<div class="col-sm-5 col-md-5 orange-highlighter">
				<div >
          <?php echo $Parsedown->text($text_script['page4']['slide2']); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" data-1180p="opacity: 0;" data-1190p="opacity: 1">
		<div class="row margin-top-100">
			<div class="col-sm-4 col-md-3">
				<div>
          <?php echo $Parsedown->text($text_script['page4']['slide3']); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- SLIDE SHOW AREA -->
<div class="section"  id="s15" data-1200p="transform: translate(0,100%);" data-1201p="transform:translate(0,0%); opacity: 0;" data-1250p="opacity: 1" data-1305p="transform:translate(0,0%);" data-1350p="transform:translate(0,-100%);">
	<div class="container-fluid">
		<?php /*
		<div class="row">
			<div class="col-md-12">
				<div id="s15-slides">
				    <img ind="1" src="http://ocha.smugmug.com/Countries/South-Sudan/South-Sudan-launched-of-revise/i-MBxbskq/0/X2/OCHA_Tomping_03-X2.jpg"
				    		title="The humanitarian crisis in South Sudan has caused immense human suffering. Even now, eight months since the fighting began, the situation continues to decline catastrophically.">
				    <img ind="2" src="http://ocha.smugmug.com/Countries/South-Sudan/South-Sudan-launched-of-revise/i-g2DSHFS/0/X3/OCHA_Tomping_18-X3.jpg"
				    		title="The UN estimates that 3.9 million people – just under 35 per cent of the entire population – are food insecure. The risk of this spilling into famine is high and increasing every day.">
				    <img ind="3" src="http://ocha.smugmug.com/Countries/South-Sudan/South-Sudan-launched-of-revise/i-dJND5DJ/0/X3/OCHA_Tomping_29-X3.jpg"
				    		title="This is a man-made catastrophe. If people had been able to plant their crops, if markets hadn’t been destroyed, the threat of famine could have been avoided.">
				    <img ind="4" src="http://ocha.smugmug.com/Countries/South-Sudan/South-Sudan-launched-of-revise/i-87Lq95T/0/X3/OCHA_Tomping_25-X3.jpg"
				    		title="Aid agencies are doing all they can to respond. Their task is made harder by the fact that they have only received half of the funds they need.">
				    <img ind="5" src="http://ocha.smugmug.com/Countries/South-Sudan/South-Sudan-launched-of-revise/i-snjPLmK/0/X3/OCHA_Tomping_15-X3.jpg"
				    		title="This is a crisis of devastating proportions.">
				</div>
			</div>
		</div>
		<div class="row" id="captions-area">
			<div class="col-md-8"></div>
			<div class="col-md-4 col-xs-12 tranparent-brown" id="s15-caption-area">
				<p></p>
			</div>
		</div>
		*/ ?>
		<div class="row margin-top-100">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<div data-1260p="opacity: 0" data-1270p="opacity: 1" data-1280p="opacity: 1" data-1290p="opacity: 0">
          <?php echo $Parsedown->text($text_script['page4']['slide4']); ?>


		</div>
		<div data-1290p="opacity: 0" data-1300p="opacity: 1">
          <?php echo $Parsedown->text($text_script['page4']['slide5']); ?>
</div>
			</div>
		</div>
	</div>
</div>


<!-- SECTION 16 MAP AREA -->
<div class="section"  id="s16" data-1305p="transform:translate(0,100%);" data-1350p="transform:translate(0,0%);"
				  data-1355p="transform:translate(0,0%);  opacity: 1" data-1400p=" opacity: 0;" data-1401p="transform:translate(0,-100%);">

	<div id='map-two' class='map' > </div>
	<div class="container-fluid" style="z-index: 100;">
		<div class="row margin-top-100">
			<div class="col-sm-5 col-md-4 text-left">
				<div class="well" style=" background: none; background-color: rgba(255,255,255,0.6); padding: 20px 20px 20px 20px; ">
          <?php echo $Parsedown->text($text_script['page4']['map_text']); ?>
					</div>
			</div>


		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">

			</div>
		</div>
	</div>
	<footer class="container-fluid" style="font-size: 10px;">



		<div class="row">
			<div class="col-md-8">
        <?php echo $text_script['page4']['disclaimer']; ?>
			</div>
		</div>
	</footer>
</div>
<!-- END OF SECTION 16 -->

<div class="section"  id="s17" data--1p="transform:translate(0,100%);"
	data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);  opacity: 0" data-1400p=" opacity: 1;"
	data-1450p="transform:translate(0,0%);" data-1500p="transform:translate(0,-100%);"
	>
	<div class="stage-container" >
		<div class="stage" data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);">
			<img class="stage-item" src="./img/s18-img-1.png" data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);" width="100%" data-1417p="opacity: 1;"/>
			<img class="stage-item" src="./img/s18-img-2.png" data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);" width="100%" data-1410p="opacity: 0;" data-1417p="opacity: 0;"  data-1425p="opacity: 1;"/>
			<img class="stage-item" src="./img/s18-img-3.png" data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);" width="100%" data-1420p="opacity: 0;" data-1427p="opacity: 0;" data-1435p="opacity: 1;"/>
			<img class="stage-item" src="./img/s18-img-4.png" data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);" width="100%" data-1430p="opacity: 0;" data-1437p="opacity: 0;" data-1445p="opacity: 1;" />
			<img class="stage-item" src="./img/s18-img-4.png" data-1354p="transform:translate(0,100%);" data-1355p="transform:translate(0,0%);" width="100%" style="position: relative; opacity: 0;"/>
		</div>

		<div class="container-fluid">
			<div class="row margin-top-100">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center relative-but-children-abs">

				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row margin-top-100">
				<div class="col-md-7 col-sm-7"></div>
				<div class="col-md-4 col-sm-5 text-right relative-but-children-abs">

					<p data-1410p="opacity: 1; top: 0;" data-1415p="opacity: 1;" data-1417p="opacity: 1;" data-1420p="opacity: 0;"><?php echo $text_script['page4']['slide6_a']; ?></p>

					<p data-1417p="opacity: 0; top: 20px;" data-1420p="opacity: 1; top: 0;" data-1425p="opacity: 1;" data-1427p="opacity: 1;"  data-1430p="opacity: 0;"><?php echo $text_script['page4']['slide6_b']; ?></p>

					<p data-1427p="opacity: 0; top: 20px" data-1430p="opacity: 1; top: 0;" data-1435p="opacity: 1;" data-1437p="opacity: 1;" data-1440p="opacity: 0;"><?php echo $text_script['page4']['slide6_c']; ?></p>

					<p data-1437p="opacity: 0; top: 20px" data-1440p="opacity: 1; top: 0;" ><?php echo $text_script['page4']['slide6_d']; ?></p>

				</div>
			</div>
		</div>
		<footer>
			<sub style="margin-top: 100px;"><?php echo $text_script['page4']['slide_disclaimer']; ?></sub>
		</footer>
	</div>
</div>

<div class="section"  id="s18" data-1450p="transform:translate(0,100%);" data-1500p="transform:translate(0,0%);">
	<div class="stage-container">
		<div class="container-fluid absolute-position-content" data-1510p="opacity: 0" data-1520p="opacity: 1" data-1540p="opacity: 1" data-1550p="opacity: 0">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p class="text-left" style="font-size: 200%; text-shadow: 1px 1px 1px rgba(255,255,255,0.3);">
            <?php echo $text_script['page4']['toby_quote']; ?>
					</p>
					<p class="text-right" style="font-size: 150%; text-shadow: 1px 1px 1px rgba(255,255,255,0.3)">
            <?php echo $text_script['page4']['toby_source']; ?>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="section"  id="s19" data-1449p="transform:translate(0,100%);" data-1550p="opacity: 0; transform:translate(0,0%);" data-1610p="opacity: 1">

	<div class="stage-container">
		<div class="container">

			<div class="row margin-top-50">
				<div class="col-md-1"></div>
				<div class="col-md-10 text-center">
					<h1>
            <?php echo $text_script['cta']['title']; ?>
					</h1>
				</div>
				<div class="col-md-1"></div>
			</div>
			<!-- FOR CALL TO ACTIONS -->
			<div class="row">

						<div class="col-md-12">
							<div class="row text-center">
								<div class="col-md-8 brown-background">
									<div class="well">
										<h3><?php echo $text_script['cta']['cta1'] ?></h3>
										<p class="text-left"><?php echo $text_script['cta']['cta1_text'] ?></p>
										<div class="container-fluid">
											<div class="row">
												<div class="col-sm-4 col-md-4">
													<a href="javascript: void(0);" class="twitter-caller"
                            twitter-msg="<?php echo $text_script['cta']['tweet'] ?>">
														<span class="circle">
															<span class="circle-child">
                                <?php echo $text_script['cta']['tweet'] ?>
															</span>
														</span>
													</a>
												</div>
												<div class="col-sm-4 col-md-4">
													<a href="javascript: void(0);" class="twitter-caller"
                          twitter-msg="<?php echo $text_script['cta']['tweet_new'] ?>">
														<span class="circle">
															<span class="circle-child">
																<?php echo $text_script['cta']['tweet_new'] ?>
															<span>
														</span>
													</a>
												</div>
												<div class="col-sm-4 col-md-4">
													<a href="javascript: void(0);" class="twitter-caller" twitter-msg="<?php echo $text_script['cta']['tweet_civilians'] ?>">
														<span class="circle">
															<span class="circle-child"><?php echo $text_script['cta']['tweet_civilians'] ?></span>
														</span>
													</a>
												</div>
											</div>
										</div>

										<!--
										<a href="javascript: void(0);" class="btn btn-default pull-right twitter-caller" twitter-msg="Stop the fighting. RT if you agree, #SouthSudan deserves better.">Take a stand</a>
										-->
										<div style="clear: both"></div>
									</div>
								</div>
								<div class="col-md-4 hidden-sm hidden-xs">
									<div class="row">
										<div class="col-md-12 brown-background">
											<div class="well">
												<h3><?php echo $text_script['cta']['donate'] ?></h3>
												<p class="text-left"><?php echo $text_script['cta']['donate_spiel'] ?></p>
												<a target="_blank" href="https://secure.globalproblems-globalsolutions.org/site/Donation2;jsessionid=A68240A1B2D11F3FFD196DB91020957E.app246a?df_id=7642&7642.donation=form1" class="btn btn-default pull-right"><?php echo $text_script['cta']['donate_button'] ?></a>
												<div style="clear: both"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 brown-background">
											<div class="well">
												<h3><?php echo $text_script['cta']['more_info'] ?></h3>
												<p class="text-left"><?php echo $text_script['cta']['more_info_text'] ?></p>
												<a href="http://www.unocha.org/south-sudan" target="_blank" class="btn btn-default pull-right"><?php echo $text_script['cta']['more_info_button'] ?></a>
												<div style="clear: both"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


		</div>

		<footer class="container-fluid">
			<div class="row">

								<div class="col-md-1"></div>
								<div class="col-md-10 brown-background" >

											<div style="position: relative;">
											<nav>
												<ul style="padding: 0;">
													<li class="pull-left"><a target="_blank" href="http://www.messengersofhumanity.org" style="padding: 3px"><img src="http://ocha.smugmug.com/photos/i-b6Xnk7V/0/O/i-b6Xnk7V.png" height="40px"/></a></li>
													<li class="pull-left"><a target="_blank" href="http://twitter.com/UNOCHA"><img src="http://ocha.smugmug.com/photos/i-QGqf5Mb/0/O/i-QGqf5Mb.png" height="30px" /></a></li>
													<li class="pull-left"><a target="_blank" href="http://www.facebook.com/UNOCHA"><img src="http://ocha.smugmug.com/photos/i-BLmztZ5/0/O/i-BLmztZ5.png" height="30px"  /></a></li>

												</ul>
											</nav>
											</div>

											<div class="clear" style="clear: both;"></div>
											<sub><?php echo $text_script['cta']['credits'] ?></sub>


								</div>

			</div>
		</footer>
	</div>

</div>
<div id="skrollr-body"></div>


<!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script src="js/jquery.slides.min.js"></script>
  <script src="js/jquery.colorbox-min.js"></script>
  <script src="js/skrollr.min.js"></script>
  <!--[if lt IE 9]>
	<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
  <![endif]-->

  <script src="js/skrollr.menu.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.3/mapbox.js'></script>
<!--[if lt IE 9]>
  <script src="js/respond.src.js"></script>
<![endif]-->
  <script src="js/custom.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-1433955-42', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
