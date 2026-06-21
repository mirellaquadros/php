<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body id="corpo">
        <h1>Estudo de Formulário/PHP</h1>

        <form method="POST" name="form" action="DestinoForm.php">
            <label class="label" for="idnome">Nome:</label>
            <input type="text" name="idnome" id="idnome"><br>
            <label class="label" for="idtelefone">Telefone:</label>
            <input type="number" name="idtelefone"><br>
            <label class="label" for="idcidade">Cidade:</label>
            <input type="text" name="idcidade"><br>
            <label class="label" for="v">URL da Música:</label>
            <input type="text" name="v"><br>
            <button class="butao" type="submit"> Enviar </button>
        </form>
    </body>

</html>