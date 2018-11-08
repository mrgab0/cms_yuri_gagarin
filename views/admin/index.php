<?php

    session_start();

		require '../../php/Functions.php';
		$obj = new Funciones();

		if (isset($_POST['user'], $_POST['pass'])) {
			# viendo si existe el usuario
			$ver = $obj->logIn($_POST['user'], $_POST['pass']);

      //echo print_r($ver);
      
      if ($ver) {
      # code...
      $_SESSION['admin'] = $ver['admin_id'];
      header('location: ../creating/posts.php');
    }
    }
    
   

?>
 
 
 
 
 <!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../src/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../../src/css/themes/light/main.css"  media="screen,projection"/>
      <link href="src/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
       <!--Icon-->
      <link rel="shortcut icon" href="../../src/img/a.png">
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
 
    <body>

    <nav class="#455a64 blue-grey darken-2" role="navigation" id="navBar">
    <div class="nav-wrapper container"><a onload="mapeo()" id="logo-container" href="../../index.php" class="brand-logo">CMS yuri Gagarin</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Registrarse</a></li>
        <li><a href="index.php">Iniciar sesion</a></li>
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
      <h4 >Iniciar Sesion</h4>
</div>


<div>

      
      
      <script src="../../src/js/admin_fix.js"></script>
      <?php //$post_fixed = $publicacion['blog_id'] ?>
  
  	

			  <div class="row">
    			 <form class="col s12" method="post" >
      			 <div class="row">
        			 <div class="input-field col s4 ">
          			 <i class="material-icons prefix ">account_circle</i>
          			 <input id="icon_prefix " name="user" type="text" class="validate">
          			 <label for="icon_prefix">usuario</label>
        			 </div>
        			
      			 </div>
				 <div class="row" id="form-control-pass">
 					 <div class="input-field col s4">
          			 <i class="material-icons prefix">vpn_key</i>
          			 <input id="icon_telephone" type="password" name="pass" class="validate">
          			 <label for="icon_telephone">Contrasena</label>
        			</div>
				</div>

  				<button class="btn waves-effect waves-light  #757575 grey darken-1" type="submit" name="action">Entrar
    				<i class="material-icons right">send</i>
  				</button>
        
    			</form>
  			 </div>
        
	
  
  
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
            <img src="../../src/img/heart.png" alt="heart-icon">
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../../src/js/materialize.min.js"></script>
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="../../src/js/choosing_themes.js"></script>
    </body>
  </html>