<!doctype html>
<?php include('../app/models/subir.php')


?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Image</title>
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
    <a  ><img src="http://i58.tinypic.com/2i0zwow.png" border="0" alt="Image and video hosting by TinyPic"></a>
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
            <div class="small-centered columns" style="text-align: center;">
                <h3>Bienvenido a WebImage
                    <br>para comenzar sube una foto</h3> 
                      <div class="file-inputs" >
                         <form action="../app/models/subir.php" method="post" enctype="multipart/form-data"> 
                          <img  align="middle" src=<?php echo $foto ?>>
                          <br>
                          <br>
                            <input size="100" name="image" style="width:35%" type="file" class="hidden-input">
                          <br>
                             <input type="submit" name="subir" class="small round button" value="Subir">  
                            </form>
               </div>
                </div>
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
