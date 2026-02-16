<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900 mb-4">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide"><a href="/">Book Wise</a></div>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-lime-400">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <?php require_once "views/{$view}.view.php"; ?>
    </main>
</body>

</html>