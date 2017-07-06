
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Matrícula</title>
    </head>
    <body>
        <?php
        include '../Classe/ClasseMatricula.php';
        session_start();
        $p=new ClasseMatricula();
        $p= unserialize($_SESSION['dados']);
        echo $p;
        ?>
    </body>
    
</html>

