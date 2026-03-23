<?php

$mensagem = $_GET['mensagem'] ?? null;

view('login', compact('mensagem'));