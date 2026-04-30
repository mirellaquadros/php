<?php
function areaTriangulo ($paramBase, $paramAlt) {
    return ($paramBase * $paramAlt) / 2;
}

// Chamada da função e exibição
echo "programa 1<br>";
$area = areaTriangulo(12, 10);
echo "Área: " . $area;
?>
