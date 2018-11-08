<?php

    require 'init.php';

    class Funciones{
     public function getPublicaciones(){
         global $pdo;

         
         $query = $pdo->prepare("
            SELECT * 
            FROM blogs
         ");
         $query->execute();

         return $query->fetchAll();
     }

     public function getPublicacion($blog_id){

        global $pdo;

        $query = $pdo->prepare("
        SELECT 
        blogs.* , 
        admins.usuario
        FROM blogs


        INNER JOIN  admins
        ON blogs.admin_id = admins.admin_id

        WHERE blog_id = :blog_id
        ");
        $query->execute([
            'blog_id' => $blog_id
        ]);
        return $query->fetch();
     }
      /*  public function getUsers($admin_id){

            global $pdo;

            $query = $pdo->prepare("
            SELECT admins.usuario
            ");
            $query->execute([

            ]);
        }*/

        public function logIn($user, $pass){

          global  $pdo;

          $query = $pdo->prepare("
            SELECT * 
            FROM admins
            WHERE usuario = :user AND password = :pass
         ");
         $query->execute([
             'user' => $user,
             'pass' => $pass
         ]);

         return $query->fetch();
        }

        public function crearPublicacion($titulo, $contenido, $admin){

            global $pdo;
         

          $admin_id = $pdo->prepare("
            SELECT admin_id 
            FROM admins
            WHERE admin_id = :user
         ");
         $admin_id->execute([
             'user' => $admin
             
         ]);

            $admin_id = $admin_id->fetch();


          $query = $pdo->prepare("
            INSERT INTO blogs (titulo, contenido, admin_id, fecha)
            VALUES(:titulo, :contenido, :admin_id, :fecha)
         ");
         $query->execute([
             'titulo' => $titulo,
             'contenido' => $contenido,
             'admin_id' => $admin_id,
             'fecha' => time()
         ]);

         if ($query) {
             # code...
             return true;
         }else{
             return false;
         }


        }
    
    }

?>