<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            print_r($p1);
            print_r($p1);
        ?>
        </pre>
    </body>
</html>
