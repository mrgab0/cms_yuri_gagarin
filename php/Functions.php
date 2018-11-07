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
        public function getUsers($admin_id){

            global $pdo;

            $query = $pdo->prepare("
            SELECT admins.usuario
            ");
            $query->execute([

            ]);
        }
    
    }

?>