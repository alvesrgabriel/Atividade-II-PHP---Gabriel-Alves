<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuarioEscolha = intval($_POST['opcoes']);
        $opcoes = [
            1 => 'Pedra',
            2 => 'Papel',
            3 => 'Tesoura'
        ];
        $computadorEscolha = rand(1, 3);
        function determinarVencedor($usuario, $computador) {
            if ($usuario == $computador) {
                return 'Empate!';
            }
            if (($usuario == 1 && $computador == 3) || 
                ($usuario == 2 && $computador == 1) || 
                ($usuario == 3 && $computador == 2)) {
                return 'Você venceu!';
            } else {
                return 'O computador venceu!';
            }
        }
        $resultado = determinarVencedor($usuarioEscolha, $computadorEscolha);
        echo "<h2>Resultado</h2>";
        echo "<p>Sua escolha:</p>";
        echo "<img src='img/{$opcoes[$usuarioEscolha]}.png' alt='{$opcoes[$usuarioEscolha]}'>";
        echo "<p>Escolha do computador:</p>";
        echo "<img src='img/{$opcoes[$computadorEscolha]}.png' alt='{$opcoes[$computadorEscolha]}'>";
        echo "<h3>$resultado</h3>";
    }
    ?>