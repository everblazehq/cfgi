<div>

    <table class="w-full border-collapse border-spacing-0">
        <thead>
            <tr>
                <th class="p-4 pl-0 text-left text-slate-400">Currency</th>
                <th class="p-4 text-left text-slate-400">CFGI</th>
                <th class="p-4 text-left text-slate-400">Last 7 days</th>
                <th class="p-4 text-left text-slate-400">Last Price</th>
                <th class="p-4 text-left text-slate-400">&nbsp;</th>
            </tr>
        </thead>
        <tbody class="text-white">
            @foreach($currencies as $currency => $currencyDetails)
                <tr>
                    <td class="p-4 pl-0 border-t border-solid border-slate-800">
                        <div class="flex items-center">
                            <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/{{ Str::lower($currencyDetails['ticker']) }}.svg" />
                            <div>
                                {{ $currencyDetails['name'] }} <small class="ml-1 text-slate-400">{{ $currencyDetails['ticker'] }}</small>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-t border-solid border-slate-800">
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
                        @endif
                    </td>
                    <td class="p-4 border-t border-solid border-slate-800">
                        <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                    </td>
                    <td class="p-4 border-t border-solid border-slate-800">
                        {{ Number::currency($currencyDetails['price'], in: 'USD') }}
                    </td>
                    <td class="p-4 border-t border-solid border-slate-800 text-right">
                        <a href="{{ url(Str::lower($currencyDetails['name']) . '-fear-greed-index') }}" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
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