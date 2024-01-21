// $(document).ready(() => {
//     load_order_chart();
// });



// function load_orders_chart(name_chart, labels, data){
//     const order_chart = document.querySelector("#orders-chart").getContext('2d');
//     let chartData = {
//     labels: labels,
//     datasets: [{
//         label: name_chart,
//         data: data,
//         backgroundColor: 'rgba(75, 192, 192, 0.7)',
//         borderColor: 'rgba(75, 192, 192, 1)',
//         borderWidth: 1
//     }]
//     };

//     let options = {
//     scales: {
//         y: {
//         beginAtZero: true
//         }
//     }
//     };
    
//     let chart = new Chart(order_chart, {
//         type: 'bar', 
//         data: chartData,
//         options: options
//       });
//     console.log(order_chart);

// }
