<?php

$pessoa = [
    "Nome" => "Dionatan do Palio",
    "Idade"=> "boa pergunta",
    "Cidade" => "Guarpa",
    "Tchola"=> "muito tchola"

];

echo "<h3>Dados da pessoa:  </h3>";
foreach ($pessoa as $chave => $valor) {
 echo "<strong>$chave:</strong> $valor <br>";
} 
