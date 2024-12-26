@extends('layout.tabs')

@section('body')
    <section id="content">
        <div class="mt-10 rounded-xl border border-zinc-700 bg-zinc-950/50 p-8">
            <h1 class="text-3xl font-bold">Notifications</h1>
            <p class="mt-2">Connect your signal notifications</p>

            <div class="flex items-center justify-between mt-10">
                <div class="flex items-center">
                    <div class="flex items-center justify-center rounded-full w-16 h-16 bg-accent-blue">
                        <x-heroicon-o-window class="stroke-2 w-8 h-8" />
                    </div>
                    <div class='ml-4'>
                        <h4>Browser</h4>
                        <p>Not Connected</p>
                    </div>
                </div>

                <button class="flex items-center justify-center rounded-full w-16 h-16 border border-zinc-400">
                    <x-heroicon-o-link class="stroke-2 w-6 h-6" />
                </button>
            </div>

            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center">
                    <div class="flex items-center justify-center rounded-full w-16 h-16 bg-accent-blue">
                        <x-heroicon-o-at-symbol class="stroke-2 w-8 h-8" />
                    </div>
                    <div class='ml-4'>
                        <h4>Email</h4>
                        <p class="text-accent-green">Connected</p>
                    </div>
                </div>

                <button class="flex items-center justify-center rounded-full w-16 h-16 border border-zinc-400">
                    <x-heroicon-o-x-mark class="stroke-2 w-6 h-6" />
                </button>
            </div>
        </div>
    </section>
@endsection
