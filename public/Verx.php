<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      
 <nav class="top-bar" data-topbar>
  <ul class="title-area">
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <div class="logo">
    <a href="http://zurb.com/stickers/images/intro-foundation.png"><img src="http://zurb.com/stickers/images/intro-foundation.png" /></a>
  </div>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="center-buttons">
        <li class="divider"></li>
      <li><a href="Ver.html">Ver</a></li>
      <li class="divider"></li>
      <li><a href="subirx.php">Subir</a></li>
      <li class="divider"></li>
      <li><a href="Perfil.html">Perfil</a></li>
      <li class="divider"></li>
    </ul>
  </section>
</nav>
  
  <div class="row">
      <div class="large-12 columns">
        <div class="panel">
<ul class="clearing-thumbs small-block-grid-4" data-clearing>
 <?php
    $directory="img";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            echo '<li><a href="path/to/your/img"><img data-caption="caption here..." src="'.$directory."/".$archivo.'"></a></li>';
        }
    }
    $dirint->close();
?>
 <!--
  <li><a href="path/to/your/img"><img data-caption="caption here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
  <li><a href="path/to/your/img"><img data-caption="caption 2 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
  <li><a href="path/to/your/img"><img data-caption="caption 3 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
 <li><a href="path/to/your/img"><img data-caption="caption 2 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
  <li><a href="path/to/your/img"><img data-caption="caption 3 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li> <li><a href="path/to/your/img"><img data-caption="caption 2 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
  <li><a href="path/to/your/img"><img data-caption="caption 3 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
           <li><a href="path/to/your/img"><img data-caption="caption 2 here..." src="https://placeholdit.imgix.net/~text?txtsize=23&txt=250%C3%97250&w=250&h=250"></a></li>
-->
            </ul>
          </div>
      </div>
      </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
