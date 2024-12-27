@props(['configuredAlerts', 'remainingAlerts'])

<section class="bg-bg-primary border border-border-light rounded-[14px] p-[30px]">
    <div class="flex justify-between items-center mb-6">
        <h4 class="font-manrope text-h2-large font-bold text-white">
            Sandbox Alerts
        </h4>
        <button>
            <x-icons.alert />
        </button>
    </div>
    <div class="flex flex-col sm:flex-row justify-between gap-4 sm:gap-6">
        <div
            class="flex flex-col justify-center items-center bg-bg-secondary border border-border-light rounded-[14px] p-4 md:p-6 flex-1">
            <h4 class="text-3xl md:text-5xl font-extrabold text-white">{{ $configuredAlerts }}</h4>
            <small class="text-base md:text-xl font-medium text-white">Configured Alerts</small>
        </div>
        <div
            class="flex flex-col justify-center items-center bg-bg-secondary border border-border-light rounded-[14px] p-4 md:p-6 flex-1">
            <h4 class="text-3xl md:text-5xl font-extrabold text-white">{{ $remainingAlerts }}</h4>
            <small class="text-base md:text-xl font-medium text-white">Alerts Remaining</small>
        </div>
        <div
            class="flex flex-col justify-center items-center gap-4 bg-accent-blue border border-accent-blue rounded-[14px] p-4 md:p-6 flex-1">
            <x-icons.arrow-large />
            <small class="text-base md:text-xl font-semibold text-white uppercase">Set Up First Alert</small>
        </div>
    </div>
</section>
