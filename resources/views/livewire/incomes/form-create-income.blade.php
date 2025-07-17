<div class="space-y-4 w-96 p-6 bg-base-100 shadow-xl rounded-xl" >
    <div>
        @if(Session::has('successIncome'))
            <div role="alert" id="successIncome" class="alert alert-success my-5">
                <i class="bi bi-check-circle"></i>
                <span>{{ Session('successIncome') }}</span>
            </div>
        @endif
        <form wire:submit="storeIncome()">
            <h2 class="text-xl font-bold text-center text-white mb-6">Cadastro de Receita</h2>

            <div class="form-control mb-6">
            <label class="label">
                <i class="bi bi-pencil-square"></i>
                <span class="label-text">Descrição</span>
            </label>
            <input placeholder="Ex.Salário CLT" type="text" class="input input-bordered" wire:model="description" />
            </div>

            <div class="form-control mb-6">
            <label class="label">
                <i class="bi bi-currency-dollar"></i>
                <span class="label-text">Valor (R$)</span>
            </label>
            <input type="number" step="0.01" class="input input-bordered" wire:model="value" placeholder="Ex: R$ 1.512,00" />
            </div>

            <div class="form-control mb-6">
                <label class="label">
                    <i class="bi bi-arrow-repeat"></i>
                    <span class="label-text">Recorrência</span>
                </label>
                    <div class="flex gap-2">
                        <select class="select select-bordered flex-1" wire:model="type">
                        <option value="null" disabled selected>Selecione um tipo</option>
                        <option value="sporadic">Esporádico</option>
                        <option value="recurring">Recorrente</option>
                        </select>
                    </div>
            </div>

            <div class="form-control">
                <label class="label">
                    <i class="bi bi-tags"></i>
                    <span class="label-text">Categoria</span>
                </label>
                    <div class="flex gap-2">
                        <select required class="select select-bordered flex-1" wire:model="category">
                        <option value="null" disabled selected>Selecione uma Categoria</option>
                        @forelse ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @empty
                            <option disabled selected>Crie uma Categoria -></option>
                        @endforelse
                        </select>
                        <button type="button" class="btn" onclick="my_modal.showModal()">
                        <i class="bi bi-plus"></i>
                        </button>
                    </div>
            </div>


            <button type="submit" class="btn btn-primary w-full mt-2">Submit</button>
        </form>
    </div>

    <dialog id="my_modal" class="modal">
        <div class="modal-box p-6 space-y-4 w-80 p-6 bg-base-100 shadow-xl rounded-xl">
            <h3 class="text-lg font-semibold text-slate-800 mb-4 text-center text-white">Cadastrar Categoria</h3>

            <div class="mt-6 form-control mb-3">
            <label class="label">
                <i class="bi bi-tag text-lg"></i>
                <span class="label-text text-slate-600 block font-bold text-white">Nome</span>
            </label>
            <input placeholder="Ex.Alimentação" type="text" class="input input-bordered border-slate-500 focus:border-primary focus:ring-0" wire:model="categoryName" />
            </div>

            <div class="form-control mb-4">
            <label class="label">
                <i class="bi bi-arrow-down-circle text-lg"></i>
                <span class="label-text text-slate-600 font-bold text-white">Tipo</span>
            </label>
            <select class="select select-bordered border-slate-500 focus:border-primary focus:ring-0" wire:model="categoryType">
                <option value="null" disabled selected>Selecione o Tipo da Categoria</option>
                <option value="income">Receita</option>
                <option value="expense">Despesa</option>
                <option value="both">Ambos</option>
            </select>
            </div>

            <div class="modal-action mt-6">
                <button class="btn bg-red-500 shadow-lg" onclick="document.getElementById('my_modal').close()">Fechar</button>
                <button class="btn bg-teal-700 shadow-lg" wire:click="storeCategory()" onclick="document.getElementById('my_modal').close()">Salvar</button>
            </div>
        </div>
    </dialog>
</div>
