<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       session_start();
      include 'deleta.html';
       include '../Classe/ClassePrincipal.php';
       $dados= array();
       $dados=  unserialize($_SESSION['banco']);
       foreach ($dados as $d){
           echo $d;
           echo'<hr>';
       }
        ?>
    </body>
</html>
