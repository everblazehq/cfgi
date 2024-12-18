@props(['configuredAlerts', 'remainingAlerts'])

<section class="bg-bg-primary border border-border-light rounded-[14px] p-[30px]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="font-manrope text-h2-large font-bold text-white">
            Sandbox Alerts
        </h2>
        <button>
            <x-icons.alert />
        </button>
    </div>
    <div class="flex flex-col sm:flex-row justify-between gap-4 sm:gap-6">
        <div class="flex flex-col justify-center items-center bg-bg-secondary border border-border-light rounded-[14px] p-4 md:p-6 flex-1">
            <div class="text-3xl md:text-5xl font-extrabold text-white">{{ $configuredAlerts }}</div>
            <div class="text-base md:text-xl font-medium text-white">Configured Alerts</div>
        </div>
        <div class="flex flex-col justify-center items-center bg-bg-secondary border border-border-light rounded-[14px] p-4 md:p-6 flex-1">
            <div class="text-3xl md:text-5xl font-extrabold text-white">{{ $remainingAlerts }}</div>
            <div class="text-base md:text-xl font-medium text-white">Alerts Remaining</div>
        </div>
        <div class="flex flex-col justify-center items-center gap-4 bg-accent-blue border border-accent-blue rounded-[14px] p-4 md:p-6 flex-1">
            <x-icons.arrow-large />
            <span class="text-base md:text-xl font-semibold text-white uppercase">Set Up First Alert</span>
        </div>
    </div>
</section>
