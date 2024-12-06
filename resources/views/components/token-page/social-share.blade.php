@props(['platforms' => [
    ['name' => 'twitter', 'label' => 'TWITTER'],
    ['name' => 'facebook', 'label' => 'FACEBOOK'],
    ['name' => 'telegram', 'label' => 'TELEGRAM'],
    ['name' => 'whatsapp', 'label' => 'WHATSAPP'],
    ['name' => 'link', 'label' => 'COPY LINK'],
]])

<section class="bg-background-secondary rounded-xl p-6">
    <h2 class="text-xl font-semibold mb-4">Share it</h2>
    <p class="text-text-secondary mb-4">Share it on your social media</p>
    <div class="flex gap-4">
        @foreach($platforms as $platform)
            <x-global.buttons.secondary-button>
                {{ $platform['label'] }}
            </x-global.buttons.secondary-button>
        @endforeach
    </div>
</section>
