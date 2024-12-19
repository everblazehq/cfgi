@extends('layout.app')

@section('body')
<div class="w-full h-screen flex flex-col items-center justify-center">
    <h1 class="text-5xl text-white">Test Page</h1>
    <p class="w-full text-xl text-white text-center">{{ $counter }}</p>
    <button wire:click="increment" class="bg-blue-500 text-white px-4 py-2 rounded-md">Increment</button>
</div>
@endsection

