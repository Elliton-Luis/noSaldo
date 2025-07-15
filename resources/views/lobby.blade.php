@extends('layouts.default')

@push('scriptVite')
    @vite(['resources/js/welcome.js'])
@endpush

@section('title','lobby')

@section('content')

<div class="min-h-screen flex justify-center items-center align-center">

    <div class="flex items-center justify-center h-screen">
        <div class="w-72 h-96 bg-base-300 shadow-xl rounded-2xl flex flex-col justify-between border border-base-300 p-6">

            <h2 class="text-xl font-bold text-center text-slate-200">Saldo Total</h2>

            <div class="space-y-3 text-sm text-slate-600">
                <div class="flex justify-between">
                    <span class="text-primary-content">Entrada:</span>
                    <span class="text-green-600 text-lg">+R$ 1.000,00</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-primary-content">Saída:</span>
                    <span class="text-red-500 text-lg">-R$ 500,00</span>
                </div>
            <div class="border-t border-base-300 my-2"></div>
                <div class="flex justify-between text-base font-semibold text-slate-800">
                    <hr class="border-white my-2">
                    <span class="text-primary-content">Total:</span>
                    <span class="text-green-600 text-lg">+R$ 500,00</span>
                </div>
            </div>

        </div>
    </div>




</div>

@endsection
