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
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("Vitarella", "Preto", 1.3);
            print_r($c1); 
            print_r($c2);  
        ?>
    </body>
</html>
