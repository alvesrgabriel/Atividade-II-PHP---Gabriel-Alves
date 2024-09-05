<?php

$num = $_POST['num'];

if($num > 0) {
    echo 'O valor é positivo';
}
elseif( $num < 0) {
    echo 'O valor é negativo';
}
else {
    echo 'Valor zero inserido';
}

?>
