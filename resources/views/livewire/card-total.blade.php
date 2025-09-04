<div class="w-full max-w-sm h-auto rounded-2xl bg-stone-900/50 p-6 shadow-2xl shadow-stone-950/40
            border border-stone-800/40 backdrop-blur-sm">

    <div class="flex items-center gap-3 mb-6">
        <div class="p-2 bg-stone-800/50 border border-stone-700/60 rounded-lg">
            <svg class="h-6 w-6 text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 12a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25-2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0-9-6.375L3 12m18 0-9 6.375-9-6.375" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-stone-100 tracking-tight">Resumo Mensal</h2>
    </div>

    <div class="space-y-5">
        <div>
            <div class="flex justify-between items-center">
                <span class="text-stone-400">Entradas</span>
                <span class="text-lg font-semibold text-green-400 tracking-tighter">+ R$ {{ number_format($totalIncome, 2, ',', '.') }}</span>
            </div>
            <p class="text-xs text-stone-500 text-right">em 5 transações</p>
        </div>

        <div>
            <div class="flex justify-between items-center">
                <span class="text-stone-400">Saídas</span>
                <span class="text-lg font-semibold text-rose-400 tracking-tighter">- R$ {{ number_format($totalExpense, 2, ',', '.') }}</span>
            </div>
             <p class="text-xs text-stone-500 text-right">em 8 transações</p>
        </div>
    </div>

    <div class="mt-6">
        <h1>Meta de Gastos</h1>
        <div class="w-full bg-stone-700/50 rounded-full h-2.5">
            <div class="bg-rose-500 h-2.5 rounded-full" style="width: {{$percTotal}}%"></div>
        </div>
    </div>


    <div class="border-t border-stone-700/80 my-6"></div>

    <div class="flex justify-between items-center mb-6">
        <span class="text-lg font-medium text-stone-200">Saldo Final:</span>
        <span class="text-3xl font-bold text-green-400 tracking-tight">+ R$ {{ number_format(500, 2, ',', '.') }}</span>
    </div>

    <div class="flex items-center gap-3">
        <button class="btn flex-1 bg-green-500/10 border border-green-500/20 text-green-400 hover:bg-green-500/20">
            <i class="bi bi-plus-circle"></i> Receita
        </button>
        <button class="btn flex-1 bg-rose-500/10 border border-rose-500/20 text-rose-400 hover:bg-rose-500/20">
            <i class="bi bi-dash-circle"></i> Despesa
        </button>
    </div>

</div>
