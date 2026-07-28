<?php

$numeros = [4, 7, 12879.5];

foreach ($numeros as $base) {
    echo "<h3>Tabuada do " . number_format($base, 1, ',', '.') . "</h3>";
    
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $base * $i;
        // Formata o resultado para o padrão brasileiro (ex: 1.000,00)
        $resultadoFormatado = number_format($resultado, 2, ',', '.');
        echo "$base x $i = $resultadoFormatado < >";
    }
}

echo "<hr>";