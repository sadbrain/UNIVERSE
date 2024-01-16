var dataTable;
var current_date = new Date();
$(document).ready(() => {
    loadDataTable();
});
function loadDataTable() {
    dataTable = $('#tblData').DataTable({

    ajax: {
        url: '/Admin/Order/GetAll',
        type: 'POST'
    },
        "columns": [
            { data: 'order.buyer_email', "width": "20%" },
            { data: 'order.buyer_address', "width": "20%" },
            { data: 'order_detail.product_name', "width": "20%" },
            { data: 'order_detail.product_price', "width": "5%" },
            { data: 'order_detail.product_discount_price', "width": "5%" },
            { data: 'order_detail.product_quantity', "width": "5%" },
            { data: 'order.shipping_cost', "width": "10%" },
            { data: 'order.total', "width": "10%" },
            { data: 'order.status', "width": "5%" },
       

        ]
    });
}   
