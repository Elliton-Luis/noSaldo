<div>
    <button
        class="w-full text-base rounded bg-neutral-800 hover:border-gray-50 hover:bg-neutral-600 truncate overflow-hidden text-base px-3 py-2 text-left"
        onclick="modal_{{ $id }}.showModal()">
        {{ $description }}
    </button>

    <dialog id="modal_{{ $id }}" class="modal" wire:ignore.self>
        <div class="modal-box w-full max-w-sm p-6 bg-neutral-900 shadow-xl rounded-xl space-y-4">
            <h3 class="text-lg font-semibold text-white text-center">Editar
                {{ $description }}</h3>

            @if (Session::has('successEditIncome'))
                <div role="alert" id="successCategory" class="alert alert-success my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successEditIncome') }}</span>
                </div>
            @endif

            <div class="form-control mb-3">
                <label class="label">
                    <i class="bi bi-tag mr-2"></i>
                    <span class="label-text text-white font-bold">Nome</span>
                </label>
                <input required placeholder="Ex.Alimentação" type="text" class="input input-bordered bg-neutral-800"
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
                <input required placeholder="Ex.Alimentação" type="text" class="input input-bordered bg-neutral-800"
                    wire:model="value" />
                @error('categoryName')
                    <small class="block text-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-control mb-6">
                    <label class="label">
                        <i class="bi bi-arrow-repeat mr-2"></i>
                        <span class="label-text">Recorrência</span>
                    </label>
                    <select class="select select-bordered w-full bg-neutral-800" wire:model="type">
                        <option value="null" disabled selected>Selecione um tipo</option>
                        <option value="sporadic">Esporádico</option>
                        <option value="recurring">Recorrente</option>
                    </select>
                    @error('type')
                        <small class="text-error">{{$message}}</small>
                    @enderror
                </div>

            <div class="form-control mb-4">
                <label class="label">
                    <i class="bi bi-arrow-down-circle mr-2"></i>
                    <span class="label-text text-white font-bold">Categoria</span>
                </label>
                <select required class="select select-bordered bg-neutral-800 w-full" wire:model="category">
                    <option value="null" disabled selected>Selecione o Tipo da Categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('categoryType')
                    <small class="block text-error">{{ $message }}</small>
                @enderror
            </div>

            <div class="modal-action justify-end gap-2">
                <button class="btn btn-error"
                    onclick="modal_{{$id}}.close()">Fechar</button>
                <button class="btn btn-success" wire:click="changeIncome()">Salvar</button>
            </div>
        </div>
    </dialog>
</div>
