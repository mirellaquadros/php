<?php
function calcularIMC($altura, $peso) {
    if ($altura <= 0) {
        return 0;
    }
    return $peso / ($altura * $altura);
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 25) {
        return "Peso normal";
    } elseif ($imc < 30) {
        return "Sobrepeso";
    } elseif ($imc < 35) {
        return "Obesidade grau I";
    } elseif ($imc < 40) {
        return "Obesidade grau II";
    } else {
        return "Obesidade grau III";
    }
}

function calcMontante($C, $i, $t) {
    return $M = $C * pow((1 + $i), $t);
}

function conecta($paramStringConexao="")
{
    //string padrão
    if($paramStringConexao == "")
    {
        $paramStringConexao = "pgsql:host=localhost; port=5432
        dbname=aluno; user=postgres; password=postgres";
    }

    try{ // tente
       $c = new PDO($paramStringConexao);
   } catch (PDOException $e) { // se der erro
       echo "nao conectado! <br>".
            "<b>Erro:</b>".$e->getMessage();

       exit;
   }

   return $c;
}

?>