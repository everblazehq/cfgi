import "./bootstrap";
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);

import.meta.glob(["../images/**"]);

document.addEventListener("DOMContentLoaded", () => {
    const ctxBar = document.getElementById("barCanvasChart").getContext("2d");
    const ctxLine = document.getElementById("lineCanvasChart").getContext("2d");

    // Wise & Neive Colors
    const gaugeColors = {
        red: "#FF004D",
        orange: "#FF540B",
        yellow: "#FFD600",
        green: "#90FF00",
        blue: "#03EBF3",
    };

    const { red, orange, yellow, green, blue } = gaugeColors;

    const barLabels = [
        // TODO: Labels should come from API Data
        "00:18",
        "01:18",
        "02:18",
        "03:18",
        "04:18",
        "05:18",
        "06:18",
        "07:18",
        "08:18",
        "09:18",
        "10:18",
        "11:18",
        "12:18",
    ];

    const lineLabels = [
        // TODO: Labels should come from API Data
        "00:18",
        "01:18",
        "02:18",
        "03:18",
        "04:18",
        "05:18",
        "06:18",
        "07:18",
        "08:18",
        "09:18",
        "10:18",
        "11:18",
        "12:18",
    ];

    const dataValues = [11, 22, 33, 44, 55, 66, 77, 88, 99, 0, 11, 22, 33];

    // Wise & Neive Bar Candle Colors
    const backgroundColors = dataValues.map((value) => {
        if (value <= 20) return red;
        if (value <= 40) return orange;
        if (value <= 60) return yellow;
        if (value <= 80) return green;
        if (value <= 100) return blue;
        return "#333333";
    });

    // Bar Chart
    const barChart = new Chart(ctxBar, {
        type: "bar",
        data: {
            labels: barLabels,
            datasets: [
                {
                    label: "Dataset 1",
                    data: dataValues,
                    backgroundColor: backgroundColors,
                    borderWidth: 0,
                    borderRadius: {
                        topLeft: 8,
                        topRight: 8,
                    },
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    display: false, // Hide x-axis labels on the chart
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: "#333333",
                    },
                    ticks: {
                        display: false,
                    },
                },
            },
        },
    });

    // Line Chart
    // TODO: Fix background gradient
    const gradient = ctxLine.createLinearGradient(
        0,
        0,
        0,
        ctxLine.canvas.height
    );
    gradient.addColorStop(0, "rgba(0, 255, 255, 0.5)");
    gradient.addColorStop(1, "rgba(0, 255, 255, 0)");

    const lineChart = new Chart(ctxLine, {
        type: "line",
        data: {
            labels: lineLabels,
            datasets: [
                {
                    label: "Dataset 1",
                    data: [12, 19, 3, 5, 2, 3, 10, 15, 7, 8, 12, 14, 9],
                    borderColor: "#00FFFF",
                    backgroundColor: gradient,
                    borderWidth: 2,
                    tension: 0.4,
                    pointRadius: 0,
                    fill: true,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                },
            },
            scales: {
                x: {
                    display: false,
                    grid: {
                        display: false,
                    },
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: "#333333",
                    },
                    ticks: {
                        display: false, // Hide y-axis labels on the chart
                    },
                },
            },
        },
    });

    // Render labels below the bar chart
    // TODO: Fix spacing around labels and padding
    const barLabelContainer = document.getElementById("barChartLabels");
    barLabelContainer.className = "w-full flex justify-around gap-7";

    barLabels.forEach((label) => {
        const labelElement = document.createElement("div");
        labelElement.className =
            "w-full text-[#858585] text-center font-semibold border border-border-light rounded-full px-[1x] py-[2px]";
        labelElement.textContent = label;
        barLabelContainer.appendChild(labelElement);
    });

    // Render labels below the line chart
    const lineLabelContainer = document.getElementById("lineChartLabels");
    lineLabelContainer.className = "w-full flex justify-around gap-7";

    lineLabels.forEach((label) => {
        const labelElement = document.createElement("div");
        labelElement.className =
            "w-full text-[#858585] text-center font-semibold border border-border-light rounded-full px-[1x] py-[2px]";
        labelElement.textContent = label;
        lineLabelContainer.appendChild(labelElement);
    });
});
