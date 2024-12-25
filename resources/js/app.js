import "./bootstrap";
import "./prism";
import.meta.glob(["../images/**"]);
import { Chart, registerables } from "chart.js";
Chart.register(...registerables);

// Make Chart.js available globally
window.Chart = Chart;
