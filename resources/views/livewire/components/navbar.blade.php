<div class="z-50">
    <aside
        class="hidden md:fixed md:top-0 md:left-0 md:h-screen md:w-48 md:bg-stone-950 md:flex md:flex-col md:justify-between md:z-50
                   border-r border-stone-800/50 p-3">

        <div>
            <a href="{{ route('lobby') }}"
                class="flex items-center justify-center gap-2 text-lg font-bold text-stone-100 mb-8">
                <svg class="h-6 w-6 text-amber-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 12a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25-2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0-9-6.375L3 12" />
                </svg>
                <span>NoSaldo</span>
            </a>

            <ul class="space-y-1">
                <li>
                    <a href="{{ route('income.index') }}"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-stone-400 text-sm transition-colors hover:bg-stone-800 hover:text-stone-100">
                        <i class="bi bi-arrow-up-right-circle-fill text-lg"></i>
                        <span>Receitas</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-stone-400 text-sm transition-colors hover:bg-stone-800 hover:text-stone-100">
                        <i class="bi bi-arrow-down-left-circle-fill text-lg"></i>
                        <span>Despesas</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-stone-400 text-sm transition-colors hover:bg-stone-800 hover:text-stone-100">
                        <i class="bi bi-trophy-fill text-lg"></i>
                        <span>Metas</span>
                    </a>
                </li>
            </ul>

            <div class="border-t border-stone-800 my-4"></div>

            <div class="dropdown w-full">
                <button tabindex="0"
                    class="btn btn-sm w-full bg-amber-600 hover:bg-amber-500 text-white border-0 font-semibold">
                    <i class="bi bi-plus-lg"></i>
                    Novo
                </button>
                <ul tabindex="0"
                    class="dropdown-content menu mt-2 w-full bg-stone-800 rounded-lg shadow-lg z-10 text-sm">
                    <li><a onclick="income_modal.showModal()"><i class="bi bi-wallet-fill"></i>Receita</a></li>
                    <li><a onclick="expense_modal.showModal()"><i class="bi bi-basket2-fill"></i>Gasto</a></li>
                </ul>
            </div>
        </div>

        <div class="dropdown dropdown-top w-full">
            <div tabindex="0" role="button"
                class="flex items-center gap-2 w-full p-2 rounded-lg transition-colors hover:bg-stone-800">
                <i class="bi bi-person-circle text-xl text-stone-400"></i>
                <span class="font-medium text-stone-200 text-sm truncate">{{ auth()->user()->name }}</span>
            </div>
            <ul tabindex="0" class="dropdown-content menu mb-2 w-full bg-stone-800 rounded-lg shadow-lg text-sm">
                <li><a><i class="bi bi-person-fill"></i>Perfil</a></li>
                <li><a href="{{ route('login.logout') }}"><i class="bi bi-box-arrow-right"></i>Sair</a></li>
            </ul>
        </div>
    </aside>

    <nav class="md:hidden fixed top-0 left-0 w-full bg-stone-950/80 backdrop-blur-lg z-50 border-b border-stone-800/50">
        <div class="flex items-center justify-between p-3">

            <div class="dropdown">
                <button tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </button>
                <ul tabindex="0"
                    class="dropdown-content menu mt-3 w-64 bg-stone-900 border border-stone-800 rounded-lg shadow-lg z-50 p-2 space-y-1 text-base">
                    <li><a href="{{ route('income.index') }}"
                            class="flex items-center gap-3 px-4 py-2 rounded hover:bg-stone-800">
                            <i class="bi bi-arrow-up-right-circle-fill text-lg"></i> Receitas
                        </a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-stone-800">
                            <i class="bi bi-arrow-down-left-circle-fill text-lg"></i> Despesas
                        </a></li>
                    <li><a href="#" class="flex items-center gap-3 px-4 py-2 rounded hover:bg-stone-800">
                            <i class="bi bi-trophy-fill text-lg"></i> Metas
                        </a></li>

                    <div class="border-t border-stone-800 my-2"></div>

                    <li><a onclick="income_modal.showModal()"
                            class="flex items-center gap-3 px-4 py-2 rounded hover:bg-stone-800">
                            <i class="bi bi-wallet-fill text-lg"></i> Nova Receita
                        </a></li>
                    <li><a onclick="expense_modal.showModal()"
                            class="flex items-center gap-3 px-4 py-2 rounded hover:bg-stone-800">
                            <i class="bi bi-basket2-fill text-lg"></i> Novo Gasto
                        </a></li>
                </ul>
            </div>


            <a href="{{ route('lobby') }}" class="btn btn-ghost text-lg">NoSaldo</a>

            <div class="dropdown dropdown-end">
                <button tabindex="0" class="btn btn-ghost btn-circle">
                    <i class="bi bi-person-circle text-2xl"></i>
                </button>
                <ul tabindex="0"
                    class="dropdown-content menu mt-3 w-52 bg-stone-900 border border-stone-800 rounded-lg shadow-lg z-10 p-2">
                    <li class="p-2">
                        <span class="font-medium text-stone-200 truncate">{{ auth()->user()->name }}</span>
                    </li>
                    <div class="border-t border-stone-800 my-2"></div>
                    <li><a><i class="bi bi-person-fill"></i>Perfil</a></li>
                    <li><a href="{{ route('login.logout') }}"><i class="bi bi-box-arrow-right"></i>Sair</a></li>
                </ul>
            </div>

        </div>
    </nav>
</div>
