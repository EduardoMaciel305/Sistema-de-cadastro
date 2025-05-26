<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<div class="container">';
    echo '<h2>✅ Mensagem Enviada com Sucesso!</h2>';
    echo '<div class="dados-cadastro">';
    echo '<p><strong>Nome:</strong> ' . htmlspecialchars($_POST['nome']) . '</p>';
    echo '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
    echo '<p><strong>Mensagem:</strong> ' . nl2br(htmlspecialchars($_POST['mensagem'])) . '</p>';
    echo '</div>';
    echo '<a href="contato.html" class="botao">Voltar</a>';
    echo '</div>';
}
?>