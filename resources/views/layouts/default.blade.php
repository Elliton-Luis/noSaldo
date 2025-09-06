<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scriptVite')
    @livewireStyles
</head>

<body class="sm:ml-40 ">
    <div class="block">
        <livewire:components.navbar />
    </div>

    <livewire:incomes.form-create-income />
    <livewire:expenses.form-create-expense />

    <div class="bg-stone-950">
        @yield('content')
    </div>

    @if (Session::has('error'))
        <div id="toast-error" class="toast">
            <div class="alert alert-error">
                <span>{{ Session('error') }}</span>
            </div>
        </div>

        <script>
            const toast = document.getElementById('toast-error');

            setTimeout(() => {
                toast.classList.add('opacity-0', 'transition-opacity', 'duration-500');
            }, 3000);
        </script>
    @endif


    @if (Session::has('success'))
        <div id="toast-success"
            class="fixed bottom-5 right-5 p-4 rounded-lg shadow-lg bg-green-900/80 backdrop-blur-sm border border-green-700 text-green-300 transition-opacity duration-500">
            <span>{{ Session('success') }}</span>
        </div>
        <script>
            setTimeout(() => document.getElementById('toast-success')?.classList.add('opacity-0'), 3000);
        </script>
    @endif

    @livewireScripts
</body>

</html>
