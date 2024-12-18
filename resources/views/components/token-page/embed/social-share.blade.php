@props(['platforms' => [
    ['name' => 'twitter', 'label' => 'TWITTER'],
    ['name' => 'facebook', 'label' => 'FACEBOOK'],
    ['name' => 'telegram', 'label' => 'TELEGRAM'],
    ['name' => 'whatsapp', 'label' => 'WHATSAPP'],
    ['name' => 'copy-link', 'label' => 'COPY LINK'],
]])

<section class="flex flex-col gap-[10px]">
    <h2 class="text-h2-large font-bold">Share it</h2>
    <p class="text-text-secondary font-medium">Share it</p>
    <div class="flex gap-4 justify-between lg:justify-start">
        @foreach($platforms as $platform)
            <button class="flex items-center font-semibold bg-bg-accent border border-border-light rounded-full p-2 lg:p-[12px_22px_12px_16px] hover:border-white hover:shadow-sm transition-all">
                <x-dynamic-component :component="'icons.' . $platform['name']" class="w-4 h-4 lg:w-6 lg:h-6" />
                <span class="hidden lg:inline ml-2.5">{{ $platform['label'] }}</span>
            </button>
        @endforeach
    </div>
</section>
