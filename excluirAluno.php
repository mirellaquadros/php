<?php
    include "util.php";
    $conn = conecta();

    // Captura o ID passado via URL (ex: excluirAlunos.php?id=1)
    $id = $_GET['id'] ?? null;

    if ($id) {
        // Monta a query de deleção
        $varSQL = "DELETE FROM aluno WHERE id = :id";
        $delete = $conn->prepare($varSQL);
        $delete->bindParam(':id', $id);

        // Executa e define o feedback do redirecionamento
        if ($delete->execute()) {
            header("Location: acesso_dados.php?status=excluir_sucesso");
        } else {
            header("Location: acesso_dados.php?status=excluir_erro");
        }
    } else {
        header("Location: acesso_dados.php");
    }

    exit();
?>