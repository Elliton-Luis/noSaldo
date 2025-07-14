<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scriptVite')
    @livewireStyles
</head>
<body>

    <div class="min-h-screen flex items-center justify-center bg-base-200">
        <div class="card w-full max-w-sm bg-base-100 shadow-lg rounded-2xl p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        @if (Session::has('error'))
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{Session('error')}}</span>
            </div>
        @endif

            <form method="POST" action="{{route('login.auth')}}">
                @csrf
                <div class="form-control mb-4">
                    <label class="label">
                    <span class="label-text">Email</span>
                    </label>
                    <input type="email" placeholder="your@email.com" class="input input-bordered" name="email" />
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror
                </div>

                <div class="form-control mb-6">
                    <label class="label">
                    <span class="label-text">Password</span>
                    </label>
                    <input type="password" placeholder="••••••••" class="input input-bordered" name="password"/>
                    @error('password')
                        <small>{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-full">Login</button>
            </form>

            <div class="text-center mt-4 text-sm">
            <a href="#" class="link link-hover">Forgot your password?</a>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
