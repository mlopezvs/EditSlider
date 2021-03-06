<?php
//VARIABLES
$array=json_decode($_REQUEST["json"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>SLIDER REVOLUTION -  The Responsive Slider Plugin</title>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <!-- THE PREVIEW STYLE SHEETS, NO NEED TO LOAD IN YOUR DOM -->
    <link rel="stylesheet" type="text/css" href="css/noneed.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->    
     <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/extralayers.css" media="screen" />	
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>

				<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">

					<!-- MAIN IMAGE -->
					<img  alt="seabg1" data-lazyload="images/seabg1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<?php for($i=0; $i<count($array); $i++){
							if($array[$i]->fondo <> ""){
								$fondo="padding: 10px 20px; background: #".$array[$i]->fondo.";";
							}else{
								$fondo="";
							}
					?>

					<!-- LAYER NR. 4 -->
					<div style="font-size: <?php echo $array[$i]->tamano; ?>px; color: #<?php echo $array[$i]->color; ?>; <?php echo $fondo; ?>" class="tp-caption tp-resizeme"
						data-x="<?php echo $array[$i]->x; ?>"
						data-y="<?php echo $array[$i]->y; ?>" 
						data-speed="500"
						data-start="800"
						data-easing="Power3.easeInOut"><?php echo $array[$i]->texto; ?>
					</div>

					<?php } ?>				

				</li>
	
			</ul>

			<div class="tp-bannertimer"></div>

		</div>

	</div>

			<script type="text/javascript">

				jQuery(document).ready(function() {			
					
								
					jQuery('.tp-banner').show().revolution(
					{
						dottedOverlay:"none",
						delay:16000,
						startwidth:1170,
						startheight:600,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:5,
						
						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"preview4",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						swipe_velocity: 0.7,
						swipe_min_touches: 1,
						swipe_max_touches: 1,
						drag_block_vertical: false,
												
												parallax:"mouse",
						parallaxBgFreeze:"on",
						parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
												
						keyboardNavigation:"off",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"off",
						fullScreen:"on",

						spinner:"spinner4",
						
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						autoHeight:"off",						
						forceFullWidth:"off",						
												
												
												
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,						
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						fullScreenOffsetContainer: ".header"	
					});
					
									
				});	//ready
				
			</script>
			
<!-- END REVOLUTION SLIDER -->		
	</div>
</div>





</body>