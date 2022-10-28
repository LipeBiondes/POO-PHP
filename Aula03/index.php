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
            $c1->modelo = "BIC rosê";
            $c1->cor = "Azul";
            print_r($c1);
            $c1->rabiscar();
            $c1->tampar();
        ?>
    </body>
</html>
