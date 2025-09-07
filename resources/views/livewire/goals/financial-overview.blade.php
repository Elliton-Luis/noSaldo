<div class="w-full bg-stone-950 p-4 font-sans">
    <div class="w-full max-w-4xl mx-auto">

        <div class="w-full bg-stone-900 rounded-2xl shadow-lg border border-stone-800 p-6 sm:p-8">

            <section class="mb-8">
                <h2 class="text-2xl font-bold text-stone-100 mb-1">Evolução Patrimonial</h2>
                <p class="text-stone-400 mb-4">Veja o progresso geral das suas economias.</p>

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

                    @foreach ($goals as $goal)

                    <div class="w-full bg-stone-800 rounded-xl shadow-sm hover:shadow-md border border-stone-700 p-4 transition-all duration-300
                                 flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-5">

                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-amber-100 rounded-lg flex items-center justify-center">
                                <i class="bi {{$goal->icon->class}} text-amber-900 text-2xl"></i>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                        </div>
                            <div class="flex-grow w-full">
                            <div class="flex justify-between items-center mb-1">
                                <h3 class="text-lg font-semibold text-stone-200">{{$goal->name}}</h3>
                                <span class="text-sm font-medium text-amber-400">75%</span>

                            </div>
                            <div class="w-full bg-stone-700 rounded-full h-2.5">
                                <div class="bg-amber-400 h-2.5 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="sm:flex-shrink-0 w-full sm:w-36 text-left sm:text-right">
                            <p class="font-bold text-lg text-stone-200">{{number_format($goal->current_amount, 2, ',', '.') }} R$ </p>
                            <p class="text-sm text-stone-400">de {{number_format($goal->total_amount, 2, ',', '.')}} R$ </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            <livewire:goals.modal-create-goal/>
        </div>
    </div>
</div>
