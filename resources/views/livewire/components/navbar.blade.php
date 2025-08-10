<div class="z-50">
    <div
        class="hidden md:fixed md:top-0 md:left-0 md:h-screen md:w-40 md:bg-zinc-950 md:text-primary-content md:shadow-lg md:p-4 md:flex md:flex-col md:justify-between md:z-50">
        <div>
            <div class="text-center text-lg font-bold mb-4">
                <a href="{{ route('lobby') }}" class="btn btn-ghost w-full">NoSaldo</a>
            </div>

            <ul class="menu space-y-1">
                <li>
                    <a href="{{ route('income.index') }}"
                        class="flex items-center space-x-2 px-3 py-2 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                        <i class="bi bi-bag-plus-fill text-lg"></i>
                        <span>Receitas</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-2 px-3 py-2 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                        <i class="bi bi-bag-dash-fill text-lg"></i>
                        <span>Despesas</span>
                    </a>
                </li>
                <li>
                    <a
                        class="flex items-center space-x-2 px-3 py-2 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                        <i class="bi bi-award-fill text-lg"></i>
                        <span>Metas</span>
                    </a>
                </li>
                <hr>
                <li>
                    <details class="dropdown">
                        <summary class="btn btn-ghost btn-warning m-1"><i class="bi bi-plus-square"></i>Criar</summary>
                        <ul class="menu dropdown-content bg-neutral-800 rounded-box z-1 w-32 p-2 shadow-sm">
                            <li class="h-10 w-full"><a class="btn btn-ghost btn-warning h-full justify-start"
                                    onclick="income_modal.showModal()">
                                    <i class="bi bi-wallet-fill"></i>
                                    Receita
                                </a>
                            </li>

                            <li class="h-10 w-full"><a class="btn btn-ghost btn-warning h-full justify-start"
                                    onclick="expense_modal.showModal()">
                                    <i class="bi bi-basket2-fill"></i>
                                    Gasto
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>

        <div class="dropdown dropdown-top">
            <div tabindex="0" role="button" class="btn btn-ghost w-full justify-start">
                <i class="bi bi-person-circle text-xl mr-2"></i>
                <span>{{ auth()->user()->name }}</span>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-200 rounded-box mt-2 w-full p-1 shadow">
                <li>
                    <a
                        class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                        <i class="bi bi-person text-lg"></i>
                        <span>Usuário</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded"
                        href="{{ route('login.logout') }}">
                        <i class="bi bi-box-arrow-in-left text-lg"></i>
                        <span>Sair</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="md:hidden fixed block w-full bg-base-300 text-primary-content shadow-lg z-50">
        <div class="navbar py-1 px-3">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-200 rounded-box z-10 mt-3 w-40 p-1 shadow">
                        <li>
                            <a href="{{ route('income.index') }}"
                                class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                                <i class="bi bi-bag-plus-fill text-lg"></i>
                                <span>Receitas</span>
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                                <i class="bi bi-bag-dash-fill text-lg"></i>
                                <span>Despesas</span>
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                                <i class="bi bi-award-fill text-lg"></i>
                                <span>Metas</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <details class="dropdown">
                                <summary class="btn btn-ghost btn-warning mt-2 text-base w-full"><i
                                        class="bi bi-plus-square"></i>Criar
                                </summary>
                                <ul class="menu dropdown-content bg-neutral-900 rounded-box z-1 w-32 p-2 shadow-sm">
                                    <li class="h-10 w-full"><a
                                            class="btn btn-ghost btn-warning h-full justify-start text-base"
                                            onclick="income_modal.showModal()">
                                            <i class="bi bi-cone-striped"></i>
                                            Receita
                                        </a></li>
                                    <li class="h-10 w-full"><a
                                            class="btn btn-ghost btn-warning h-full justify-start text-base"
                                            onclick="expense_modal.showModal()">
                                            <i class="bi bi-cone-striped"></i>
                                            Gasto
                                        </a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="navbar-center">
                <a href="{{ route('lobby') }}" class="btn btn-ghost text-lg p-1">NoSaldo</a>
            </div>

            <div class="navbar-end space-x-2 text-sm md:text-lg">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-md p-1">
                        <i class="bi bi-person-circle text-xl"></i>
                        <span class="text-lg">{{ auth()->user()->name }}</span>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-200 rounded-box z-10 mt-3 w-40 p-1 shadow">
                        <li>
                            <a
                                class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded">
                                <i class="bi bi-person text-lg"></i>
                                <span>Usuário</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-neutral-800 hover:text-yellow-400 rounded"
                                href="{{ route('login.logout') }}">
                                <i class="bi bi-box-arrow-in-left text-lg"></i>
                                <span>Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
