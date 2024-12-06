@props(['configuredAlerts', 'remainingAlerts'])

<section class="bg-[#131313] border border-[rgba(255,255,255,0.1)] rounded-[14px] p-[30px]">
    <div class="flex justify-between items-center mb-6">
        <h2 class="font-manrope text-[40px] font-bold text-white">
            Sandbox Alerts
        </h2>
        <button class="flex justify-center items-center w-12 h-12 bg-[#1B1B1B] border-2 border-[rgba(255,255,255,0.1)] rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4L4 12L12 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 12H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <div class="flex justify-between gap-6">
        <div class="flex flex-col justify-center items-center bg-[#171717] border border-[rgba(255,255,255,0.1)] rounded-[14px] p-6 flex-1">
            <div class="text-[48px] font-extrabold text-white">{{ $configuredAlerts }}</div>
            <div class="text-[20px] font-medium text-white">Configured Alerts</div>
        </div>
        <div class="flex flex-col justify-center items-center bg-[#171717] border border-[rgba(255,255,255,0.1)] rounded-[14px] p-6 flex-1">
            <div class="text-[48px] font-extrabold text-white">{{ $remainingAlerts }}</div>
            <div class="text-[20px] font-medium text-white">Alerts Remaining</div>
        </div>
        <div class="flex flex-col justify-center items-center bg-[#177FF0] border border-[#177FF0] rounded-[14px] p-6 flex-1">
            <button class="flex justify-center items-center w-16 h-16 bg-transparent border border-white rounded-full mb-4">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform rotate-[135deg]">
                    <path d="M12 4L4 12L12 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 12H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <span class="text-[20px] font-semibold text-white uppercase">Set Up First Alert</span>
        </div>
    </div>
</section>
