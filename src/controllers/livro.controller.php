<?php
$id = $_GET['id'];

$db = new DB;
$livro = $db->livro($id);

view('livro', ['livro' => $livro]);