<?php
   include("util.php");

    $conn = conecta();

   $varSQL = "SELECT * FROM aluno";
   $select = $conn->query($varSQL);

   echo "
       <table border='1' cellpadding='10' cellspacing='10'>
           <thead>
           <tr>
               <th>ID</th>
               <th>Nome</th>
               <th>Celular</th>
               <th>Editar</th>
           </tr>
           </thead>
           <tbody>";
   while ($linha = $select->fetch())
   {
       $id = $linha['id'];

       echo "
           <tr>
               <td>{$linha['id']}</td>
               <td>{$linha['nome']}</td>
               <td>{$linha['celular']}</td>
               <td><a href='mostra.php?id=$id'>
                <img height=40 src='https://cdn-icons-png.flaticon.com/512/700/700291.png' alt='Editar'>
                    </a>
               </td>
           </tr>
       ";
   }

        "</tbody>
       </table>";
          
?>
