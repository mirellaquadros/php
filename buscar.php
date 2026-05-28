<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Filtro de Cursos</title>
</head>
<body>

    <h2>Buscar cursos por valor</h2>

    <form action="buscar.php" method="GET">
        <label>Digite o valor máximo:</label> 
        <input type="number" step="0.01" name="valor" required> 
        <button type="submit">Pesquisar</button>
    </form>

</body>
</html>

<?php

include("util.php"); 
$con = conecta();

if (!$con) {
    die("Erro na conexão com o banco.");
}
 
if (isset($_GET['valor'])) {

    $valor = $_GET['valor']; 
    $sql = "SELECT * FROM cursos WHERE valor <= :valor"; 
    $stmt = $con->prepare($sql); 
    $stmt->bindParam(':valor', $valor); 
    $stmt->execute();

    echo "<h2>Cursos encontrados:</h2>";

    while ($curso = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo "<b>ID:</b> " . $curso['id'] . "<br>";
        echo "<b>Título:</b> " . $curso['titulo'] . "<br>";
        echo "<b>Descrição:</b> " . $curso['descricao'] . "<br>";
        echo "<b>Valor:</b> R$ " . $curso['valor'] . "<br><hr>";
    }
}

?>