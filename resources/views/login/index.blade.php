<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Moderno</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scriptVite')
    @livewireStyles
</head>
<body class="bg-stone-900 text-stone-300 antialiased">

    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">

        <div class="absolute top-0 -left-1/4 w-96 h-96 bg-amber-500/20 rounded-full filter blur-3xl opacity-40 animate-pulse"></div>
        <div class="absolute bottom-0 -right-1/4 w-96 h-96 bg-amber-500/20 rounded-full filter blur-3xl opacity-40 animate-pulse animation-delay-4000"></div>

        <div class="relative z-10 w-full max-w-md p-8 space-y-6 bg-stone-900/60 backdrop-blur-xl border border-stone-700 rounded-2xl shadow-2xl shadow-amber-500/10">
            <h2 class="text-3xl font-bold text-center text-amber-500 tracking-wider">
                Login
            </h2>

            @if (Session::has('error'))
                <div class="flex items-center gap-2 p-3 text-sm text-red-400 bg-red-900/50 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ Session('error') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('login.auth') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="text-sm font-medium text-stone-400">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                               placeholder="seu@email.com"
                               class="w-full p-3 bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                      focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                    </div>
                    @error('email')
                        <small class="text-red-400 text-xs mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="password" class="text-sm font-medium text-stone-400">Senha</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               placeholder="••••••••"
                               class="w-full p-3 bg-stone-800 border border-stone-700 rounded-md text-stone-200 placeholder-stone-500
                                      focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition">
                    </div>
                    @error('password')
                        <small class="text-red-400 text-xs mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                            class="w-full py-3 font-semibold text-stone-900 bg-amber-500 rounded-md
                                   hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2
                                   focus:ring-offset-stone-900 focus:ring-amber-500 transition-colors duration-300">
                        Entrar
                    </button>
                </div>
            </form>

            <div class="text-center text-sm">
                <a href="#" class="font-medium text-amber-500 hover:text-amber-500 transition-colors">
                    Esqueceu sua senha?
                </a>
            </div>
        </div>
    </div>

    @if(Session::has('error'))
    <div id="toast-error" class="fixed bottom-5 right-5 p-4 rounded-lg shadow-lg bg-red-900/80 backdrop-blur-sm border border-red-700 text-red-300 transition-opacity duration-500">
        <span>{{ Session('error') }}</span>
    </div>
    <script>
        setTimeout(() => document.getElementById('toast-error')?.classList.add('opacity-0'), 3000);
    </script>
    @endif

    @if(Session::has('success'))
    <div id="toast-success" class="fixed bottom-5 right-5 p-4 rounded-lg shadow-lg bg-green-900/80 backdrop-blur-sm border border-green-700 text-green-300 transition-opacity duration-500">
        <span>{{ Session('success') }}</span>
    </div>
    <script>
        setTimeout(() => document.getElementById('toast-success')?.classList.add('opacity-0'), 3000);
    </script>
    @endif

    @livewireScripts
</body>
</html>
