
<?php

require 'php/Funciones.php';

$obj = new Funciones();


//registros

$publicaciones = $obj->getPublicaciones();




?>


 <!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="src/css/themes/light/main.css"  media="screen,projection"/>
      <link href="src/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">

      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
 
    <body>

    <nav class="#455a64 blue-grey darken-2" role="navigation" id="navBar">
    <div class="nav-wrapper container"><a onload="mapeo()" id="logo-container" href="index.php" class="brand-logo">CMS yuri Gagarin</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Registrarse</a></li>
        <li><a href="#">Iniciar sesion</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  
     
  

  <div class="container">
    <div class="section">

      
<div class="hache4">
      <h4 >post mas recientes</h4>
</div>


<div>
<?php foreach($publicaciones as $publicacion): ?> 
      
      
      <script src="src/js/admin_fix.js"></script>
      <?php $post_fixed = $publicacion['blog_id'] ?>
  
  <?php echo '<div class="responsive col s4">' ?>
  <?php echo '<div class="gallery">' ?>
  <?php echo '<p>' ?>
  <?php echo '<img src="src/img/sample-1.jpg" alt="Mountains" width="600" height="400">' ?>
  <?php echo '</p>' ?>
  <?php echo '<div class="desc">' ?>
        <?php echo '<h5>', $publicacion['titulo'], '</h5>';?>
        <?php //echo  '<p>', 'publicado por: ', $publicacion['admin_id'], '</p>'?>
        <?php //echo '<p>', $publicacion['contenido'], '</p>';?>
  <?php echo '</div>' ?>
  <?php echo '<div class="row center">' ?>
      
  <a id="Button" href="views/posts.php?blog_id=<?php echo $post_fixed;?>" 
  id="download-button" 
  class="btn-large waves-effect #757575 grey darken-1" > ver mas</a>
  <?php echo '</div>' ?>
  <?php echo '</div>' ?>
  <?php echo  '</div>' ?>
  <?php endforeach;?>
  
  
</div>





    </div>
    
  </div>

  

    


        <footer  id="Footer" class="page-footer #cfd8dc blue-grey lighten-4">
       
          <div class="footer-copyright">
            <div class="container">
              <span class="black-text">
                  © 2018 Copyright <b>UPT Jose Felix Ribas</b>
              </span>
           
            <a class="black-text text-lighten-4 right" href="http://www.misionsucre.gov.ve/">Mision sucre</a>
            <img src="src/img/heart.png" alt="heart-icon">
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="src/js/materialize.min.js"></script>
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="src/js/choosing_themes.js"></script>
    </body>
  </html>
        

