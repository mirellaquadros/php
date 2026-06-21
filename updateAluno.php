<?php
    include "util.php";
    $conn = conecta();

    // Captura os dados enviados pelo formulário
    $id      = $_POST['id'] ?? null;
    $nome    = $_POST['nome'] ?? null;
    $celular = $_POST['celular'] ?? null;
    $sexo    = $_POST['sexo'] ?? null;

    if ($id && $nome) {
        // Monta a query de atualização
        $varSQL = "UPDATE aluno 
                   SET nome = :nome, celular = :celular, sexo = :sexo 
                   WHERE id = :id";
                   
        $update = $conn->prepare($varSQL);

        $update->bindParam(':id',      $id);
        $update->bindParam(':nome',    $nome);
        $update->bindParam(':celular', $celular);
        $update->bindParam(':sexo',    $sexo);

        // Executa e redireciona com o status correspondente
        if ($update->execute()) {
            header("Location: acesso_dados.php?status=update_sucesso");
        } else {
            header("Location: acesso_dados.php?status=update_erro");
        }
    } else {
        header("Location: acesso_dados.php?status=dados_invalidos");
    }
    
    exit();
?>