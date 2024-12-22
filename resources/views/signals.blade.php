@extends('layout.tabs')

@section('body')
    <section id="content">
        <div class="mt-10 grid grid-cols-3 gap-6">
            <div class="flex aspect-[21/9] items-center justify-center rounded-xl border border-zinc-700 bg-zinc-950/50 p-6">
                <div class="text-center">
                    <h3>7</h3>
                    <p class="mt-4">Received Alerts</p>
                </div>
            </div>
            <div class="flex aspect-[21/9] items-center justify-center rounded-xl border border-zinc-700 bg-zinc-950/50 p-6">
                <div class="text-center">
                    <h3>2</h3>
                    <p class="mt-4">Configured Alerts</p>
                </div>
            </div>
            <div class="flex aspect-[21/9] items-center justify-center rounded-xl border border-zinc-700 bg-zinc-950/50 p-6">
                <div class="text-center">
                    <h3>91</h3>
                    <p class="mt-4">Alerts Remaining</p>
                </div>
            </div>
        </div>
        
        <div class="mt-10 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">Simple Alerts</h1>
                <p class="mt-2">Change notification and alert settings</p>
            </div>

            <x-button variant="primary">Guide</x-button>
        </div>
    </section>
@endsection
