<div>

    <table class="w-full border-collapse border-spacing-0">
        <thead>
            <tr>
                <th class="p-4 pl-0 text-left text-zinc-400">Currency</th>
                <th class="p-4 text-left text-zinc-400">CFGI</th>
                <th class="p-4 text-left text-zinc-400">Last 7 days</th>
                <th class="p-4 text-left text-zinc-400">Last Price</th>
                <th class="p-4 text-left text-zinc-400">&nbsp;</th>
            </tr>
        </thead>
        <tbody class="text-white">
            @foreach($currencies as $currency => $currencyDetails)
                <tr>
                    <td class="p-4 pl-0 border-t border-solid border-zinc-800">
                        <div class="flex items-center">
                            <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/{{ Str::lower($currencyDetails['ticker']) }}.svg" />
                            <div>
                                {{ $currencyDetails['name'] }} <small class="ml-1 text-zinc-400">{{ $currencyDetails['ticker'] }}</small>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-t border-solid border-zinc-800">
                        @if(!empty($currencyDetails['cfgi']))
                            @switch(true)
                                @case($currencyDetails['cfgi'] <= 20)
                                    <x-global.badges.status-badge type="extreme-fear" size="sm">EXTREME FEAR</x-global.badges.status-badge>
                                    @break
                                @case($currencyDetails['cfgi'] > 20 && $currencyDetails['cfgi'] <= 40)
                                    <x-global.badges.status-badge type="fear" size="sm">FEAR</x-global.badges.status-badge>
                                    @break
                                @case($currencyDetails['cfgi'] > 40 && $currencyDetails['cfgi'] <= 60)
                                    <x-global.badges.status-badge type="neutral" size="sm">NEUTRAL</x-global.badges.status-badge>
                                    @break
                                @case($currencyDetails['cfgi'] > 60 && $currencyDetails['cfgi'] <= 80)
                                    <x-global.badges.status-badge type="greed" size="sm">GREED</x-global.badges.status-badge>
                                    @break
                                @case($currencyDetails['cfgi']> 80 && $currencyDetails['cfgi'] <= 100)
                                    <x-global.badges.status-badge type="extreme-greed" size="sm">EXTREME GREED</x-global.badges.status-badge>
                                    @break
                                @case(null)
                                    @break
                                @default
                            @endswitch
                        @else
                          <svg class="fill-cyan-300 animate-spin" xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#5f6368"><path d="M204-318q-22-38-33-78t-11-82q0-134 93-228t227-94h7l-64-64 56-56 160 160-160 160-56-56 64-64h-7q-100 0-170 70.5T240-478q0 26 6 51t18 49l-60 60ZM481-40 321-200l160-160 56 56-64 64h7q100 0 170-70.5T720-482q0-26-6-51t-18-49l60-60q22 38 33 78t11 82q0 134-93 228t-227 94h-7l64 64-56 56Z"/></svg>
                        @endif
                    </td>
                    <td class="p-4 border-t border-solid border-zinc-800">
                        <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                    </td>
                    <td class="p-4 border-t border-solid border-zinc-800">
                        {{ $currencyDetails['price'] ? Number::currency($currencyDetails['price'], in: 'USD') : '' }}
                    </td>
                    <td class="p-4 border-t border-solid border-zinc-800 text-right">
                        <a href="{{ $currencyDetails['name'] ? url(Str::lower($currencyDetails['name']) . '-fear-greed-index') : '' }}" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-zinc-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>                                          
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@script
    <script>
        Livewire.dispatch('getScores');
    </script>
@endscript