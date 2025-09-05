<div class="w-full h-full p-0">
    <dialog id="expense_modal" class="modal" wire:ignore.self>
        <div class="modal-box w-96 max-w-md flex flex-col items-center bg-stone-900 border-4 border-red-500/50">
            <h3 class="text-2xl font-bold mb-6 text-center text-stone-100 tracking-tight">Cadastrar Despesa</h3>

            @if (Session::has('successExpense'))
                <div role="alert" id="successExpense"
                    class="alert bg-red-900/50 border border-red-700/30 text-red-300 my-5 flex items-center gap-2">
                    <i class="bi bi-check-circle text-lg"></i>
                    <span>{{ Session('successExpense') }}</span>
                </div>
            @endif

            <form wire:submit="storeExpense()" class="w-full">
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-stone-400 flex items-center gap-2">
                            <i class="bi bi-pencil-square"></i>
                            Descrição
                        </span>
                    </label>
                    <input type="text" placeholder="Ex. Açai 500ml"
                        class="input input-bordered w-full bg-stone-800/50 border-stone-700 focus:border-amber-500 focus:ring-0"
                        wire:model="description" />
                    @error('description')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-stone-400 flex items-center gap-2">
                            <i class="bi bi-currency-dollar"></i>
                            Valor (R$)
                        </span>
                    </label>
                    <input type="number" step="0.01" placeholder="Ex: R$ 18,00"
                        class="input input-bordered w-full bg-stone-800/50 border-stone-700 focus:border-amber-500 focus:ring-0"
                        wire:model="value" />
                    @error('value')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-stone-400 flex items-center gap-2">
                            <i class="bi bi-arrow-repeat"></i>
                            Recorrência
                        </span>
                    </label>
                    <select class="select select-bordered w-full bg-stone-800/50 border-stone-700 focus:border-amber-500 focus:ring-0"
                        wire:model="type">
                        <option value="sporadic">Esporádico</option>
                        <option value="recurring">Recorrente</option>
                    </select>
                    @error('type')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-control mb-6">
                    <label class="label">
                        <span class="label-text text-stone-400 flex items-center gap-2">
                            <i class="bi bi-tags"></i>
                            Categoria
                        </span>
                    </label>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <select required
                            class="select select-bordered w-full bg-stone-800/50 border-stone-700 focus:border-amber-500 focus:ring-0"
                            wire:model="category">
                            <option value="null" disabled selected>Selecione uma Categoria</option>
                            @forelse ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                <option disabled selected>Crie uma Categoria -></option>
                            @endforelse
                        </select>
                        <button type="button"
                            class="btn bg-stone-700 hover:bg-stone-600 text-stone-200 border-0 w-full sm:w-auto"
                            onclick="category_modal.showModal()">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                    @error('category')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex items-center gap-2 mt-4">
                    <button type="submit"
                        class="btn flex-grow bg-red-600 hover:bg-amber-500 text-white border-0">Enviar</button>
                    <button type="button" class="btn bg-stone-700 hover:bg-stone-600 text-stone-200 border-0"
                        onclick="expense_modal.close()">Fechar</button>
                </div>
            </form>

        </div>
        <livewire:create-category-modal />
    </dialog>
</div>
