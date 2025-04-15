<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio 4</title>
</head>
<body>

<h2>Exercicio 4</h2>

<h4>  4-F.U.P que o usuário escolha um time de futebol (Palmeiras, Corinthians, São Paulo, Santos) e exiba uma frase aleatória de incentivo relacionada ao time escolhido.</h4>

<form action="calcular.php" method="post">
  
    <label for="bebida">Escolha o time:</label>
        <select name="escolha" id="escolha">
            <option value="0">Palmeiras </option>
            <option value="1">Corinthians</option>
            <option value="2">São Paulo</option>
            <option value="3">Santos</option>

    <input type="submit" value="Gerar frase">
</form>

</body>
</html>