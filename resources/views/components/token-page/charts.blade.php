@props(['data' => null])

<section
    x-data="historicalChart()"
    x-init="initChart($refs.canvas)"
    class="flex flex-col gap-20"
>
    <x-chart-section
        title="Historical"
        primaryButtonText="SETUP FIRST ALERT"
        secondaryButtonText="PERIOD"
        secondaryButtonText2="16 HOURS"
        secondaryButtonAction="setTimeframe('custom')"
        canvasRef="canvas"
        chartType="bar"
    />

    <x-chart-section
        title="Price"
        secondaryButtonText="NOW"
        secondaryButtonText2="100,000.00$"
        secondaryButtonAction="setTimeframe('custom')"
        canvasRef="canvas"
        chartType="line"
    />
</section>
@vite('resources/js/app.js')

