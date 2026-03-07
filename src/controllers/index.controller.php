<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$db = new DB;

$livro = $db->query("select * from livros")->fetchAll();

$livros = (new DB)->livros($pesquisar);

view('index', ['livros' => $livros]);
?>