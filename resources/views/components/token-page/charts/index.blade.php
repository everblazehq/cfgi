@props(['data' => null])

<section
    class="flex flex-col gap-20"
>
    <x-token-page.charts.chart-section
        title="Historical"
        primaryButtonText="SETUP FIRST ALERT"
        secondaryButtonText="PERIOD"
        secondaryButtonText2="16 HOURS"
        secondaryButtonAction="setTimeframe('custom')"
        canvasRef="canvas"
        chartType="bar"
    />

    <x-token-page.charts.chart-section
        title="Price"
        secondaryButtonText="NOW"
        secondaryButtonText2="100,000.00$"
        secondaryButtonAction="setTimeframe('custom')"
        canvasRef="canvas"
        chartType="line"
    />
</section>
@vite('resources/js/app.js')

