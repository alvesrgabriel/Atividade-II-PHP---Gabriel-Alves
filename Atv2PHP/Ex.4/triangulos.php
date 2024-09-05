<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = isset($_POST['num']) ? intval($_POST['num']) : 0;
        $b = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
        $c = isset($_POST['num3']) ? intval($_POST['num3']) : 0;}
 
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {

            if ($a == $b && $b == $c) {
                echo '<h1>' . 'Equilátero' . '<br/>' . '<img width = "300" src = "equilatero.png"> ';
            } elseif ($a == $b || $b == $c || $a == $c) {
                echo '<h1>' . 'Isósceles' . '<br/>' . '<img width = "300" src = "isoceles.webp"> ';
            } else {
                echo '<h1>' . 'Escaleno' . '<br/>' . '<img width = "300" src = "escaleno.webp"> ';
            }
        } else {
            echo 'Não é um triângulo';
        }
 
 
    ?>