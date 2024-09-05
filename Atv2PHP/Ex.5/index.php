<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Jokenpô</title>
</head>
<body>
    <h1>Jogo Jokenpô</h1>
    <form method="post" action="respostacomp.php">
        <label for="opcoes">Escolha uma opção:</label>
        <select id="opcoes" name="opcoes">
            <option value="1">Pedra</option>
            <option value="2">Papel</option>
            <option value="3">Tesoura</option>
        </select>
        
        <button type="submit">Jogar</button>
    </form>
</body>
</html>
