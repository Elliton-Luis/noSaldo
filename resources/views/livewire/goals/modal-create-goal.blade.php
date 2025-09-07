<div>
    <dialog id="goal_modal" class="modal backdrop:bg-black/70 backdrop-blur-sm" wire:ignore.self>
        <div class="p-6 sm:p-8 bg-stone-900 border border-stone-700 rounded-2xl w-full max-w-md">

            <h3 class="text-2xl font-bold text-center text-amber-400 tracking-tight">
                Cadastrar Nova Meta
            </h3>

            @if (Session::has('successGoal'))
                <div role="alert" id="successGoal" class="alert bg-green-900/50 border border-green-500/30 text-green-300 my-5">
                    <i class="bi bi-check-circle"></i>
                    <span>{{ Session('successGoal') }}</span>
                </div>
            @endif

            <div class="flex flex-col items-center gap-4 my-6">
                <div
                    class="w-24 h-24 bg-stone-800 border-2 border-dashed border-stone-600 rounded-full flex items-center justify-center">
                    <i class="bi bi-{{$iconClass}} text-amber-400 text-5xl"></i>
                </div>
                <button type="button"
                    class="px-4 py-2 bg-stone-700 hover:bg-stone-600 text-stone-200 text-sm font-semibold rounded-md transition-colors" onClick="icon_modal.showModal()">
                    Escolher Ícone
                </button>
            </div>

            <form class="space-y-4">
                <div>
                    <label for="goal_name" class="block text-sm font-medium text-stone-400 mb-2">Nome da Meta</label>
                    <input type="text" id="goal_name" name="goal_name" placeholder="Ex: Fundo de Emergência"
                        class="w-full p-3 bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                  focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                        wire:model.lazy="name" />
                        @error('name')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="goal_date" class="block text-sm font-medium text-stone-400 mb-2">Data Limite</label>
                    <input type="date" id="goal_date" name="goal_date"
                        class="w-full p-3 bg-stone-800 border border-stone-700 rounded-md text-stone-200
                                  focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                        wire:model.lazy="deadline" />
                        @error('deadline')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="goal_value" class="block text-sm font-medium text-stone-400 mb-2">Valor da Meta</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-stone-400">R$</span>
                        <input type="number" id="goal_value" name="goal_value" placeholder="10.000,00"
                            class="w-full p-3 pl-10 bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                      focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition"
                            wire:model.lazy="value" />
                            @error('value')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                    </div>
                </div>

                <div>
                    <label for="goal_priority" class="flex justify-between text-sm font-medium text-stone-400 mb-2">
                        <span>Prioridade</span>
                        <span class="font-bold text-amber-400">{{ $priority ?? 1 }}</span>
                    </label>
                    <input type="range" id="goal_priority" name="goal_priority" min="1" max="10"
                        class="w-full h-2 bg-stone-700 rounded-lg appearance-none cursor-pointer accent-amber-500"
                        wire:model.lazy="priority" />
                        @error('priority')
                        <small class="text-red-400 mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex items-center gap-3 pt-4">
                    <button type="button"
                        class="w-full py-3 font-semibold text-white bg-amber-600 hover:bg-amber-500 rounded-md transition-colors"
                        wire:click="createGoal()">
                        Salvar Meta
                    </button>
                    <button type="button"
                        class="w-full py-3 font-semibold text-stone-200 bg-stone-700 hover:bg-stone-600 rounded-md transition-colors"
                        onclick="document.getElementById('goal_modal').close()">
                        Fechar
                    </button>
                </div>
            </form>
        </div>
    </dialog>
    <livewire:goals.select-icon-modal/>
</div>
