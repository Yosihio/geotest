<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Geotesst - Catalogo</title>
<link href="image/favicon.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen" />
<!-- CSS Part End-->
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/cloud_zoom.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.js"></script>
<!-- JS Part End-->
</head>
<body>
<div class="main-wrapper">
  <!-- Header Parts Start-->
  
<?php include("includes/header.php"); ?>
 <?php include("includes/menu.php"); ?> 
  <!--Top Navigation Start-->
  <div id="container">
    <!--Left Part-->
  <?php include("includes/sidebar.php"); ?>  
    <!--Left End-->
    <!--Middle Part Start-->
    <div id="content">
      <p class="welcome"><strong>Geotest ®<br>
      Geotecnia y Supervisión Técnica, S.A. de C.V.</strong></p>
      <!--Slideshow Part Start-->
  <?php include("includes/slider.php"); ?>    

      <!--Slideshow Part End-->
      <!--Featured Product Part Start-->
      <?php include("includes/productos.php"); ?>
      <!--Featured Product Part End-->
    </div>
    <!--Middle Part End-->
    <div class="clear"></div>
    
  </div>
</div>
<!--Footer Part Start-->
<?php include("includes/footer.php"); ?>
<!--Footer Part End-->
</body>
</html>