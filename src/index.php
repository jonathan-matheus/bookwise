<?php
require_once './dados.php';

$controller = 'index';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

if ($uri && $uri !== 'index.php') {
    $controller = $uri;
}

require_once 'controllers/' . $controller . '.controller.php';
?>