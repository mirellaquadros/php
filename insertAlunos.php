<?php
    include "util.php";
    $conn = conecta();

    $varSQL = "INSERT INTO aluno (id, nome, celular, sexo)
               VALUES (:id, :nome, :celular, :sexo)";
    $insert = $conn->prepare($varSQL);

    $insert->bindParam(':id',      $_POST['id']);
    $insert->bindParam(':nome',    $_POST['nome']);
    $insert->bindParam(':celular', $_POST['celular']);
    $insert->bindParam(':sexo',    $_POST['sexo']);

    // se o registro for inserido normalmente...
    if ( $insert->execute() ) {
        echo "<p>Aluno inserido com sucesso!</p>";
    } else {
        echo "<p>Erro ao inserir aluno.</p>";
    }

    // redireciona para a lista de alunos
    header("Location: acesso_dados.php");
?>
