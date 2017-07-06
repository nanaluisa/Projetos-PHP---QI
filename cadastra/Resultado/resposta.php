
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include '../Classe/ClassePrincipal.php';
        session_start();
       
        $dados=new ClassePrincipal();
        $dados= unserialize($_SESSION['dados']); 
        echo $dados;
        ?>
    </body>
</html>
