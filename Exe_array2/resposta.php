<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
         include_once 'controle.php';
        //controle
        //instanciar a Classe valida
        //métodos dos dados.
        
        $p=$_GET['pessoa'];
            foreach($p as $i){
             echo $i."<br />" ;
                //$i varre o array!
            }

        ?>
    </body>
</html>