<div class="mt-6 grid grid-cols-2 gap-2">

    <div class="border-stone-700 border rounded p-4">
        <h1 class="border-b border-stone-700 px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="post">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input type="email" name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="joao@example.com">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input type="password" name="senha" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="********">
            </div>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Logar
            </button>
        </form>
    </div>

    <div class="border-stone-700 border rounded p-4">
        <h1 class="border-b border-stone-700 px-4 py-2">Registro</h1>
        <?php if ($mensagem): ?>
            <div class="bg-green-600 text-white p-2 rounded mb-4 mt-4">
                <?= htmlspecialchars($mensagem) ?>
            </div>
        <?php endif; ?>
        <form class="p-4 space-y-4" method="post" action="/registrar">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input type="text" name="nome" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="João">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input type="email" name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="joao@example.com">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu email</label>
                <input type="email" name="email_confirm" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="joao@example.com">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input type="password" name="senha" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="********">
            </div>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Registrar
            </button>
        </form>
    </div>

</div>