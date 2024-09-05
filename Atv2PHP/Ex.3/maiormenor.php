
<?php
    $a = $_POST['num'];
    $b = $_POST['num2'];
 
    if($a > $b) {
        echo $a . ' maior que ' . $b;
    }
    else {
        echo $a . ' menor que ' . $b;
    }
?>