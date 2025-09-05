<div>
    <dialog id="category_modal" class="modal" wire:ignore.self>
        <div class="modal-box w-full max-w-sm bg-stone-900 border-2 border-amber-600">
            <h3 class="text-2xl font-bold text-center text-stone-100 tracking-tight">Cadastrar Categoria</h3>

            @if (Session::has('successCategory'))
                <div role="alert" id="successCategory" class="alert mt-6 bg-amber-900/50 border border-amber-500/30 text-amber-300">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successCategory') }}</span>
                </div>
            @endif

            <div class="form-control mt-6">
                <label class="label">
                    <span class="label-text text-stone-400 flex items-center gap-2">
                        <i class="bi bi-tag"></i>
                        Nome
                    </span>
                </label>
                <input required placeholder="Ex. Alimentação" type="text"
                       class="input input-bordered w-full bg-stone-800/50 border-stone-700 focus:border-amber-500 focus:ring-0"
                       wire:model="categoryName" />
                @error('categoryName')
                    <small class="text-red-400 mt-1">{{$message}}</small>
                @enderror
            </div>

            <div class="form-control mt-4">
                <label class="label">
                    <span class="label-text text-stone-400 flex items-center gap-2">
                       <i class="bi bi-arrow-down-circle"></i>
                       Tipo
                    </span>
                </label>
                <select required class="select select-bordered w-full bg-stone-800/50 border-stone-700 focus:border-amber-500 focus:ring-0" wire:model="categoryType">
                    <option value="null" disabled selected>Selecione o Tipo</option>
                    <option value="income">Receita</option>
                    <option value="expense">Despesa</option>
                    <option value="both">Ambos</option>
                </select>
                @error('categoryType')
                    <small class="text-red-400 mt-1">{{$message}}</small>
                @enderror
            </div>

            <div class="flex items-center gap-2 mt-6">
                <button class="btn flex-grow bg-amber-600 hover:bg-amber-500 text-white border-0" wire:click="storeCategory()">Salvar</button>
                <button class="btn bg-stone-700 hover:bg-stone-600 text-stone-200 border-0" onclick="document.getElementById('category_modal').close()">Fechar</button>
            </div>
        </div>
    </dialog>
</div>
