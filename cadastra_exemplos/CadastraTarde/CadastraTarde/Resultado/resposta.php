<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../Classe/ClassePrincipal.php';
            session_start();
            
            $p = new ClassePrincipal();
            $p = unserialize($_SESSION['dados']);
            echo $p;
        
        ?>
    </body>
</html>
