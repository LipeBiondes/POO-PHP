<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
            var_dump($c1);
            $c1->tampar();
            $c1->rabiscar();
            $c1->destampar();
            $c1->rabiscar();
            echo"<br>";
            $c2 = new Caneta;
            $c2->cor = "Vermelha";
            $c2->ponta = 1.0;
            $c2->tampar();
            $c2->rabiscar();
        ?>
    </body>
</html>
