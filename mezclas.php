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

$maxRows_mezclas = 10;
$pageNum_mezclas = 0;
if (isset($_GET['pageNum_mezclas'])) {
  $pageNum_mezclas = $_GET['pageNum_mezclas'];
}
$startRow_mezclas = $pageNum_mezclas * $maxRows_mezclas;

mysql_select_db($database_conex, $conex);
$query_mezclas = "SELECT * FROM tblproductos WHERE tblproductos.intCategoria =2";
$query_limit_mezclas = sprintf("%s LIMIT %d, %d", $query_mezclas, $startRow_mezclas, $maxRows_mezclas);
$mezclas = mysql_query($query_limit_mezclas, $conex) or die(mysql_error());
$row_mezclas = mysql_fetch_assoc($mezclas);

if (isset($_GET['totalRows_mezclas'])) {
  $totalRows_mezclas = $_GET['totalRows_mezclas'];
} else {
  $all_mezclas = mysql_query($query_mezclas);
  $totalRows_mezclas = mysql_num_rows($all_mezclas);
}
$totalPages_mezclas = ceil($totalRows_mezclas/$maxRows_mezclas = 10;
$pageNum_mezclas = 0;
if (isset($_GET['pageNum_mezclas'])) {
  $pageNum_mezclas = $_GET['pageNum_mezclas'];
}
$startRow_mezclas = $pageNum_mezclas * $maxRows_mezclas;

mysql_select_db($database_conex, $conex);
$query_mezclas = "SELECT * FROM tblproductos WHERE tblproductos.intCategoria =6";
$query_limit_mezclas = sprintf("%s LIMIT %d, %d", $query_mezclas, $startRow_mezclas, $maxRows_mezclas);
$mezclas = mysql_query($query_limit_mezclas, $conex) or die(mysql_error());
$row_mezclas = mysql_fetch_assoc($mezclas);

if (isset($_GET['totalRows_mezclas'])) {
  $totalRows_mezclas = $_GET['totalRows_mezclas'];
} else {
  $all_mezclas = mysql_query($query_mezclas);
  $totalRows_mezclas = mysql_num_rows($all_mezclas);
}
$totalPages_mezclas = ceil($totalRows_mezclas/$maxRows_mezclas)-1;$maxRows_mezclas = 10;
$pageNum_mezclas = 0;
if (isset($_GET['pageNum_mezclas'])) {
  $pageNum_mezclas = $_GET['pageNum_mezclas'];
}
$startRow_mezclas = $pageNum_mezclas * $maxRows_mezclas;

mysql_select_db($database_conex, $conex);
$query_mezclas = "SELECT * FROM tblproductos WHERE tblproductos.intCategoria =6";
$query_limit_mezclas = sprintf("%s LIMIT %d, %d", $query_mezclas, $startRow_mezclas, $maxRows_mezclas);
$mezclas = mysql_query($query_limit_mezclas, $conex) or die(mysql_error());
$row_mezclas = mysql_fetch_assoc($mezclas);

if (isset($_GET['totalRows_mezclas'])) {
  $totalRows_mezclas = $_GET['totalRows_mezclas'];
} else {
  $all_mezclas = mysql_query($query_mezclas);
  $totalRows_mezclas = mysql_num_rows($all_mezclas);
}
$totalPages_mezclas = ceil($totalRows_mezclas/$maxRows_mezclas)-1;

$queryString_mezclas = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_mezclas") == false && 
        stristr($param, "totalRows_mezclas") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_mezclas = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_mezclas = sprintf("&totalRows_mezclas=%d%s", $totalRows_mezclas, $queryString_mezclas);
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
      <div class="breadcrumb"> <a href="mezclas.php">Home</a> » <a href="#">mezclas</a></div>
      <!--Breadcrumb Part End-->
      <h1>mezclas	</h1>
      
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
	$imgSizer->image     = '/tutorial/imagenes/productos/'.$row_mezclas['strImagen'];
	$imgSizer->resize();
			 ?>
        
        
        
        <div>
            <div class="image"><a href="producto.php?producto=<?php echo $row_mezclas['idProducto']; ?>"><img src="imagenes/productos/_min/miniatura_<?php echo $row_mezclas['strImagen']; ?>" alt="<?php echo $row_mezclas['strNombre']; ?>" /></a></div>
            <div class="name"><a href="producto.php?producto=<?php echo $row_mezclas['idProducto']; ?>"><?php echo $row_mezclas['strNombre']; ?></a></div>
            <div class="price"><?php echo $row_mezclas['strClave']; ?></div>
            <div class="cart"><a href="producto.php?producto=<?php echo $row_mezclas['idProducto']; ?>">
              <input name="Enviar" type="submit" class="button" onClick="addToCart('40');" value="Ver producto" />
            </div>
          </div>
   
          
          <?php } while ($row_mezclas = mysql_fetch_assoc($mezclas)); ?>
      </div>
      <!--Product Grid End-->
      <!--Pagination Part Start-->
      <div class="pagination">
      
      
        <?php do { ?>
          <div class="links"> <strong><a href="<?php printf("%s?pageNum_mezclas=%d%s", $currentPage, max(0, $pageNum_mezclas - 1), $queryString_mezclas); ?>">anterior</a> <a href="<?php printf("%s?pageNum_mezclas=%d%s", $currentPage, min($totalPages_mezclas, $pageNum_mezclas + 1), $queryString_mezclas); ?>">siguiente</a></strong></div>
          <?php } while ($row_mezclas = mysql_fetch_assoc($mezclas)); ?>
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
mysql_free_result($mezclas);
?>
