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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_concreto = 10;
$pageNum_concreto = 0;
if (isset($_GET['pageNum_concreto'])) {
  $pageNum_concreto = $_GET['pageNum_concreto'];
}
$startRow_concreto = $pageNum_concreto * $maxRows_concreto;

mysql_select_db($database_conex, $conex);
$query_concreto = "SELECT * FROM tblproductos WHERE tblproductos.intCategoria = 4";
$query_limit_concreto = sprintf("%s LIMIT %d, %d", $query_concreto, $startRow_concreto, $maxRows_concreto);
$concreto = mysql_query($query_limit_concreto, $conex) or die(mysql_error());
$row_concreto = mysql_fetch_assoc($concreto);

if (isset($_GET['totalRows_concreto'])) {
  $totalRows_concreto = $_GET['totalRows_concreto'];
} else {
  $all_concreto = mysql_query($query_concreto);
  $totalRows_concreto = mysql_num_rows($all_concreto);
}
$totalPages_concreto = ceil($totalRows_concreto/$maxRows_concreto)-1;$maxRows_concreto = 10;
$pageNum_concreto = 0;
if (isset($_GET['pageNum_concreto'])) {
  $pageNum_concreto = $_GET['pageNum_concreto'];
}
$startRow_concreto = $pageNum_concreto * $maxRows_concreto;

mysql_select_db($database_conex, $conex);
$query_concreto = "SELECT * FROM tblproductos WHERE tblproductos.intCategoria =4";
$query_limit_concreto = sprintf("%s LIMIT %d, %d", $query_concreto, $startRow_concreto, $maxRows_concreto);
$concreto = mysql_query($query_limit_concreto, $conex) or die(mysql_error());
$row_concreto = mysql_fetch_assoc($concreto);

if (isset($_GET['totalRows_concreto'])) {
  $totalRows_concreto = $_GET['totalRows_concreto'];
} else {
  $all_concreto = mysql_query($query_concreto);
  $totalRows_concreto = mysql_num_rows($all_concreto);
}
$totalPages_concreto = ceil($totalRows_concreto/$maxRows_concreto)-1;

$queryString_concreto = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_concreto") == false && 
        stristr($param, "totalRows_concreto") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_concreto = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_concreto = sprintf("&totalRows_concreto=%d%s", $totalRows_concreto, $queryString_concreto);
?>
<!DOCTYPE html>
<html><head>
<meta charset="UTF-8" />
<title>Categorias</title>
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
  
  <!--Top Navigation Start-->
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
      <div class="breadcrumb"> <a href="concreto.php">Home</a> » <a href="#">concreto</a></div>
      <!--Breadcrumb Part End-->
      <h1>concreto	</h1>
      
      <!--Product Grid Start-->
      <div class="product-grid">
        <?php do {
			require_once('class.imgsizer.php');
		$imgSizer = new imgSizer();
		$imgSizer->type      = "width";
	$imgSizer->max       = 165;
	$imgSizer->quality   = 8;
	$imgSizer->square    = true;
	$imgSizer->prefix    = "miniatura_";
	$imgSizer->folder    = "_min/";
	// Single image ##################################################
	$imgSizer->image     = '/tutorial/imagenes/productos/'.$row_concreto['strImagen'];
	$imgSizer->resize();
			 ?>
        
        
        
        <div>
            <div class="image"><a href="producto.php?producto=<?php echo $row_concreto['idProducto']; ?>"><img src="imagenes/productos/_min/miniatura_<?php echo $row_concreto['strImagen']; ?>" alt="<?php echo $row_concreto['strNombre']; ?>" /></a></div>
            <div class="name"><a href="producto.php?producto=<?php echo $row_concreto['idProducto']; ?>"><?php echo $row_concreto['strNombre']; ?></a></div>
            <div class="price"><?php echo $row_concreto['strClave']; ?></div>
            <div class="cart"><a href="producto.php?producto=<?php echo $row_concreto['idProducto']; ?>">
              <input name="Enviar" type="submit" class="button" onClick="addToCart('40');" value="Ver producto" />
            </div>
          </div>
   
          
          <?php } while ($row_concreto = mysql_fetch_assoc($concreto)); ?>
      </div>
      <!--Product Grid End-->
      <!--Pagination Part Start-->
      <div class="pagination">
      
      
        <?php do { ?>
          <div class="links"> <strong><a href="<?php printf("%s?pageNum_concreto=%d%s", $currentPage, max(0, $pageNum_concreto - 1), $queryString_concreto); ?>">anterior</a> <a href="<?php printf("%s?pageNum_concreto=%d%s", $currentPage, min($totalPages_concreto, $pageNum_concreto + 1), $queryString_concreto); ?>">siguiente</a></strong></div>
          <?php } while ($row_concreto = mysql_fetch_assoc($concreto)); ?>
      </div>
      <!--Pagination Part End-->
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
<?php
mysql_free_result($concreto);
?>
