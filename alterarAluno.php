<?php
    include "util.php";
    $conn = conecta();

    // Recupera o ID enviado via GET (ex: alterarAlunos.php?id=1)
    $id = $_GET['id'] ?? null;

    if (!$id) {
        // Se não houver ID, aborta e volta para a listagem
        header("Location: acesso_dados.php");
        exit();
    }

    // Busca os dados do aluno atual no banco
    $varSQL = "SELECT id, nome, celular, sexo FROM aluno WHERE id = :id";
    $stmt = $conn->prepare($varSQL);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se o aluno não for encontrado, volta para a listagem
    if (!$aluno) {
        header("Location: acesso_dados.php?status=nao_encontrado");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Aluno</title>
</head>
<body>
    <h2>Alterar Cadastro do Aluno</h2>
    <form action='updateAlunos.php' method='post'>
        ID: <strong><?php echo $aluno['id']; ?></strong><br>
        <input type='hidden' name='id' value='<?php echo $aluno['id']; ?>'>
        
        <br>Nome<br>
        <input type='text' name='nome' value='<?php echo htmlspecialchars($aluno['nome']); ?>' required><br>
        
        Celular<br>
        <input type='text' name='celular' value='<?php echo htmlspecialchars($aluno['celular']); ?>'><br>
        
        Sexo<br>
        <select name="sexo">
            <option value="">Selecione</option>
            <option value="M" <?php echo ($aluno['sexo'] == 'M') ? 'selected' : ''; ?>>Masculino</option>
            <option value="F" <?php echo ($aluno['sexo'] == 'F') ? 'selected' : ''; ?>>Feminino</option>
        </select><br><br>
        
        <input type='submit' value='Salvar Alterações'>
        <a href="acesso_dados.php">Cancelar</a>
    </form>
</body>
</html>