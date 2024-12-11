import "./bootstrap";
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);

import.meta.glob(["../images/**"]);
import "./prism";

function createChart(ctx, chartType, labels, datasets, options = {}) {
    return new Chart(ctx, {
        type: chartType,
        data: {
            labels: labels,
            datasets: datasets,
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            ...options, // Merge any additional options
        },
    });
}

function getBackgroundColors(dataValues, colors) {
    return dataValues.map((value) => {
        if (value < 20) return colors.red;
        if (value < 40) return colors.orange;
        if (value < 60) return colors.yellow;
        if (value < 80) return colors.green;
        if (value <= 100) return colors.blue;
        return "#333333";
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const gaugeColors = {
        red: "#FF004D",
        orange: "#FF540B",
        yellow: "#FFD600",
        green: "#90FF00",
        blue: "#03EBF3",
    };

    const commonOptions = {
        plugins: {
            legend: {
                display: false,
            },
        },
        scales: {
            x: {
                display: false,
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
    };

    // Bar Chart
    const ctxBar = document.getElementById("barCanvasChart").getContext("2d");
    const barLabels = [
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
    const backgroundColors = getBackgroundColors(dataValues, gaugeColors);

    createChart(
        ctxBar,
        "bar",
        barLabels,
        [
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
        commonOptions
    );

    const barLabelContainer = document.getElementById("barChartLabels");
    barLabelContainer.className = "w-full flex justify-around gap-7"; // Use a CSS class for styling

    barLabels.forEach((label) => {
        const labelElement = document.createElement("div");
        labelElement.className =
            "w-full text-[#858585] text-center font-semibold border border-border-light rounded-full px-[1x] py-[2px]"; // Use a CSS class for styling
        labelElement.textContent = label;
        barLabelContainer.appendChild(labelElement);
    });

    // Line Chart
    const ctxLine = document.getElementById("lineCanvasChart").getContext("2d");
    const lineLabels = [
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
    const gradient = ctxLine.createLinearGradient(
        0,
        0,
        0,
        ctxLine.canvas.height
    );
    gradient.addColorStop(0, "rgba(0, 255, 255, 0.5)");
    gradient.addColorStop(1, "rgba(0, 255, 255, 0)");

    createChart(
        ctxLine,
        "line",
        lineLabels,
        [
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
        commonOptions
    );

    const lineLabelContainer = document.getElementById("lineChartLabels");
    lineLabelContainer.className = "w-full flex justify-around gap-7"; // Use a CSS class for styling

    lineLabels.forEach((label) => {
        const labelElement = document.createElement("div");
        labelElement.className =
            "w-full text-[#858585] text-center font-semibold border border-border-light rounded-full px-[1x] py-[2px]"; // Use a CSS class for styling
        labelElement.textContent = label;
        lineLabelContainer.appendChild(labelElement);
    });

    // Card Bar Charts
    const cardCanvases = document.querySelectorAll(
        '[id^="cardBarCanvasChart"]'
    );
    const cardBarLabels = [
        "13:18",
        "14:18",
        "15:18",
        "16:18",
        "17:18",
        "18:18",
        "19:18",
        "20:18",
        "21:18",
        "22:18",
        "23:18",
        "24:18",
        "00:18",
        "01:18",
        "02:18",
        "03:18",
        "04:18",
        "05:18",
    ];
    const cardDataValues = [
        45, 60, 75, 30, 50, 70, 85, 40, 45, 60, 75, 30, 50, 70, 85, 40, 1, 90,
    ];
    const cardBackgroundColors = getBackgroundColors(
        cardDataValues,
        gaugeColors
    );

    cardCanvases.forEach((canvas, index) => {
        const ctx = canvas.getContext("2d");

        createChart(
            ctx,
            "bar",
            cardBarLabels,
            [
                {
                    label: `Card Dataset ${index + 1}`,
                    data: cardDataValues,
                    backgroundColor: cardBackgroundColors,
                    borderWidth: 0,
                    borderRadius: {
                        topLeft: 8,
                        topRight: 8,
                    },
                },
            ],
            commonOptions
        );

        const cardLabelContainer = document.getElementById(
            `cardBarChartLabels${index}`
        );
        cardLabelContainer.className =
            "w-full flex justify-around gap-7 mt-[20px]"; // Use a CSS class for styling

        cardBarLabels.forEach((label, idx) => {
            if (idx % 4 === 0) {
                const labelElement = document.createElement("div");
                labelElement.className =
                    "w-full text-[#858585] text-center font-semibold border border-border-light rounded-full px-[1x] py-[2px]"; // Use a CSS class for styling
                labelElement.textContent = label;
                cardLabelContainer.appendChild(labelElement);
            }
        });
    });
});
