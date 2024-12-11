@props(['configuredAlerts', 'remainingAlerts'])

<section class="bg-background-primary border border-border-light rounded-[14px] p-[30px]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="font-manrope text-[40px] font-bold text-white">
            Sandbox Alerts
        </h2>
        <x-icons.alert />
    </div>
    <div class="flex justify-between gap-6">
        <div class="flex flex-col justify-center items-center bg-background-secondary border border-border-light rounded-[14px] p-6 flex-1">
            <div class="text-[48px] font-extrabold text-white">{{ $configuredAlerts }}</div>
            <div class="text-[20px] font-medium text-white">Configured Alerts</div>
        </div>
        <div class="flex flex-col justify-center items-center bg-background-secondary border border-border-light rounded-[14px] p-6 flex-1">
            <div class="text-[48px] font-extrabold text-white">{{ $remainingAlerts }}</div>
            <div class="text-[20px] font-medium text-white">Alerts Remaining</div>
        </div>
        <div class="flex flex-col justify-center items-center gap-4 bg-accent-blue border border-accent-blue rounded-[14px] p-6 flex-1">
            <x-icons.arrow-large />
            <span class="text-[20px] font-semibold text-white uppercase">Set Up First Alert</span>
        </div>
    </div>
</section>
