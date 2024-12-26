@extends('layout.tabs')

@section('body')
    <section id="content">
        <div class="mt-10 rounded-xl border border-zinc-700 bg-zinc-950/50 p-8">
            <h1 class="text-3xl font-bold">Notifications</h1>
            <p class="mt-2">Connect your signal notifications</p>

            <div class="flex items-center justify-between">
                <div class="flex items-center justify-center rounded-full w-16 h-16 bg-accent-blue">
                    <x-heroicons-o-window />
                </div>
            </div>
        </div>
    </section>
@endsection
