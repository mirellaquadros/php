<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Alunos</title>
    <link rel="stylesheet" href="acessoDados.css"> 
</head>
<body>

    <h2>Filtrar alunos por sexo</h2>

    <form action="acesso_dados.php" method="POST">

        <label>Sexo:</label>

        <select name="sexo" required>
            <option value="">Selecione</option>
            <option value="T">Todos</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>

        <button type="submit">Pesquisar</button>
        <br>

    </form>

</body>
</html>

<?php 

include("util.php");

$conn = conecta();

//Verifica se o formulário foi enviado e se o campo 'sexo' não está vazio
if (isset($_POST['sexo']) && $_POST['sexo'] != "") {
    $sexo_filtrado = $_POST['sexo'];
    
    // SE a opção selecionada for 'T' (Todos), faz a busca geral igual ao else
    if ($sexo_filtrado == "T") {
        $varSQL = "SELECT * FROM aluno";
        $select = $conn->prepare($varSQL);
    } else {
        // Se for 'M' ou 'F', aplica o filtro normalmente
        $varSQL = "SELECT * FROM aluno WHERE sexo = :sexo";
        $select = $conn->prepare($varSQL);
        $select->bindParam(':sexo', $sexo_filtrado);
    }

} else {
    //Se formulário não foi enviado (quando abre a página pela primeira vez), mostra todos
    $varSQL = "SELECT * FROM aluno";
    $select = $conn->prepare($varSQL);
}

// executa (funciona para qualquer um dos caminhos acima)
$select->execute();

// pega resultados
$linhas = $select->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="acessoDados.css">
</head>
<body>

<h2>Lista de Alunos</h2>

<table class="tabela">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Celular</th>
    <th>Sexo</th>
    <th>Ações</th>
</tr>

<?php

foreach($linhas as $linha)
{
    $id = $linha["id"];

    echo "<tr>";

    echo "<td>".$linha["id"]."</td>";
    echo "<td>".$linha["nome"]."</td>";
    echo "<td>".$linha["celular"]."</td>";
    echo "<td>".$linha["sexo"]."</td>";

    echo "<td>

    <a href='alterarAlunos.php?id=$id'>
        <img 
            src='data:image/jpeg;base64,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' 
            width='25'
            title='Alterar'
        >
    </a>

    &nbsp;

    <a href='excluirAlunos.php?id=$id'>
        <img 
            src='data:image/png;base64,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' 
            width='25'
            title='Excluir'
        >
    </a>

    </td>";

    echo "</tr>";
}

?>

</table>

<br>

</body>
</html>

