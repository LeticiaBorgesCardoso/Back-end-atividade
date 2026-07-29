<!-- 12. Calculadora HTML -->
<h3>12. Calculadora HTML</h3>
<form method="POST" action="">
    <label>Número 1:</label><br>
    <input type="number" step="any" name="num1" required><br><br>
    
    <label>Número 2:</label><br>
    <input type="number" step="any" name="num2" required><br><br>
    
    <button type="submit" name="operacao_calc" value="somar">Somar</button>
    <button type="submit" name="operacao_calc" value="subtrair">Subtrair</button>
    <button type="submit" name="operacao_calc" value="multiplicar">Multiplicar</button>
    <button type="submit" name="operacao_calc" value="dividir">Dividir</button>
</form>

<?php
if (isset($_POST['operacao_calc'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operacao_calc'];
    $res = 0;

    switch ($op) {
        case 'somar':
            $res = $n1 + $n2;
            break;
        case 'subtrair':
            $res = $n1 - $n2;
            break;
        case 'multiplicar':
            $res = $n1 * $n2;
            break;
        case 'dividir':
            $res = ($n2 != 0) ? ($n1 / $n2) : "Divisão por zero não permitida";
            break;
    }

    echo "<p><strong>Resultado:</strong> $res</p>";
}
?>

<hr>