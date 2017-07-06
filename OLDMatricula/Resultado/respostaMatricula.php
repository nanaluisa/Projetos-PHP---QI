
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Matrícula</title>
    </head>
    <body>
        <?php
        include '../Classe/ClasseMatricula.php';
        session_start();
        $dados=new ClasseMatricula();
        $dados= unserialize($_SESSION['dados']);
        echo $dados;
        ?>
    </body>
</html>

