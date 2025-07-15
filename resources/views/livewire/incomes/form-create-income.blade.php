<div class="space-y-4 w-80 p-6 bg-base-100 shadow-xl rounded-xl" >
    <div>
        <form wire:submit="storeIncome()">
            <h2 class="text-xl font-bold text-center text-white mb-6">Cadastro De Renda</h2>

            <div class="form-control mb-6">
            <label class="label">
                <span class="label-text">Descrição</span>
            </label>
            <input placeholder="Ex.Salário CLT" type="text" class="input input-bordered" wire:model="description" />
            </div>

            <div class="form-control mb-6">
            <label class="label">
                <span class="label-text">Valor (R$)</span>
            </label>
            <input placeholder="Ex.R$ 1.512,00" type="number" class="input input-bordered" wire:model="value" />
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">Categoria</span>
                </label>
                    <div class="flex gap-2">
                        <select class="select select-bordered flex-1" wire:model="category">
                        <option value="income">Entrada</option>
                        </select>
                        <button type="button" class="btn" onclick="my_modal_1.showModal()">
                        <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>


            <button type="submit" class="btn btn-primary w-full mt-2">Submit</button>
        </form>
    </div>

    <dialog id="my_modal_1" class="modal">
        <div class="modal-box p-6 space-y-4 w-80 p-6 bg-base-100 shadow-xl rounded-xl">
            <h3 class="text-lg font-semibold text-slate-800 mb-4 text-center text-white">Cadastrar Categoria</h3>

            <div class="form-control mb-3">
            <label class="label">
                <span class="mt-6 label-text text-slate-600 block font-bold text-white">Nome</span>
            </label>
            <input placeholder="Ex.Alimentação" type="text" class="input input-bordered border-slate-500 focus:border-primary focus:ring-0" wire:model="categoryName" />
            </div>

            <div class="form-control mb-4">
            <label class="label">
                <span class="label-text text-slate-600 font-bold text-white">Tipo</span>
            </label>
            <select class="select select-bordered border-slate-500 focus:border-primary focus:ring-0" wire:model="category">
                <option disabled selected>Selecione Uma Categoria</option>
                <option value="income">Entrada</option>
                <option value="expense">Gasto</option>
                <option value="both">Ambos</option>
            </select>
            </div>

            <div class="modal-action mt-6">
            <form method="dialog">
                <button type="submit" class="btn bg-teal-700 shadow-lg">Salvar</button>
            </form>
            </div>
        </div>
    </dialog>
</div>
