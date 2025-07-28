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
<body>
    <livewire:components.navbar/>
    <livewire:incomes.form-create-income />

    <div class="bg-gray-800">
        @yield('content')
    </div>

    @if(Session::has('error'))
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


    @if(Session::has('success'))
    <div id="toast-success" class="toast">
        <div class="alert alert-success">
            <span>{{ Session('success') }}</span>
        </div>
    </div>

    <script>
        const toast = document.getElementById('toast-success');

        setTimeout(() => {
            toast.classList.add('opacity-0', 'transition-opacity', 'duration-500');
        }, 3000);
    </script>
    @endif

    @livewireScripts
</body>
</html>
