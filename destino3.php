<?php
    include 'util.php';
    
    $cap = $_POST["idcap"];
    $juros = $_POST["idjuros"];
    $tempo = $_POST["idtempo"];

    // Converter % para decimal
    $juros = $juros / 100;

    $mont = calcMontante($cap, $juros, $tempo);

    echo "<h2>Dados recebidos</h2>
<table border='2'>
    <tr>
        <th>Capital</th>
        <th>Juros (%)</th>
        <th>Tempo (meses)</th>
        <th>Montante (M)</th>
    </tr>
    <tr>
        <td>$cap</td>
        <td>" . ($juros * 100) . "%</td>
        <td>$tempo</td>
        <td>R$ " . number_format($mont, 2, ',', '.') . "</td>
    </tr>
</table>";
?>