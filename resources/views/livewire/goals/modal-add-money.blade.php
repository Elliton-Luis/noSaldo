<dialog id="add_money_{{ $goalId }}" class="modal backdrop:bg-black/70 backdrop-blur-sm" wire:ignore.self>
    <div class="p-6 sm:p-8 bg-stone-900 border border-stone-700 rounded-2xl w-full max-w-md">

        <button onclick="document.getElementById('add_money').close()"
            class="absolute top-4 right-4 p-1 rounded-full text-stone-500 hover:bg-stone-700 hover:text-stone-200 transition-colors focus:outline-none focus:ring-2 focus:ring-amber-500">
            <i class="bi bi-x-lg h-5 w-5"></i>
        </button>

        @if (Session::has('successSave'))
            <div role="alert" id="successSave"
                class="alert bg-green-900/50 border border-green-500/30 text-green-300 my-5 duration-500">
                <i class="bi bi-check-circle"></i>
                <span>{{ Session('successSave') }}</span>
            </div>
        @endif

        @if (Session::has('errorSave'))
            <div role="alert" id="errorSave"
                class="alert bg-red-900/50 border border-red-500/30 text-red-300 my-5 duration-500">
                <i class="bi bi-check-circle"></i>
                <span>{{ Session('errorSave') }}</span>
            </div>
        @endif

        <h3 class="text-2xl font-bold text-center text-amber-400 tracking-tight">
            Adicionar Valor
        </h3>
        <p class="text-center text-stone-400 mt-2">Insira um valor para adicionar ao seu saldo.</p>

        <div class="flex justify-center my-6">
            <div
                class="w-24 h-24 bg-stone-800 border-2 border-dashed border-stone-600 rounded-full flex items-center justify-center">
                <i class="bi bi-currency-dollar text-amber-400 text-5xl"></i>
            </div>
        </div>

        <form class="space-y-4">
            <div>
                <label for="valorInput" class="block text-sm font-medium text-stone-400 mb-2">Valor</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-stone-400">R$</span>
                    <input type="number" wire:model.lazy="value" step="0.01" id="valorInput" name="valorInput"
                        placeholder="99,99"
                        class="w-full p-3 pl-10 bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                               focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition" />
                </div>
            </div>

            <div class="flex items-center gap-3 pt-4">
                <button type="button"
                    class="w-full py-3 font-semibold text-stone-200 bg-stone-700 hover:bg-stone-600 rounded-md transition-colors"
                    onclick="document.getElementById('add_money_{{ $goalId }}').close()">
                    Fechar
                </button>
                <button wire:click="save()" type="button"
                    class="w-full py-3 font-semibold text-white bg-amber-600 hover:bg-amber-500 rounded-md transition-colors">
                    Salvar Valor
                </button>
            </div>
        </form>
    </div>
</dialog>
