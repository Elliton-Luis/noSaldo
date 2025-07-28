<div class="w-full h-full p-0">
    <dialog id="expense_modal" class="modal" wire:ignore.self>
        <div class="modal-box w-96 max-w-md flex flex-col items-center">
            <h3 class="text-2xl font-semibold mb-6 text-center">Cadastrar Gasto</h3>
            @if (Session::has('successExpense'))
                <div role="alert" id="successExpense" class="alert alert-success my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successExpense') }}</span>
                </div>
            @endif
            <form wire:submit="storeExpense()">
                <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-pencil-square mr-2"></i>
                        <span class="label-text">Descrição</span>
                    </label>
                    <input placeholder="Ex.Salário CLT" type="text" class="input input-bordered w-full"
                        wire:model="description" />
                    @error('description')
                        <small class="text-error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-currency-dollar mr-2"></i>
                        <span class="label-text">Valor (R$)</span>
                    </label>
                    <input type="number" step="0.01" class="input input-bordered w-full" wire:model="value"
                        placeholder="Ex: R$ 1.512,00" />
                        @error('value')
                        <small class="text-error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-arrow-repeat mr-2"></i>
                        <span class="label-text">Recorrência</span>
                    </label>
                    <select class="select select-bordered w-full" wire:model="type">
                        <option value="null" disabled selected>Selecione um tipo</option>
                        <option value="sporadic">Esporádico</option>
                        <option value="recurring">Recorrente</option>
                    </select>
                    @error('type')
                        <small class="text-error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-tags mr-2"></i>
                        <span class="label-text">Categoria</span>
                    </label>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <select required class="select select-bordered w-full" wire:model="category">
                            <option value="null" disabled selected>Selecione uma Categoria</option>
                            @forelse ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                <option disabled selected>Crie uma Categoria -></option>
                            @endforelse
                        </select>
                        <button type="button" class="btn btn-neutral w-full sm:w-auto" onclick="category_modal.showModal()">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                    @error('category')
                    <small class="text-error">{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-soft btn-primary w-48 mt-2">Enviar</button>
                <button type="button" class="btn btn-soft btn-error w-24 mt-2" onclick="expense_modal.close()">Fechar</button>
            </form>
        </div>
        <livewire:create-category-modal/>
    </dialog>
</div>
