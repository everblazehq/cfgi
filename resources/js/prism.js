import Prism from "prismjs";

// Import languages you need BEFORE the CSS
import "prismjs/components/prism-markup"; // HTML
// Add these as needed:
import "prismjs/components/prism-css";
import "prismjs/components/prism-javascript";

// Import theme AFTER languages
import "prismjs/themes/prism-twilight.css";

// Make sure to expose Prism globally
window.Prism = Prism;

// Initialize after exposing to window
Prism.highlightAll();
