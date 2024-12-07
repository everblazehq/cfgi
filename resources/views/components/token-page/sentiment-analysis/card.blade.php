@props(['title', 'progress', 'chartData'])

<div class="bg-background-secondary rounded-xl p-6">
    <div class="flex justify-between items-center mb-4">
        <h3 class="font-medium">{{ $title }}</h3>
        <x-global.buttons.info-button tooltip="Sentiment analysis explanation" />
    </div>
    <x-global.progress-bar :progress="$progress" />
    <div class="h-48 mt-6" x-data x-init="
        new Chart($el, {
            type: 'bar',
            data: {
                labels: @js($chartData['labels']),
                datasets: [{
                    data: @js($chartData['values']),
                    backgroundColor: '#0066FF',
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
                }
            }
        })
    "></div>
</div>
