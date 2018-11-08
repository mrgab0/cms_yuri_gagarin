<?php


        session_start();
        if (isset($_SESSION['admin'])) {
            
            # code...

            require '../../php/Functions.php';
            $obj = new Funciones();

            
            
            if (isset($_POST['titulo'], $_POST['contenido'], $_POST['admin'])) {
                # code...
                $crear = $obj->crearPublicacion($_POST['titulo'], $_POST['contenido'], $_POST['admin']
            
                );

                if ($crear == true) {
                    # code...

                echo print_r('<span> ok </span>');
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

      <title>Panel de control del administrador</title>
     
    </head>
 
    <body>

    <nav class="#455a64 blue-grey darken-2" role="navigation" id="navBar">
    <div class="nav-wrapper container"><a onclick="sessionFixed()" id="logo-container" href="../../index.php" class="brand-logo">CMS yuri Gagarin</a>
      <ul class="right hide-on-med-and-down">
        
        
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
     
</div>

   
 
         <div class="row">
     <form class="col s12" method="post" >
      			 <div class="row">
        			 <div class="input-field col s8 ">
          			 
          			 <input id="icon_prefix " name="titulo" type="text" class="validate">
          			 <label for="icon_prefix">Titulo</label>
        			 </div>
        			
      			 </div>
				 <div class="row" >
 					 <div class="input-field col s12">
          			 
          			 <input id="icon_telephone" type="text" name="contenido" class="validate">
          			 <label for="icon_telephone">Contenido</label>
        			</div>
				</div>

                <div class="row" >
 					 <div class="input-field col s6">
          			 
          			 <input id="icon_telephone" type="text" name="admin" class="validate" placeholder="1">
          			 <label for="icon_telephone">este es tu numero de administrador si no lo reconoces deja este campo vacio</label>
        			</div>
				</div>

  				<button class="btn waves-effect waves-light  #757575 grey darken-1" type="submit" name="action">Entrar
    				<i class="material-icons right">send</i>
  				</button>
        
    			</form>
    
    
  </div>
        
   




<div>  
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
      <script src="../../src/js/session_fixing.js"></script>

      
    </body>
  </html>

  <?php
  
        }else{header('Location: ../../index.php');}          

  ?>