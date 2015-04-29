<?php require_once('Connections/conex.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conex, $conex);
$query_detalle = "SELECT * FROM tblproductos WHERE tblproductos.intActivo = 1";
$detalle = mysql_query($query_detalle, $conex) or die(mysql_error());
$row_detalle = mysql_fetch_assoc($detalle);
$totalRows_detalle = mysql_num_rows($detalle);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Detalle</title>
<link href="image/favicon.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" media="screen" />
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
      <!--Breadcrumb Part Start-->
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="#">iPhone</a></div>
      <!--Breadcrumb Part End-->
      
      
      
      
      <div class="product-info">
        <div class="left">
          <div class="image"> <a href="image/product/iphone_1.jpg" title="iPhone" class="cloud-zoom colorbox" id='zoom1' rel="adjustX: 0, adjustY:0, tint:'#000000',tintOpacity:0.2, zoomWidth:360, position:'inside', showTitle:false"> <img src="image/product/iphone_1_350x350.jpg" title="#" alt="#" id="image" /><span id="zoom-image"><i class="zoom_bttn"></i> Zoom</span></a> </div>
          
          
        </div>
        <div class="right">
         <div class="name"><a href="producto.php?produto=<?php echo $row_detalle['idProducto']; ?>"><?php echo $row_detalle['strNombre']; ?></a></div>
          <div class="description"><br>
          
          
            <span>Clave del Producto:</span> In Stock</div>
            <div id="tabs" class="htabs"> <a href="#tab-description">Descripcion</a> <a href="#tab-review">Normativa</a> </div>
      <div id="tab-description" class="tab-content">
        <p>Inserta descripcion</p>
      </div>
      <div class="tab-content" id="tab-review">
        <div class="review-list">
          <div class="author"><b>normativa</b></div>
        </div>
      <!-- Related Products Start -->
      <!-- Related Products End -->    </h2>
      </div>
    </div>
          <div class="review"></div>
          <!-- AddThis Button BEGIN -->
        <!-- AddThis Button END --></div>
    </div>
      <!-- Tabs Start -->
      
    <!--Middle Part End-->
    <div class="clear"></div>
    
  </div>
</div>

<!--Footer Part Start-->
<?php include("includes/footer.php"); ?>
<!--Footer Part End-->
</body>
</html>
<?php
mysql_free_result($detalle);
?>
