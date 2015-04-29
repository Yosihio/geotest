<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Bigshop HTML Template</title>
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
  <div id="header">
    <!-- Top Right part Links-->
    <div id="logo"><a href="index.html"><img src="image/logo.png" title="ecommerce Html Template" alt="ecommerce Html Template" /></a></div>
    <div id="search">
      <div class="button-search"></div>
      <input type="text" value="" placeholder="" id="filter_name" name="search">
    </div>
    <!--Mini Cart Start-->
    <div id="cart">
      <div class="content">
        <div class="mini-cart-info">
          <table>
            <tbody>
              <tr>
                <td class="image"><a href="product.html"><img title="Chair Swing" alt="Chair Swing" width="43" height="43" src="image/product/samsung_tab_1-60x60.jpg"></a></td>
                <td class="name"><a href="product.html">Chair Swing</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$236.99</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
              <tr>
                <td class="image"><a href="product.html"><img title="Eyewear Eyeglasses" alt="Eyewear Eyeglasses" width="43" height="43" src="image/product/apple_cinema_30-60x60.jpg"></a></td>
                <td class="name"><a href="product.html">Eyewear Eyeglasses</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$119.50</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
              <tr>
                <td class="image"><a href="product.html"><img title="Nail Polish" alt="Nail Polish" width="43" height="43" src="image/product/hp_1-60x60.jpg"></a></td>
                <td class="name"><a href="product.html">Nail Polish</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$119.50</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mini-cart-total">
          <table>
            <tbody>
              <tr>
                <td class="right"><b>Sub-Total:</b></td>
                <td class="right">$399.99</td>
              </tr>
              <tr>
                <td class="right"><b>Eco Tax (-2.00):</b></td>
                <td class="right">$6.00</td>
              </tr>
              <tr>
                <td class="right"><b>VAT (17.5%):</b></td>
                <td class="right">$70.00</td>
              </tr>
              <tr>
                <td class="right"><b>Total:</b></td>
                <td class="right">$475.99</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="checkout"><a href="cart.html" class="button">View Cart</a> &nbsp; <a href="checkout.html" class="button">Checkout</a></div>
      </div>
    </div>
    <!--Mini Cart End-->
  </div>
  <!--Top Navigation Start-->
   <?php include("includes/menu.php"); ?> 
  <!--Top Navigation Start-->
  <div id="container">
    <!--Left Part-->
    <div id="column-left">
      <!--Categories Part Start-->
      <div class="box">
        <div class="box-heading">Categories</div>
        <div class="box-content box-category">
          <ul id="custom_accordion">
            <li class="category25"><a class="cuuchild " href="category.html">Electronics</a> <span class="down"></span>
              <ul>
                <li class="category30"><a class="nochild " href="category.html">Cameras</a></li>
                <li class="category29"><a class="nochild " href="category.html">Phones</a></li>
                <li class="category28"><a class="cuuchild " href="category.html">Tablets</a> <span class="down"></span>
                  <ul>
                    <li class="category35"><a class="nochild " href="category.html">test 1</a></li>
                    <li class="category36"><a class="nochild " href="category.html">test 2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="category57"><a class="nochild " href="category.html">Accessories</a></li>
            <li class="category18"><a class="cuuchild " href="category.html">Shoes</a> <span class="down"></span>
              <ul>
                <li class="category46"><a class="nochild " href="category.html">Casual shoes</a></li>
                <li class="category45"><a class="nochild " href="category.html">Fancy shoes</a></li>
                <li><a class="nochild " href="category.html">Sports shoes</a></li>
              </ul>
            </li>
            <li><a class="cuuchild " href="category.html">Clothing</a> <span class="down"></span>
              <ul>
                <li><a class="nochild " href="category.html">Women Clothing</a></li>
                <li><a class="nochild " href="category.html">Men Clothing</a></li>
              </ul>
            </li>
            <li><a class="nochild " href="category.html">Furniture</a></li>
            <li><a class="nochild " href="category.html">Beauty &amp; Health Care</a></li>
            <li><a class="cuuchild " href="category.html">Books</a> <span class="down"></span>
              <ul>
                <li><a class="nochild " href="category.html">Audio Books</a></li>
                <li><a class="nochild " href="category.html">Comedy Book</a></li>
                <li><a class="nochild " href="category.html">Comics Books</a></li>
                <li><a class="nochild " href="category.html">Computer Book</a></li>
                <li><a class="nochild " href="category.html">Cookies Books</a></li>
                <li><a class="nochild " href="category.html">English Books</a></li>
                <li><a class="cuuchild " href="category.html">Fashion Books</a> <span class="down"></span>
                  <ul>
                    <li><a class="nochild " href="category.html">test 25</a></li>
                  </ul>
                </li>
                <li><a class="nochild " href="category.html">Games Books</a></li>
                <li><a class="nochild " href="category.html">God Books</a></li>
                <li><a class="nochild " href="category.html">Journal Book</a></li>
                <li><a class="nochild " href="category.html">Knowledge Books</a></li>
                <li><a class="nochild " href="category.html">Magic Books</a></li>
                <li><a class="nochild " href="category.html">Management Books</a></li>
                <li><a class="nochild " href="category.html">Student Books</a></li>
                <li><a class="nochild " href="category.html">Teachers Books</a></li>
                <li><a class="nochild " href="category.html">Toys Books</a></li>
                <li><a class="nochild " href="category.html">Travel Books</a></li>
                <li><a class="nochild " href="category.html">Video Books</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!--Categories Part End-->
      <!--Specials Product Start-->
      
      <!--Specials Product End-->
    </div>
    <!--Left End-->
    <!--Middle Part Start-->
    <div id="content">
      <!--Breadcrumb Part Start-->
      <div class="breadcrumb"><a href="index.html">Home</a> » <a href="about-us.html">calidad</a></div>
      <!--Breadcrumb Part End-->
      
      <h1><strong>Geotecnia y Supervision Tecnica S.A. de C.V.</strong> </h1>
        <br>
