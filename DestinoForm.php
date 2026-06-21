<?php
$idnome = $_POST["idnome"];
$idtelefone = $_POST["idtelefone"];
$idcidade = $_POST["idcidade"];
$v = $_POST["v"];
?>

<!DOCTYPE html>
<html>
      
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
      <title>Destino</title>
   </head>

   <body>
      <h1 class="titulo">Dados Enviados</h1>

      <table class="tabela">
         <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>URL</th>
         </tr>

         <tr>
            <td><?php echo $idnome; ?></td>
            <td><?php echo $idtelefone; ?></td>
            <td><?php echo $idcidade; ?></td>
            <td>
               <a href="<?php echo $v; ?>" target="_blank">
                  Clique aqui para ouvir
               </a>
            </td>
         </tr>

      </table>
   </body>
</html>