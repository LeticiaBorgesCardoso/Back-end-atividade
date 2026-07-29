<!-- 13. Formulário de Cadastro e Cartão -->
<h3>13. Formulário de Cadastro</h3>
<form method="POST" action="">
    <label>Nome:</label><br><input type="text" name="cad_nome" required><br>
    <label>Email:</label><br><input type="email" name="cad_email" required><br>
    <label>Telefone:</label><br><input type="text" name="cad_telefone"><br>
    <label>Data de Nascimento:</label><br><input type="date" name="cad_nascimento"><br>
    <label>Cidade:</label><br><input type="text" name="cad_cidade"><br>
    <label>Estado:</label><br><input type="text" name="cad_estado"><br>
    <label>Sexo:</label><br>
    <select name="cad_sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
    </select><br>
    <label>Curso:</label><br><input type="text" name="cad_curso"><br>
    <label>Observações:</label><br><textarea name="cad_obs"></textarea><br><br>
    
    <button type="submit" name="btn_cadastrar">Enviar Cadastro</button>
</form>

<?php
if (isset($_POST['btn_cadastrar'])) {
    echo "
    <br>
    <div style='border: 2px solid #333; padding: 15px; width: 320px; border-radius: 8px; background-color: #f9f9f9;'>
        <h4 style='margin-top:0;'>🪪 Cartão de Cadastro</h4>
        <p><strong>Nome:</strong> " . htmlspecialchars($_POST['cad_nome']) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($_POST['cad_email']) . "</p>
        <p><strong>Telefone:</strong> " . htmlspecialchars($_POST['cad_telefone']) . "</p>
        <p><strong>Nascimento:</strong> " . htmlspecialchars($_POST['cad_nascimento']) . "</p>
        <p><strong>Cidade/UF:</strong> " . htmlspecialchars($_POST['cad_cidade']) . "/" . htmlspecialchars($_POST['cad_estado']) . "</p>
        <p><strong>Sexo:</strong> " . htmlspecialchars($_POST['cad_sexo']) . "</p>
        <p><strong>Curso:</strong> " . htmlspecialchars($_POST['cad_curso']) . "</p>
        <p><strong>Obs:</strong> " . htmlspecialchars($_POST['cad_obs']) . "</p>
    </div>
    ";
}
?>