Es una empresa formada por profesionales de amplia experiencia en la rama de la contrucción de obras públicas y/o privadas, grupos de inversionistas, dependencias oficiales, entidades federales, paraestatales y personas físicas, especializada en la prestacion de servicios en las siguientes áreas:
<ul>
  <li>Control de calidad
</li>
  <li>Estudios de geotecnia de ingeniería de tránsito y diseño</li>
  <li>Proyectos geométricos de vialidades</li>
  <li>Consultoria y asesoría</li>
   <li>Supervision de Obra</li>
    <li>Estudios de mecánica de suelos</li>

</ul>
      <h1>Mision</h1>
        <br>
       Prepararnos y trabajar diariamente para alcanzar la satisfacción del cliente. </p>
        <h1>Vision</h1>
        <br>
       Ser lider global en servicios de ingenieria que superen las expectativas del mercado haciendo de clientes y colaboradores socios estrategicos con responsabilidad social y ambiental. </p>
      <h1>Valores</h1>
        <br>
       La empresa considera los valores de honradez, discreción, puntualidad y espíritu de servicio primordiales para el trabajo diario y pone énfasis en el cumplimiento de estos por todo el personal que trabaja en la empresa. </p>    
        
        <h1>Politica</h1>
        <br>En Geotecnia y Supervisión Técnica S.A. de C.V. estamos comprometidos a mejorar constantemente nuestro sistema de gestion de calidad a través del cumplimiento de la NMX-EC-17025-IMNC-2006, y los objetivos de calidad con la finalidad de ofrecer a nuestros clientes sólo servicios de la mas alta calidad, para satisfacer nuestras necesidades y expectativas, involucrando al personal en este compromiso a través del conocimiento y manejo de las políticas y los documentos de calida </p>
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