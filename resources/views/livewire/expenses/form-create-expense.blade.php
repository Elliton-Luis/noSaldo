<div class="w-full h-full p-0">
    <dialog id="expense_modal" class="modal backdrop:bg-black/70 backdrop-blur-sm" wire:ignore.self>
        <div class="modal-box w-96 max-w-md bg-stone-900 border border-stone-700 rounded-2xl p-6 sm:p-8 relative">

            <button onclick="expense_modal.close()"
                class="absolute top-4 right-4 p-1 rounded-full text-stone-500 hover:bg-stone-700 hover:text-stone-200 transition-colors focus:outline-none focus:ring-2 focus:ring-red-500">
                <i class="bi bi-x-lg h-5 w-5"></i>
            </button>

            <h3 class="text-2xl font-bold text-center text-amber-400 tracking-tight mb-4">
                Cadastrar Despesa
            </h3>

            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-stone-800 border-2 border-dashed border-stone-600 rounded-full flex items-center justify-center">
                    <i class="bi bi-arrow-up-circle text-red-500 text-5xl"></i>
                </div>
            </div>


            @if (Session::has('successExpense'))
                <div role="alert" id="successExpense" class="alert bg-emerald-900/50 border border-red-500/30 text-red-300 my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successExpense') }}</span>
                </div>
            @endif

            <form wire:submit="storeExpense()" class="w-full space-y-4">
                <div>
                    <label for="expense_description" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-pencil-square"></i>
                        Descrição
                    </label>
                    <input id="expense_description" type="text" placeholder="Ex. Açai 500ml"
                        class="input w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                               focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition"
                        wire:model="description" />
                    @error('description')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="expense_value" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-currency-dollar"></i>Valor (R$)
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-stone-400">R$</span>
                        <input id="expense_value" type="number" step="0.01" placeholder="Ex.18,00"
                            class="input w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                   focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition"
                            wire:model="value" />
                        @error('value')
                            <small class="text-red-400 mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="expense_type" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-arrow-repeat"></i>
                        Recorrência
                    </label>
                    <select id="expense_type" class="select w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200
                                   focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition"
                        wire:model="type">
                        <option value="sporadic">Esporádico</option>
                        <option value="recurring">Recorrente</option>
                    </select>
                    @error('type')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="expense_category" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-tags"></i>
                        Categoria
                    </label>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <select id="expense_category" required
                            class="select w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200
                                   focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition"
                            wire:model="category">
                            <option value="null" disabled selected>Selecione uma Categoria</option>
                            @forelse ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                <option disabled selected>Crie uma Categoria -></option>
                            @endforelse
                        </select>
                        <button type="button"
                            class="px-4 py-2 bg-stone-700 hover:bg-stone-600 text-stone-200 text-sm font-semibold rounded-md transition-colors w-full sm:w-auto flex items-center justify-center gap-1"
                            onclick="category_modal.showModal()">
                            <i class="bi bi-plus"></i>
                            <span class="sm:hidden">Nova Categoria</span>
                        </button>
                    </div>
                    @error('category')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex items-center gap-3 pt-4">
                    <button type="button" class="w-full py-3 font-semibold text-stone-200 bg-stone-700 hover:bg-stone-600 rounded-md transition-colors"
                        onclick="expense_modal.close()">
                        Cancelar
                    </button>
                    <button type="submit" class="w-full py-3 font-semibold text-white bg-red-600 hover:bg-red-500 rounded-md transition-colors">
                        Salvar Despesa
                    </button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <livewire:create-category-modal />
</div>
