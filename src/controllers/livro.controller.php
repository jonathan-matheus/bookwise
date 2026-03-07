<?php
$livro = (new DB())->livro($_GET['id']);

view('livro', ['livro' => $livro]);