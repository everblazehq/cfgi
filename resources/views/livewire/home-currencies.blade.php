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
                            <x-global.badges.status-badge value="{{ $currencyDetails['cfgi'] }}" type="basic" size="sm" />
                            <div>
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
                            <svg class="w-5 -rotate-45" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#ffffff"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
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
