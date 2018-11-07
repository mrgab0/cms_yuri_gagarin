<?php
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=cosas', 'mrgabo', 'root');
        }catch(PDOException $e){
            echo "no se conecto error" . $e;
        }
        
        


?>