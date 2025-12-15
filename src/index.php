<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-lime-400">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <h1 class="mt-6 font-bold text-lg">Explorar</h1>
        <form class="w-full space-x-2">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm px-2 py-1"
                placeholder="Buscar livro" name="pesquisar">
            <button type="submit">🔎</button>
        </form>
        <section class="space-y-4">
            <div class="w-1/3 p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div>
                        <div class="font-semibold">titulo</div>
                        <div class="text-xs italic">autor</div>
                        <div class="text-xs italic">⭐️⭐️⭐️⭐️⭐️ (3 avaliações)</div>
                    </div>
                </div>
                <div>
                    Descrição
                </div>
            </div>
        </section>
    </main>
</body>

</html>