<?php
require_once './dados.php';
$id = $_GET['id'];
$livro = array_filter($livros, fn($livro) => $livro['id'] == $id);
$livro = array_pop($livro);

view('livro', ['livro' => $livro]);

