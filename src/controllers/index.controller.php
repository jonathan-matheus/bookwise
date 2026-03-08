<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$db = new DB;

$livros = $db->query("select * from livros where titulo like :pesquisar", Livro::class, ['pesquisar' => "%$pesquisar%"])->fetchAll();

view('index', ['livros' => $livros]);
?>