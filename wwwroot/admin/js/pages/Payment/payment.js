var dataTable;
var current_date = new Date();
$(document).ready(() => {
    loadDataTable();
});
function loadDataTable() {
    dataTable = $('#tblData').DataTable({

    ajax: {
        url: '/Admin/Payment/GetAll',
        type: 'POST'
    },
        "columns": [
            { data: 'payment_type', "width": "10%" },
            { data: 'provider', "width": "10%" },
            { data: 'account', "width": "10%" },
            { data: 'expiry', "width": "10%" },
            { data: 'order_id', "width": "10%" },
        ]
    });
}   