@props([
    'title' => '',
    'subtitle' => '',
    'primaryAction' => ''
])

<div {{ $attributes }} class="fixed bottom-0 left-0 right-0 top-0 z-9999 flex items-center justify-center after:fixed after:bottom-0 after:left-0 after:right-0 after:top-0 after:bg-zinc-950/80">
    <div class="relative z-10 mx-auto flex max-h-[90vh] min-w-[50vw] max-w-[80vw] flex-col rounded-xl border border-zinc-700 bg-zinc-950 p-8 lg:max-w-[50vw]">
        <div class="flex items-center justify-between">
            <div>
                @if($title)
                    <h3>{!! $title ?? '' !!}</h3>
                @endif

                @if($subtitle)
                    <p class="mt-2">{!! $subtitle !!}</p>
                @endif
            </div>

            <button class="rounded-full bg-zinc-900 p-2 transition-colors hover:bg-zinc-800" x-on:click="showModalAddress = false">
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff"><path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"/></svg>
            </button>
        </div>

        <div class="mt-8 overflow-auto">
            {{ $slot }}
        </div>

        <div class="mt-12 flex items-center justify-end gap-2">
            <x-button variant="outline" x-on:click="showModalAddress = false">Discard</x-button>
            <x-button variant="primary" type="submit">Submit</x-button>
        </div>
    </div>
</div>