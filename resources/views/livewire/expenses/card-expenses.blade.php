<div class="p-4 md:p-6">

    <div class="w-full max-w-7xl mx-auto rounded-2xl bg-stone-900/70 border border-stone-800/40 p-6 md:p-8
                shadow-2xl shadow-stone-950/40 mt-16 md:mt-0">
        <div class="flex items-center gap-3 mb-8">
            <div class="p-2 bg-stone-800/50 border border-stone-700/60 rounded-lg">
                <svg class="h-6 w-6 text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-stone-100 tracking-tight">Despesas</h1>
        </div>

        @if ($expenses->isNotEmpty())

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($expenses as $expense)

                    <div class="group flex flex-col justify-between rounded-2xl bg-stone-950/50 p-5 shadow-lg
                                w-60 border-stone-800/40 backdrop-blur-sm
                                transition-all duration-300 ease-in-out
                                hover:scale-[1.03] hover:border-red-600/70 hover:shadow-2xl hover:shadow-red-600/20
                                aspect-[2/1]">
                        <div>
                            <h2 class="text-lg font-bold text-stone-100 mb-2 transition-colors duration-300 group-hover:text-red-300">
                                {{ $expense->description }}
                            </h2>
                            <p class="text-sm text-stone-400">
                                Categoria:
                                <span class="font-medium text-stone-300">
                                    {{ $expense->category->name ?? 'Sem categoria' }}
                                </span>
                            </p>
                        </div>

                        <div class="mt-5 flex flex-col items-start gap-4">
                            <span class="rounded-full px-2.5 py-1 text-xs font-semibold
                                {{ $expense->type === 'recurring'
                                    ? 'border border-red-500/30 bg-red-900/60 text-red-300'
                                    : 'border border-stone-500/30 bg-stone-800/60 text-red-400' }}">
                                {{ ucfirst($expense->type_label) }}
                            </span>
                            <p class="text-xl font-bold tracking-tighter text-red-500">
                                R$ -{{ number_format($expense->value, 2, ',', '.') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        @else

            <div class="flex flex-col items-center justify-center text-center py-16 px-6 rounded-lg bg-stone-800/50 border border-dashed border-stone-700">
                <svg class="h-12 w-12 text-stone-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>
                <h2 class="text-xl font-semibold text-stone-300">Nenhuma despesa foi cadastrada</h2>
                <p class="text-stone-500 mt-1">Quando cadastrar novas despesas, elas aparecerão aqui.</p>
            </div>

        @endif
        {{-- $expenses->links('vendor.livewire.tailwind') --}}
    </div>
</div>
