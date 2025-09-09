<div>
    <dialog id="category_modal" class="modal backdrop:bg-black/70 backdrop-blur-sm" wire:ignore.self>
        <div class="modal-box w-96 max-w-md bg-stone-900 border border-stone-700 rounded-2xl p-6 sm:p-8 relative">

            <button onclick="category_modal.close()"
                    class="absolute top-4 right-4 p-1 rounded-full text-stone-500 hover:bg-stone-700 hover:text-stone-200 transition-colors focus:outline-none focus:ring-2 focus:ring-amber-500">
                <i class="bi bi-x-lg h-5 w-5"></i>
            </button>

            <h3 class="text-2xl font-bold text-center text-amber-400 tracking-tight mb-4">
                Cadastrar Categoria
            </h3>

            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-stone-800 border-2 border-dashed border-stone-600 rounded-full flex items-center justify-center">
                    <i class="bi bi-tag text-amber-500 text-5xl"></i>
                </div>
            </div>

            @if (Session::has('successCategory'))
                <div role="alert" id="successCategory" class="alert bg-green-900/50 border border-green-500/30 text-green-300 my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successCategory') }}</span>
                </div>
            @endif

            <form wire:submit="storeCategory()" class="w-full space-y-4">
                <div>
                    <label for="category_name" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-tag"></i>
                        Nome
                    </label>
                    <input id="category_name" placeholder="Ex. Alimentação" type="text"
                           class="input w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                  focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                           wire:model="categoryName" required />
                    @error('categoryName')
                        <small class="text-red-400 mt-1">{{$message}}</small>
                    @enderror
                </div>

                <div>
                    <label for="category_type" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-arrow-down-up"></i> Tipo
                    </label>
                    <select id="category_type" class="select w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200
                                     focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            wire:model="categoryType" required>
                        <option value="null" disabled selected>Selecione o Tipo</option>
                        <option value="income">Receita</option>
                        <option value="expense">Despesa</option>
                        <option value="both">Ambos</option>
                    </select>
                    @error('categoryType')
                        <small class="text-red-400 mt-1">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex items-center gap-3 pt-4">
                    <button type="button" class="w-full py-3 font-semibold text-stone-200 bg-stone-700 hover:bg-stone-600 rounded-md transition-colors"
                            onclick="category_modal.close()">
                        Cancelar
                    </button>
                    <button type="submit" class="w-full py-3 font-semibold text-white bg-amber-600 hover:bg-amber-500 rounded-md transition-colors">
                        Salvar
                    </button>
                </div>
            </form>
        </div>

        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
