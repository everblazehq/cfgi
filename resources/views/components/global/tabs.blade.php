@php
    $tabs = [
        [
            'url' => '/signals',
            'text' => 'Signals',
            'icon' => 'warning',
        ],
        [
            'url' => '/profile',
            'text' => 'Profile',
            'icon' => 'user',
        ],
        [
            'url' => '/signal-historical',
            'text' => 'Signal Historical',
            'icon' => 'file',
        ],
        [
            'url' => '/plans',
            'text' => 'Plans',
            'icon' => 'bookmark',
        ],
        [
            'url' => '/notifications',
            'text' => 'Notifications',
            'icon' => 'link',
        ],
        [
            'url' => '/api',
            'text' => 'API',
            'icon' => 'api',
        ],
        [
            'url' => '/affiliate',
            'text' => 'Affiliate Program',
            'icon' => 'dollar',
        ],
    ];
@endphp

<section id="tabs">
    <ul class="flex items-center p-2 gap-2 border border-zinc-700 rounded-xl bg-zinc-900/50 mt-12">
        @foreach($tabs as $tab)
            <li>
                <a href="{{ $tab['url'] }}" class="flex items-center py-4 px-6 font-semibold text-lg text-zinc-400 hover:text-blue-500 hover:bg-blue-700/30 rounded-xl transition-colors" wire:current="!text-white !bg-accent-blue">
                    <x-dynamic-component :component="'icons.' . $tab['icon']" class="mr-2 hover:stroke-blue-500" />
                    {!! $tab['text'] !!}
                </a>
            </li>
        @endforeach
    </ul>
</section>