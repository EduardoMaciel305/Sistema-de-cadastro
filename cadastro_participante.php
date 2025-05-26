<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<div class="container">';
    echo '<h2>✅ Inscrição Realizada com Sucesso!</h2>';
    echo '<div class="dados-cadastro">';
    echo '<p><strong>Nome:</strong> ' . htmlspecialchars($_POST['nome_completo']) . '</p>';
    echo '<p><strong>Idade:</strong> ' . htmlspecialchars($_POST['idade']) . '</p>';
    echo '<p><strong>Telefone:</strong> ' . htmlspecialchars($_POST['telefone']) . '</p>';
    
    if ($_POST['tipo'] === 'aluno') {
        echo '<p><strong>RM:</strong> ' . htmlspecialchars($_POST['rm']) . '</p>';
    } else {
        echo '<p><strong>CPF:</strong> ' . htmlspecialchars($_POST['cpf']) . '</p>';
    }
    
    echo '</div>';
    echo '<a href="cadastro_participante.html" class="botao">Voltar</a>';
    echo '</div>';
}
?>