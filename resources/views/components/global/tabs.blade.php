@php
    $tabs = [
        [
            'url' => '/signals',
            'text' => 'Signals',
        ],
        [
            'url' => '/profile',
            'text' => 'Profile',
        ],
        [
            'url' => '/signal-historical',
            'text' => 'Signal Historical',
        ],
        [
            'url' => '/plans',
            'text' => 'Plans',
        ],
        [
            'url' => '/notifications',
            'text' => 'Notifications',
        ],
        [
            'url' => '/api',
            'text' => 'API',
        ],
        [
            'url' => '/affiliate',
            'text' => 'Affiliate Program',
        ],
    ];
@endphp

<section id="tabs">
    <ul class="flex items-center p-2 gap-2 border border-zinc-700 rounded-xl bg-zinc-900/50 mt-12">
        @foreach($tabs as $tab)
            <li>
                <a href="{{ $tab['url'] }}" class="flex items-center py-4 px-6 font-semibold text-xl text-zinc-400 hover:text-white hover:bg-blue-700 rounded-xl transition-colors" wire:current="!text-white bg-accent-blue">
                    {!! $tab['icon'] ?? '' !!}
                    {!! $tab['text'] !!}
                </a>
            </li>
        @endforeach
    </ul>
</section>