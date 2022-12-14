<?php
   function calculaAreaTerreno($frente, $profundidade) {
    $areaTotal = $frente * $profundidade;
    return $areaTotal;
}

function calculaPerimetro($frente, $profundidade) {
    $perimetro = (2 * $frente) + (2 * $profundidade);
    return $perimetro;
}

function relatorioDoTerreno($frente, $profundidade) {
    $relatorio = "O terreno possui " . calculaAreaTerreno($frente, $profundidade) . "m2.";
    $relatorio = $relatorio . "<br>O terreno possui um perímetro de " . calculaPerimetro($frente, $profundidade) . "m";
    return $relatorio;
}

echo relatorioDoTerreno(25, 100);

?>