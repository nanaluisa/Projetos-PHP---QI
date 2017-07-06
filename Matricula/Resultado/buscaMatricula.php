<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        include 'deleteMatricula.html';
        include '../Classe/ClasseMatricula.php';
        session_start();
        
        $dados =  array();
        $dados= unserialize($_SESSION['banco']);
        
        foreach ($dados as $d){
        echo $d;
        echo '<hr>';
        }
        ?>
    </body>
</html>