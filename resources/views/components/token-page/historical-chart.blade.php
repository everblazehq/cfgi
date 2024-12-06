@props(['data' => null])

<section
    x-data="historicalChart()"
    x-init="initChart($refs.canvas)"
>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Historical</h2>
        <div class="flex gap-2">
            <x-global.buttons.primary-button @click="setTimeframe('30d')">
                Last 30 days
            </x-global.buttons.primary-button>

            <x-global.buttons.secondary-button @click="setTimeframe('custom')">
                Period
            </x-global.buttons.secondary-button>
        </div>
    </div>
    <div class="h-64 bg-[#1E1E1E] rounded-xl p-4">
        <canvas x-ref="canvas"></canvas>
    </div>
</section>

<!-- @push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('historicalChart', () => ({
        chart: null,

        initChart(canvas) {
            this.chart = new Chart(canvas, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            '#00B746',
                            '#FFBA08',
                            '#FF4B4B',
                            '#00B746',
                            '#FFBA08',
                            '#FF4B4B'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#333'
                            },
                            ticks: {
                                color: '#666'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: '#666'
                            }
                        }
                    }
                }
            });
        },

        setTimeframe(period) {
            // Update chart data based on timeframe
            // You would typically make an API call here
            console.log(`Switching to ${period} timeframe`);
        }
    }))
})
</script>
@endpush -->
