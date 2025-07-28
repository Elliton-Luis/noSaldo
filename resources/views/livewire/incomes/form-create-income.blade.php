<div class="w-full h-full p-0">
    <dialog id="income_modal" class="modal" wire:ignore.self>
        <div class="modal-box w-96 max-w-md flex flex-col items-center">
            <h3 class="text-2xl font-semibold mb-6 text-center">Cadastrar Receita</h3>
            @if (Session::has('successIncome'))
                <div role="alert" id="successIncome" class="alert alert-success my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successIncome') }}</span>
                </div>
            @endif
            <form wire:submit="storeIncome()">
                <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-pencil-square mr-2"></i>
                        <span class="label-text">Descrição</span>
                    </label>
                    <input placeholder="Ex.Salário CLT" type="text" class="input input-bordered w-full"
                        wire:model="description" />
                </div>

                <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-currency-dollar mr-2"></i>
                        <span class="label-text">Valor (R$)</span>
                    </label>
                    <input type="number" step="0.01" class="input input-bordered w-full" wire:model="value"
                        placeholder="Ex: R$ 1.512,00" />
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
                </div>

                <button type="submit" class="btn btn-soft btn-primary w-48 mt-2">Enviar</button>
                <button type="button" class="btn btn-soft btn-error w-24 mt-2" onclick="income_modal.close()">Fechar</button>
            </form>
        </div>

        <dialog id="category_modal" class="modal">
            <div class="modal-box w-full max-w-sm p-6 bg-base-100 shadow-xl rounded-xl space-y-4">
                <h3 class="text-lg font-semibold text-white text-center">Cadastrar Categoria</h3>

                <div class="form-control mb-3">
                    <label class="label">
                        <i class="bi bi-tag mr-2"></i>
                        <span class="label-text text-white font-bold">Nome</span>
                    </label>
                    <input placeholder="Ex.Alimentação" type="text" class="input input-bordered"
                        wire:model="categoryName" />
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <i class="bi bi-arrow-down-circle mr-2"></i>
                        <span class="label-text text-white font-bold">Tipo</span>
                    </label>
                    <select class="select select-bordered" wire:model="categoryType">
                        <option value="null" disabled selected>Selecione o Tipo da Categoria</option>
                        <option value="income">Receita</option>
                        <option value="expense">Despesa</option>
                        <option value="both">Ambos</option>
                    </select>
                </div>

                <div class="modal-action justify-end gap-2">
                    <button class="btn btn-error" onclick="document.getElementById('category_modal').close()">Fechar</button>
                    <button class="btn btn-success" wire:click="storeCategory()"
                        onclick="document.getElementById('category_modal').close()">Salvar</button>
                </div>
            </div>
        </dialog>
    </dialog>
</div>
