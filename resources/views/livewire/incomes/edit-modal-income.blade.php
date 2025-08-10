<div>
    <button
        class="w-full text-base rounded bg-neutral-700 hover:border-gray-50 hover:bg-neutral-500 truncate overflow-hidden text-base px-3 py-2 text-left"
        onclick="modal_{{ $id }}.showModal()">
        {{ $description }}
    </button>

    <dialog id="modal_{{ $id }}" class="modal" wire:ignore.self>
        <div class="modal-box w-full max-w-sm p-6 bg-base-100 shadow-xl rounded-xl space-y-4">
            <h3 class="text-lg font-semibold text-white text-center">Editar
                {{ $description }}</h3>

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
                    wire:model="description" />
                @error('description')
                    <small class="block text-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-control mb-3">
                <label class="label">
                    <i class="bi bi-cash"></i>
                    <span class="label-text text-white font-bold">Valor</span>
                </label>
                <input required placeholder="Ex.Alimentação" type="text" class="input input-bordered"
                    wire:model="value" />
                @error('categoryName')
                    <small class="block text-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-control mb-4">
                <label class="label">
                    <i class="bi bi-arrow-down-circle mr-2"></i>
                    <span class="label-text text-white font-bold">Tipo</span>
                </label>
                <select required class="select select-bordered" wire:model="type">
                    <option value="null" disabled selected>Selecione o Tipo da Categoria</option>
                    <option value="income">Receita</option>
                    <option value="expense">Despesa</option>
                    <option value="both">Ambos</option>
                </select>
                @error('categoryType')
                    <small class="block text-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-control mb-4">
                <label class="label">
                    <i class="bi bi-arrow-down-circle mr-2"></i>
                    <span class="label-text text-white font-bold">Categoria</span>
                </label>
                <select required class="select select-bordered" wire:model="category">
                    <option value="null" disabled selected>Selecione o Tipo da Categoria</option>
                    <option value="income">Receita</option>
                    <option value="expense">Despesa</option>
                    <option value="both">Ambos</option>
                </select>
                @error('categoryType')
                    <small class="block text-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="modal-action justify-end gap-2">
                <button class="btn btn-error"
                    onclick="modal_{{$id}}.close()">Fechar</button>
                <button class="btn btn-success">Salvar</button>
            </div>
        </div>
    </dialog>
</div>
