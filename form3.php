<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Empréstimo</title>
</head>
<body>

<h2>Calcular Juros de Empréstimo</h2>

<form action="destino3.php" method="post">
    <label>Valor:</label><br>
    <input type="number" step="0.01" name="idcap" required><br><br>

    <label>Taxa de juros:</label><br>
    <input type="number" step="0.01" name="idjuros" required><br><br>

    <label>Tempo em meses:</label><br>
    <input type="number" name="idtempo" required><br><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>