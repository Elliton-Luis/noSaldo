@extends('layouts.default')

@push('scriptVite')
    @vite(['resources/js/welcome.js'])
@endpush

@section('title','Welcome to Livewire with DaisyUI')

@section('content')

<div class="min-h-screen flex justify-center items-center">
        <livewire:components.navbar/>
        
        <div class="card-body">

        </div>
</div>
@endsection
