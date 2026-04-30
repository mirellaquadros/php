<?php
    include 'util.php';
    
    $altura = $_POST["idaltura"];
    $peso = $_POST["idpeso"];
    $imc = calcularIMC($altura,$peso);
    $classificacao = classificarIMC($imc);

  echo "<h2>Dados recebidos</h2>
<table border='2'>
    <tr>
        <th>Altura</th>
        <th>Peso</th>
        <th>IMC</th>
        <th>Classificação</th>
    </tr>
    <tr>
        <td>$altura</td>
        <td>$peso</td>
        <td>" . number_format($imc, 2) . "</td>
        <td>$classificacao</td>
    </tr>
</table>";
?>