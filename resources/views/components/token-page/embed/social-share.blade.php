@props(['platforms' => [
    ['name' => 'twitter', 'label' => 'TWITTER'],
    ['name' => 'facebook', 'label' => 'FACEBOOK'],
    ['name' => 'telegram', 'label' => 'TELEGRAM'],
    ['name' => 'whatsapp', 'label' => 'WHATSAPP'],
    ['name' => 'copy-link', 'label' => 'COPY LINK'],
]])

<section class="flex flex-col gap-[10px]">
    <h2 class="text-[40px] font-bold">Share it</h2>
    <p class="text-text-secondary font-medium">Share it</p>
    <div class="flex gap-4">
        @foreach($platforms as $platform)
            <button class="flex items-center font-semibold bg-background-pillButton border border-border-light rounded-full gap-[10px] p-[12px_22px_12px_16px]">
                <x-dynamic-component :component="'icons.' . $platform['name']" />
                {{ $platform['label'] }}
            </button>
        @endforeach
    </div>
</section>
