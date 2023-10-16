// Sample data (replace with your own data)
var labels = ["January", "February", "March", "April", "May"];
var data = [10, 20, 15, 30, 25];

function createLineChart() {
    // Get the canvas element
    var ctx = document.getElementById('myLineChart').getContext('2d');

    // Create the chart
    var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'My Line Chart',
                data: data,
                fill: false, // Don't fill the area under the line
                borderColor: 'blue', // Line color
                borderWidth: 2, // Line width
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Call the function to create the chart
createLineChart();
