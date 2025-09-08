<div class="w-full h-full p-0">
    <dialog id="income_modal" class="modal backdrop:bg-black/70 backdrop-blur-sm" wire:ignore.self>
        <div class="modal-box w-96 max-w-md bg-stone-900 border border-stone-700 rounded-2xl p-6 sm:p-8 relative">

            <button onclick="income_modal.close()"
                class="absolute top-4 right-4 p-1 rounded-full text-stone-500 hover:bg-stone-700 hover:text-stone-200 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500">
                <i class="bi bi-x-lg h-5 w-5"></i>
            </button>

            <h3 class="text-2xl font-bold text-center text-amber-400 tracking-tight mb-4">
                Cadastrar Receita
            </h3>

            <div class="flex justify-center mb-6">
                <div class="w-24 h-24 bg-stone-800 border-2 border-dashed border-stone-600 rounded-full flex items-center justify-center">
                    <i class="bi bi-arrow-down-circle text-green-500 text-5xl"></i> {{-- Ícone verde para receita --}}
                </div>
            </div>

            @if (Session::has('successIncome'))
                <div role="alert" id="successIncome" class="alert bg-green-900/50 border border-green-500/30 text-green-300 my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successIncome') }}</span>
                </div>
            @endif

            <form wire:submit="storeIncome()" class="w-full space-y-4">
                <div>
                    <label for="income_description" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-pencil-square"></i>
                        Descrição
                    </label>
                    <input id="income_description" placeholder="Ex. Salário CLT" type="text"
                        class="input w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                               focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                        wire:model="description" />
                    @error('description')
                        <small class="text-red-400 mt-1">{{$message}}</small>
                    @enderror
                </div>

                <div>
                    <label for="income_value" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-currency-dollar"></i>
                        Valor (R$)
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-stone-400">R$</span>
                        <input type="number" step="0.01" id="income_value" wire:model="value"
                            class="input w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                   focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                            placeholder="Ex: 1512,00" />
                        @error('value')
                            <small class="text-red-400 mt-1">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="income_type" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-arrow-repeat"></i>
                        Recorrência
                    </label>
                    <select id="income_type" class="select w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200
                                   focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                        wire:model="type">
                        <option value="sporadic">Esporádico</option>
                        <option value="recurring">Recorrente</option>
                    </select>
                    @error('type')
                        <small class="text-red-400 mt-1">{{$message}}</small>
                    @enderror
                </div>

                <div>
                    <label for="income_category" class="block text-sm font-medium text-stone-400 mb-2 flex items-center gap-2">
                        <i class="bi bi-tags"></i>
                        Categoria
                    </label>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <select id="income_category" required
                            class="select w-full bg-stone-800 border border-stone-700 rounded-md text-stone-200
                                   focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
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
                        <small class="text-red-400 mt-1">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex items-center gap-3 pt-4">
                    <button type="button" class="w-full py-3 font-semibold text-stone-200 bg-stone-700 hover:bg-stone-600 rounded-md transition-colors"
                        onclick="income_modal.close()">
                        Cancelar
                    </button>
                    <button type="submit" class="w-full py-3 font-semibold text-white bg-green-600 hover:bg-green-500 rounded-md transition-colors">
                        Salvar Receita
                    </button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <livewire:create-category-modal/>
</div>
