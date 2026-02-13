<form class="w-full space-x-2">
    <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm px-2 py-1"
        placeholder="Buscar livro" name="pesquisar">
    <button type="submit">🔎</button>
</form>

<section class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid gap-4">
    <?php foreach ($livros as $livro) { ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
                    <div class="text-xs italic"><?= $livro->autor ?></div>
                    <div class="text-xs italic">⭐️⭐️⭐️⭐️⭐️ (3 avaliações)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $livro->descricao ?>
            </div>
        </div>
    <?php } ?>
</section>