<div>
    <canvas id="canvas{{ $chartId }}"
        class="w-full h-full bg-black border border-border-light rounded-[14px]"></canvas>
</div>

@script
    <script>
        let chartData = $wire.chartData;
        let chartConfig = $wire.chartConfig;
        let backgroundColors = $wire.backgroundColors;
        let chartId = $wire.chartId;

        const ctx = document.getElementById(`canvas${chartId}`).getContext('2d');

        if (!ctx) {
            console.error('Canvas context not found');
            return;
        }

        if (chartConfig.type === 'line') {
            const gradient = ctx.createLinearGradient(0, 0, 0, ctx.canvas.height);
            gradient.addColorStop(0, backgroundColors.start);
            gradient.addColorStop(1, backgroundColors.end);

            if (chartData.datasets && chartData.datasets.length > 0) {
                chartData.datasets[0].backgroundColor = gradient;
            } else {
                console.error('No datasets found for line chart');
            }
        } else if (chartConfig.type === 'bar') {
            if (chartData.datasets && chartData.datasets.length > 0) {
                chartData.datasets[0].backgroundColor = backgroundColors;
            } else {
                console.error('No datasets found for bar chart');
            }
        }

        // Define the custom plugin to draw borders around X-axis labels
        const labelBorderPlugin = {
            id: 'labelBorder',
            afterDraw: (chart) => {
                const ctx = chart.ctx;
                const xAxis = chart.scales['x-axis-0'];
                if (!xAxis) return;

                ctx.save();
                ctx.strokeStyle = '#00BFFF'; // Border color
                ctx.lineWidth = 1; // Border width

                xAxis.ticks.forEach((value, index) => {
                    const x = xAxis.getPixelForTick(index);
                    const y = chart.height - xAxis.bottom + 10; // Adjust position as needed

                    // Draw a rectangle around the label
                    ctx.strokeRect(x - 20, y - 10, 40, 20); // Adjust dimensions as needed
                });

                ctx.restore();
            }
        };

        // Register the custom plugin
        Chart.register(labelBorderPlugin);

        let chart = new Chart(ctx, {
            type: chartConfig.type || 'bar',
            data: chartData,
            options: chartConfig.options,
            plugins: [labelBorderPlugin], // Use the custom plugin
        });

        Livewire.on('updateChartCanvas', () => {
            chart.destroy();

            chartData = $wire.chartData;
            chartConfig = $wire.chartConfig;
            backgroundColors = $wire.backgroundColors;
            chartId = $wire.chartId;
            
            const ctx = document.getElementById(`canvas${chartId}`).getContext('2d');

            if (!ctx) {
                console.error('Canvas context not found');
                return;
            }

            if (chartConfig.type === 'line') {
                const gradient = ctx.createLinearGradient(0, 0, 0, ctx.canvas.height);
                gradient.addColorStop(0, backgroundColors.start);
                gradient.addColorStop(1, backgroundColors.end);

                if (chartData.datasets && chartData.datasets.length > 0) {
                    chartData.datasets[0].backgroundColor = gradient;
                } else {
                    console.error('No datasets found for line chart');
                }
            } else if (chartConfig.type === 'bar') {
                if (chartData.datasets && chartData.datasets.length > 0) {
                    chartData.datasets[0].backgroundColor = backgroundColors;
                } else {
                    console.error('No datasets found for bar chart');
                }
            }

            chart = new Chart(ctx, {
                type: chartConfig.type || 'bar',
                data: chartData,
                options: chartConfig.options,
                plugins: [labelBorderPlugin], // Use the custom plugin
            });
        });
    </script>
@endscript
