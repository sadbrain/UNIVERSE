var start_date = new Date("2023-10-01");
var current_date = new Date();
var first_day_of_month = new Date(current_date.getFullYear(), current_date.getMonth()+1 - 1, 1);
var last_day_of_month = new Date(current_date.getFullYear(), current_date.getMonth()+1, 0);
console.log(start_date, current_date, first_day_of_month, last_day_of_month)
function load_orders_chart(){
    const order_chart = document.querySelector(".order-quantity-chart #orders-chart").getContext('2d');
        
    labels = [];
    data = [];
    // Dữ liệu cho biểu đồ
    let chartData = {
    labels: labels,
    datasets: [{
        label: 'Daily Orders',
        data: data,
        backgroundColor: 'rgba(75, 192, 192, 0.7)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    }]
    };

    // Cấu hình biểu đồ
    let options = {
    scales: {
        y: {
        beginAtZero: true
        }
    }
    };
    
    let chart = new Chart(order_chart, {
        type: 'bar', // Chọn loại biểu đồ cột
        data: chartData,
        options: options
      });
    console.log(order_chart);

}
$(document).ready(() => {
    load_orders_chart();

});