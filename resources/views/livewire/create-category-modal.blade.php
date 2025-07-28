<div>
    <dialog id="category_modal" class="modal" wire:ignore.self>
        <div class="modal-box w-full max-w-sm p-6 bg-base-100 shadow-xl rounded-xl space-y-4">
            <h3 class="text-lg font-semibold text-white text-center">Cadastrar Categoria</h3>

            @if (Session::has('successCategory'))
                <div role="alert" id="successCategory" class="alert alert-success my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successCategory') }}</span>
                </div>
            @endif

            <div class="form-control mb-3">
                <label class="label">
                    <i class="bi bi-tag mr-2"></i>
                    <span class="label-text text-white font-bold">Nome</span>
                </label>
                <input required placeholder="Ex.Alimentação" type="text" class="input input-bordered"
                    wire:model="categoryName" />
                    @error('categoryName')
                        <small class="block text-error">{{$message}}</small>
                    @enderror
            </div>

            <div class="form-control mb-4">
                <label class="label">
                    <i class="bi bi-arrow-down-circle mr-2"></i>
                    <span class="label-text text-white font-bold">Tipo</span>
                </label>
                <select required class="select select-bordered" wire:model="categoryType">
                    <option value="null" disabled selected>Selecione o Tipo da Categoria</option>
                    <option value="income">Receita</option>
                    <option value="expense">Despesa</option>
                    <option value="both">Ambos</option>
                </select>
                    @error('categoryType')
                        <small class="block text-error">{{$message}}</small>
                    @enderror
            </div>

            <div class="modal-action justify-end gap-2">
                <button class="btn btn-error" onclick="document.getElementById('category_modal').close()">Fechar</button>
                <button class="btn btn-success" wire:click="storeCategory()">Salvar</button>
            </div>
        </div>
    </dialog>
</div>
