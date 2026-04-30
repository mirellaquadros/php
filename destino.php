<?php
    $nome = $_POST["idnome"];
    $celular = $_POST["idcelular"];
    $cidade = $_POST["idcidade"];

    echo "<h2>Dados recebidos</h2>";

    echo "<table border='1'>";

    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Celular</th>";
    echo "<th>Cidade</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>$nome</td>";
    echo "<td>$celular</td>";
    echo "<td>$cidade</td>";
    echo "</tr>";

    echo "</table>";
?>