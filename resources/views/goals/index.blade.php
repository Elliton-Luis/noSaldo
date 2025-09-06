@extends('layouts.default')

@push('scriptVite')
    @vite(['resources/js/welcome.js'])
@endpush

@section('title','lobby')

@section('content')

<div class="min-h-screen flex justify-center items-center align-center">
    <livewire:goals.financial-overview/>
</div>
@endsection
