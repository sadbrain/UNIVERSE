function load_orders_chart(url = "/Admin/Home/GetOrderDaily"){
    fetch(url)
    .then(response => response.json())
    .then(data => {
        draw_order_chart(data);
    })
    .catch(error => console.error('Error:', error));
}
function load_hits_chart(url = "/Admin/Home/GetHitsDaily"){
    fetch(url)
    .then(response => response.json())
    .then(data => {
        draw_hit_chart(data);
    })
    .catch(error => console.error('Error:', error));
}
load_orders_chart();
load_hits_chart();
function draw_hit_chart(data){
    const hit_chart_canvas = document.querySelector("#hit_Chart");
    const existingChart = Chart.getChart(hit_chart_canvas);

    // Destroy the existing chart if it exists
    if (existingChart) {
        existingChart.destroy();
    }

    const hit_chart = hit_chart_canvas.getContext('2d');
    let chartData = {
    labels: data.label,
    datasets: [{
        label: data.hit_chart,
        data: data.hit_count,
        backgroundColor: 'rgba(75, 192, 192, 0.7)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
    };

    let options = {
    scales: {
        y: {
        beginAtZero: true
        }
    }
    };
    
    let chart = new Chart(hit_chart, {
        type: 'bar', 
        data: chartData,
        options: options
      });

}

function draw_order_chart(data){
    const order_chart_canvas = document.querySelector("#order_Chart");
    const existingChart = Chart.getChart(order_chart_canvas);

    // Destroy the existing chart if it exists
    if (existingChart) {
        existingChart.destroy();
    }

    const order_chart = order_chart_canvas.getContext('2d');
    let chartData = {
    labels: data.label,
    datasets: [{
        label: data.order_chart,
        data: data.order_count,
        backgroundColor: 'rgba(75, 192, 192, 0.7)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
    };

    let options = {
    scales: {
        y: {
        beginAtZero: true
        }
    }
    };
    
    let chart = new Chart(order_chart, {
        type: 'bar', 
        data: chartData,
        options: options
      });

}

const order_chart_selector = document.querySelector('#select_order_chart');
order_chart_selector.onchange = (event) => {
    load_orders_chart(event.target.value);
}
const hit_chart_selector = document.querySelector('#select_hit_chart');
hit_chart_selector.onchange = (event) => {
    load_hits_chart(event.target.value);
}
