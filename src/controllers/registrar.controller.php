<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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