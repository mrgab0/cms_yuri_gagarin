<?php 

        require '../php/Functions.php';
        require '../posts_sprite.php';

        
        $obj = new Funciones();

        //$publicaciones = $obj->getPublicaciones($_GET['titulo']);

        //obteniendo los registros
        $publicacion = $obj->getPublicacion($_GET['blog_id']);

        //echo '<p>', print_r($publicacion), '</p>';
        




?>

 <!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=binary"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../src/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../src/css/themes/light/main.css"  media="screen,projection"/>
      <link href="../src/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
      <!--Icon-->
      <link rel="shortcut icon" href="../src/img/a.png">

      <title><?php echo $publicacion['titulo'];?></title>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
 
    <body>

    <nav class="#455a64 blue-grey darken-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://localhost:3002/cms_base/index.php" class="brand-logo">CMS yuri Gagarin</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Registrarse</a></li>
        <li><a href="../views/admin/index.php">Iniciar sesion</a></li>
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
      <h1><?php echo $publicacion['titulo'];?></h1>
      <br><br>
      <p><?php echo $publicacion['contenido'];?></p>
      

</div>


 <br><br><br><br><br><br><br>
  
          <div class="row">
          <p class="#eceff1 blue-grey lighten-5 col s3"  >subido por: <?php echo $publicacion['usuario']?> </p>
    <form class="col s12">
      <div class="row">
        <div class="input-field col s8">
          
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Dejar un Comentario</label>
           <a class="btn" onclick="M.toast({html: 'comentario enviado', completeCallback: function(){console.log('tu comentario fue enviado')}})">Enviar!</a>
        </div>
      </div>
    </form>

        

  </div>

<br>



    </div>
    
  </div>

  
 
    


        <footer class="page-footer #cfd8dc blue-grey lighten-4">
       
          <div class="footer-copyright">
            <div class="container">
              <span class="black-text">
                  © 2018 Copyright <b>UPT Jose Felix Ribas</b>
              </span>
           
            <a class="black-text text-lighten-4 right" href="http://www.misionsucre.gov.ve/">Mision sucre</a>
            <img src="../src/img/heart.png" alt="heart-icon">
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../src/js/materialize.min.js"></script>
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
  </html>
        
