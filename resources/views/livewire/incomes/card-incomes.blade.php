<div class="p-4 md:p-6">

    <div class="w-full max-w-7xl mx-auto rounded-2xl bg-stone-900/70 border border-stone-800/40 p-6 md:p-8
                shadow-2xl shadow-stone-950/40">

        <div class="flex items-center gap-3 mb-8">
            <div class="p-2 bg-stone-800/50 border border-stone-700/60 rounded-lg">
                <svg class="h-6 w-6 text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-stone-100 tracking-tight">Receitas</h1>
        </div>

        @if ($incomes->isNotEmpty())

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($incomes as $income)
                    {{-- AJUSTES DE LAYOUT:
                        - Padding interno reduzido de p-6 para p-5.
                        - Espaço entre as seções reduzido de mt-6 para mt-5.
                        - Tamanho do valor financeiro reduzido de text-2xl para text-xl para melhor equilíbrio.
                    --}}
                    <div class="group flex flex-col justify-between rounded-2xl bg-stone-950/50 p-5 shadow-lg
                                border border-stone-800/40 backdrop-blur-sm
                                transition-all duration-300 ease-in-out
                                hover:scale-[1.03] hover:border-amber-600/70 hover:shadow-2xl hover:shadow-amber-600/20">

                        <div>
                            <h2 class="text-lg font-bold text-stone-100 mb-2 transition-colors duration-300 group-hover:text-amber-300">
                                {{ $income->description }}
                            </h2>
                            <p class="text-sm text-stone-400">
                                Categoria:
                                <span class="font-medium text-stone-300">
                                    {{ $income->category->name ?? 'Sem categoria' }}
                                </span>
                            </p>
                        </div>

                        <div class="mt-5 flex items-center justify-between">
                            <span class="rounded-full px-2.5 py-1 text-xs font-semibold
                                {{ $income->type === 'recurring'
                                    ? 'border border-amber-500/30 bg-amber-900/60 text-amber-300'
                                    : 'border border-stone-500/30 bg-stone-800/60 text-stone-300' }}">
                                {{ ucfirst($income->type_label) }}
                            </span>
                            <p class="text-xl font-bold tracking-tighter
                                {{ $income->type === 'recurring' ? 'text-green-500' : 'text-stone-400' }}">
                                R$ +{{ number_format($income->value, 2, ',', '.') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        @else

            <div class="flex flex-col items-center justify-center text-center py-16 px-6 rounded-lg bg-stone-800/50 border border-dashed border-stone-700">
                 <svg class="h-12 w-12 text-stone-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24" stroke-width="1.5" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                 </svg>
                <h2 class="text-xl font-semibold text-stone-300">Nenhuma receita foi cadastrada</h2>
                <p class="text-stone-500 mt-1">Quando cadastrar novas receitas, elas aparecerão aqui.</p>
            </div>

        @endif

    </div>
</div>
