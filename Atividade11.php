<?php ?>
<h3>11. Calculadora de IMC</h3>
<form method="POST" action="">
    <label>Peso (kg):</label><br>
    <input type="number" step="0.1" name="peso" required><br><br>
    
    <label>Altura (m):</label><br>
    <input type="number" step="0.01" name="altura" required><br><br>
    
    <button type="submit" name="btn_imc">Calcular IMC</button>
</form>

<?php
if (isset($_POST['btn_imc'])) {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    
    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        echo "<p>Seu IMC é: " . number_format($imc, 2, ',', '.') . "</p>";
    }
}
?>