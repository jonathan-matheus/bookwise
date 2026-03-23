<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validacoes = [];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $email_confirmacao = $_POST['email_confirm'];
    $senha = $_POST['senha'];

    // Nome precisa ser obrigatório
    if (empty($nome)) {
        $validacoes[] = 'O nome é obrigatório';
    }

    // Email precisa ser obrigatório
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validacoes[] = 'O email é inválido';
    }

    // Email de confirmação precisa ser igual ao email
    if ($email !== $email_confirmacao) {
        $validacoes[] = 'Os emails não coincidem';
    }

    // Senha precisa ser obrigatória
    if (empty($senha)) {
        $validacoes[] = 'A senha é obrigatória';
    }

    // A senha precisa ter entre 8 e 30 caracteres
    if (strlen($senha) < 8 || strlen($senha) > 30) {
        $validacoes[] = 'A senha deve ter entre 8 e 30 caracteres';
    }

    if (!empty($validacoes)) {
        $_SESSION['validacoes'] = $validacoes;
        header('Location: /login');
        exit;
    }

    $database->query(
        query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
        ]
    );

    header('Location: /login?mensagem=Registrado com sucesso');
}