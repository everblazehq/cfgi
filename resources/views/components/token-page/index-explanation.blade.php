@props(['indicators'])

<section class="bg-background-secondary rounded-xl p-6">
    <h2 class="text-xl font-semibold mb-4">Bitcoin Fear and Greed Index Indicator Explained</h2>
    <div class="flex gap-6">
        <!-- Left sidebar with indicators -->
        <div class="w-48 space-y-3">
            @foreach($indicators as $indicator)
                <button class="w-full bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-left">
                    {{ $indicator }}
                </button>
            @endforeach
        </div>
        <!-- Right content -->
        <div class="flex-1">
            <p class="text-text-secondary mb-4">
                The Bitcoin Fear and Greed Index is a multifactorial market analysis tool for cryptocurrency sentiment analysis,
                which considers the most critical parameters that determine the psychology of the Bitcoin market to give a result: The level of fear or greed in the market.
            </p>
            <p class="text-text-secondary mb-4">
                The Bitcoin fear and greed index values range from 0% (extreme fear) to 100% (extreme greed).
            </p>
            <div class="flex flex-col space-y-2">
                <x-global.badges.status-badge type="extreme-fear">EXTREME FEAR</x-global.badges.status-badge>
                <x-global.badges.status-badge type="fear">FEAR</x-global.badges.status-badge>
                <x-global.badges.status-badge type="neutral">NEUTRAL</x-global.badges.status-badge>
                <x-global.badges.status-badge type="greed">GREED</x-global.badges.status-badge>
                <x-global.badges.status-badge type="extreme-greed">EXTREME GREED</x-global.badges.status-badge>
            </div>
        </div>
    </div>
</section>
