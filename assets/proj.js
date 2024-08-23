// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

// Importing styles
import './styles/proj.scss';

// Importing Chart.js 
import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);

console.log('assets/proj.js is loaded');

// Data visualization script
const ctx = document.getElementById('fishStockChart')?.getContext('2d');
if (ctx) {
    const fishStockDataElement = document.getElementById('fishStockData'); // (Refererar till elementet i DOM)
    const fishStockData = JSON.parse(fishStockDataElement.textContent);

    // Debug-loggar för att se om allting fungerar
    console.log('Fish Stock Data:', fishStockData);

    // Justera egenskapsnamnen för att matcha din PHP-entitet
    const years = fishStockData.map(data => data.year);
    const percentages = fishStockData.map(data => data.sustainable_percent);

    // Create the chart
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: years,
            datasets: [{
                label: 'Andel hållbart fiskbestånd (%)',
                data: percentages,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
}
