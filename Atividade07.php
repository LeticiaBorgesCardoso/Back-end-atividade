<?php

function calculareFrase(int $num1 , int $num2) {
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;

    return "A soma é $soma, e a subtracao é $subtracao e lembre se: relacionamento bom e aquele que os dois dao a bunda"; 
    
    }

    echo calculareFrase(15,5) ." <br>";
