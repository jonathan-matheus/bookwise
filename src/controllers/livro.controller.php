<?php
$id = $_GET['id'];

$db = new DB;
$livro = $db->livros($id)[0];

view('livro', ['livro' => $livro]);