<div x-data="{
        chartData: @js($chartData),
        chartConfig: @js($chartConfig),
        backgroundColors: @js($backgroundColors),
        chartId: @js($chartId),
        init() {
            const ctx = this.$refs[`canvas${this.chartId}`].getContext('2d');

            if (!ctx) {
                console.error('Canvas context not found');
                return;
            }

            if (this.chartConfig.type === 'line') {
                const gradient = ctx.createLinearGradient(0, 0, 0, ctx.canvas.height);
                gradient.addColorStop(0, this.backgroundColors.start);
                gradient.addColorStop(1, this.backgroundColors.end);

                if (this.chartData.datasets && this.chartData.datasets.length > 0) {
                    this.chartData.datasets[0].backgroundColor = gradient;
                } else {
                    console.error('No datasets found for line chart');
                }
            } else if (this.chartConfig.type === 'bar') {
                if (this.chartData.datasets && this.chartData.datasets.length > 0) {
                    this.chartData.datasets[0].backgroundColor = this.backgroundColors;
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

            new Chart(ctx, {
                type: this.chartConfig.type || 'bar',
                data: this.chartData,
                options: this.chartConfig.options,
                plugins: [labelBorderPlugin], // Use the custom plugin
            });
        }
    }" x-init="init()">
    <canvas x-ref="canvas{{ $chartId }}" class="w-full h-full bg-black border border-border-light rounded-[14px]"></canvas>
</div>
