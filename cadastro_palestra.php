<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<div class="container">';
    echo '<h2>✅ Palestra Cadastrada com Sucesso!</h2>';
    echo '<div class="dados-cadastro">';
    echo '<p><strong>Nome:</strong> ' . htmlspecialchars($_POST['nome_palestra']) . '</p>';
    echo '<p><strong>Descrição:</strong> ' . nl2br(htmlspecialchars($_POST['descricao'])) . '</p>';
    echo '<p><strong>Palestrante:</strong> ' . htmlspecialchars($_POST['palestrante']) . '</p>';
    echo '<p><strong>Horário:</strong> ' . htmlspecialchars($_POST['horario']) . '</p>';
    echo '</div>';
    echo '<a href="cadastro_palestra.html" class="botao">Voltar</a>';
    echo '</div>';
}
?>