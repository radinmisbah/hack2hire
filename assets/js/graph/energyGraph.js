$(document).ready(function(){
   // chart.js
const labels = ['January', 'February', 'March', 'April', 'May'];
const data = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        backgroundColor: 'rgb(75, 192, 192)',
        borderColor: 'rgb(75, 192, 192)',
        data: [65, 59, 80, 81, 56],
    }]
};

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: data,
});

  });