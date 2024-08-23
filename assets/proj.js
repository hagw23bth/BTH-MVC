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

// Data visualization script for FishStock
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

// Data visualization script for MarineProtection
const marineCtx = document.getElementById('marineProtectionChart')?.getContext('2d');
if (marineCtx) {
    const marineProtectionDataElement = document.getElementById('marineProtectionData');
    const marineProtectionData = JSON.parse(marineProtectionDataElement.textContent);

    // Debug-loggar för att se om allting fungerar
    console.log('Marine Protection Data:', marineProtectionData);

    const years = marineProtectionData.map(data => data.year);
    const riket = marineProtectionData.map(data => data.riket);
    const vasterhavet = marineProtectionData.map(data => data.vasterhavet);
    const ostersjon = marineProtectionData.map(data => data.ostersjon);
    const bottniskaViken = marineProtectionData.map(data => data.bottniska_viken);

    new Chart(marineCtx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [
                {
                    label: 'Riket',
                    data: riket,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Västerhavet',
                    data: vasterhavet,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Östersjön',
                    data: ostersjon,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Bottniska viken',
                    data: bottniskaViken,
                    backgroundColor: 'rgba(153, 102, 255, 0.5)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }
            ]
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
