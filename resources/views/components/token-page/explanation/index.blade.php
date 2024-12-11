@props(['indicators' => [], 'coinName' => ''])

<section class="bg-background-primary border border-border-light rounded-[32px] p-7 space-y-7">
    <h2 class="text-[40px] font-manrope font-bold">{{ getFullCoinName($coinName) }} Fear and Greed Index Indicator Explained</h2>
    <div class="flex gap-7">
        <!-- Left sidebar with indicators -->
        <div class="w-[213px] space-y-3 bg-background-secondary border border-[#323232] rounded-[20px] p-[10px]">
            @foreach($indicators as $index => $indicator)
                <button class="indicator-button w-full text-left text-[20px] font-manrope px-[30px] py-[20px] rounded-[10px] {{ $index === 0 ? 'bg-blue-600 hover:bg-blue-700 text-white font-semibold' : 'text-white/60 font-medium' }}"
                        data-indicator="{{ $indicator }}"
                        data-content="Content for {{ $indicator }}">
                    {{ $indicator }}
                </button>
            @endforeach
        </div>
        <!-- Right content -->
        <div class="flex-1">
            <div class="flex flex-col text-white text-2xl font-manrope font-normal mb-4 gap-7 p-[10px]">
                <p id="indicator-text">
                    Content for {{ getFullCoinName($coinName) }} {{ $indicators[0] }} Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    The {{ getFullCoinName($coinName) }} Fear and Greed Index values range from 0% (extreme fear) to 100% (extreme greed).
                </p>
            </div>
            <div class="flex flex-col gap-[30px] p-[10px]">
                <p class="text-2xl font-sans font-bold">The values are:</p>
                <div class="flex flex-col gap-[10px]">
                    <x-global.badges.status-badge type="extreme-fear" size="base">EXTREME FEAR</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="fear" size="base">FEAR</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="neutral" size="base">NEUTRAL</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="greed" size="base">GREED</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="extreme-greed" size="base">EXTREME GREED</x-global.badges.status-badge>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.indicator-button');
        const indicatorText = document.getElementById('indicator-text');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                buttons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'hover:bg-blue-700', 'font-semibold', 'text-white');
                    btn.classList.add('font-medium', 'text-white/60'); // Ensure non-active buttons are medium
                });

                // Add active class to the clicked button
                this.classList.add('bg-blue-600', 'hover:bg-blue-700', 'font-semibold', 'text-white');
                this.classList.remove('font-medium', 'text-white/60'); // Remove medium from active button

                // Update the content based on the clicked button
                const content = this.getAttribute('data-content');
                indicatorText.textContent = content;
            });
        });
    });
</script>
