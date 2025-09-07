<div class="w-full bg-stone-950 p-4 font-sans">
    <div class="w-full max-w-4xl mx-auto">

        <div class="w-full bg-stone-900 rounded-2xl shadow-lg border border-stone-800 p-6 sm:p-8">

            <section class="mb-8">
                <div class="flex flex-wrap gap-4 justify-between items-center mb-2">
                    <div>
                        <h2 class="text-2xl font-bold text-stone-100">Evolução Patrimonial</h2>
                        <p class="text-stone-400">Veja o progresso geral das suas economias.</p>
                    </div>
                    <div class="text-right">
                        <p class="text-stone-400 text-sm">Saldo Atual</p>
                        <h2 class="text-2xl font-bold text-emerald-400">R$ {{ number_format($totalBalance ?? 0, 2, ',', '.') }}</h2>
                    </div>
                </div>

                <div class="h-60 bg-stone-800 border border-stone-700 rounded-xl flex items-center justify-center">
                    <p class="text-stone-500 font-medium">Espaço para o gráfico</p>
                </div>
            </section>

            <section>
                <div class="flex flex-wrap gap-2 justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-stone-100">Suas Metas</h2>
                    <button class="px-4 py-2 text-sm bg-amber-400 hover:bg-amber-500 border-none text-stone-900 font-bold rounded-md transition-colors" onclick="goal_modal.showModal()">
                        + Nova Meta
                    </button>
                </div>

                <div class="space-y-4">

                    @forelse ($goals as $goal)

                    <div class="w-full bg-stone-800 rounded-xl shadow-sm hover:shadow-md border border-stone-700 p-4 transition-all duration-300
                                 flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-5">

                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-amber-100 rounded-lg flex items-center justify-center">
                                <i class="bi {{$goal->icon->class}} text-amber-900 text-2xl"></i>
                            </div>
                        </div>

                        <div class="flex-grow w-full">
                            <div class="flex justify-between items-center mb-1">
                                <h3 class="text-lg font-semibold text-stone-200">{{$goal->name}}</h3>
                                @php
                                    $percentage = ($goal->total_amount > 0) ? ($goal->current_amount / $goal->total_amount) * 100 : 0;
                                @endphp
                                <span class="text-sm font-medium text-amber-400">{{ number_format($percentage, 0) }}%</span>
                            </div>
                            <div class="w-full bg-stone-700 rounded-full h-2.5">
                                <div class="bg-amber-400 h-2.5 rounded-full" style="width: {{ $percentage }}%"></div>
                            </div>
                        </div>

                        <div class="w-full sm:w-auto flex flex-row items-center justify-between sm:justify-end gap-4 mt-2 sm:mt-0">

                            <div class="text-left sm:text-right flex-shrink-0">
                                <p class="font-bold text-lg text-stone-200">{{number_format($goal->current_amount, 2, ',', '.') }} R$ </p>
                                <p class="text-sm text-stone-400">de {{number_format($goal->total_amount, 2, ',', '.')}} R$ </p>
                            </div>

                            <div class="flex items-center gap-2">
                                <button title="Adicionar Dinheiro" class="w-10 h-10 flex items-center justify-center bg-stone-700 hover:bg-stone-600 text-stone-300 rounded-lg transition-colors"
                                        onclick="add_money_modal.showModal({{$goal->id}})">
                                    <i class="bi bi-plus-circle-fill text-xl"></i>
                                </button>
                                <button title="Editar Meta" class="w-10 h-10 flex items-center justify-center bg-stone-700 hover:bg-stone-600 text-stone-300 rounded-lg transition-colors"
                                        onclick="edit_goal_modal.showModal({{$goal->id}})">
                                    <i class="bi bi-pencil-square text-lg"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    @empty
                    <div class="w-full bg-stone-800 rounded-xl border border-stone-700 p-8 text-center">
                        <p class="text-stone-400">Nenhuma Meta Cadastrada até agora.</p>
                    </div>
                    @endforelse
                </div>
            </section>

            <livewire:goals.modal-create-goal />
            {{-- <livewire:goals.modal-add-money /> --}}
            {{-- <livewire:goals.modal-edit-goal /> --}}
        </div>
    </div>
</div>
