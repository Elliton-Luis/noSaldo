<div class="fixed top-4 left-4 right-4 bg-base-300 text-primary-content shadow-lg rounded-2xl p-1 z-50">
  <div class="navbar py-1 px-3">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm p-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-200 rounded-box z-10 mt-3 w-40 p-1 shadow">
          <li>
            <a href="{{route('income.index')}}" class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-primary hover:text-primary-content rounded">
              <i class="bi bi-bag-plus-fill text-lg"></i>
              <span>Receitas</span>
            </a>
          </li>
          <li>
            <a class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-primary hover:text-primary-content rounded">
              <i class="bi bi-bag-dash-fill text-lg"></i>
              <span>Despesas</span>
            </a>
          </li>
          <li>
            <a class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-primary hover:text-primary-content rounded">
              <i class="bi bi-award-fill text-lg"></i>
              <span>Metas</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="navbar-center">
      <a href="{{route('lobby')}}" class="btn btn-ghost text-lg p-1">NoSaldo</a>
    </div>

    <div class="navbar-end space-x-2 text-sm md:text-lg">
        <div class="navbar-end space-x-2 text-sm md:text-lg">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-md p-1">
                {{ auth()->user()->name }}
                </div>

                <ul tabindex="0"class="menu menu-sm dropdown-content bg-base-200 rounded-box z-10 mt-3 w-40 p-1 shadow">
                <li>
                    <a class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-primary hover:text-primary-content rounded">
                    <i class="bi bi-person text-lg"></i>
                    <span>Usuário</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-2 text-base px-3 py-1 hover:bg-primary hover:text-primary-content rounded" href="{{route('login.logout')}}">
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
