@extends('layouts.default')

@push('scriptVite')
    @vite(['resources/js/welcome.js'])
@endpush

@section('title','Lobby')

@section('content')

<div class="min-h-screen flex justify-center items-center p-4 bg-stone-950">

    <livewire:card-total/>
    
</div>

@endsection
