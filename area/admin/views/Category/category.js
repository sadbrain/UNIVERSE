var dataTable;
$(document).ready(() => {
    loadDataTable();
});
function loadDataTable() {
    dataTable = $('#tblData').DataTable({
        "ajax": {   url: 'http://localhost/Uni/Admin/Category/getall',
                    contentType: 'application/json',
                    dataType: 'json',
    
     },
        "columns": [
            { data: 'id', "width": "25%" },
            { data: 'name', "width": "15%" },
            { data: 'created_by', "width": "10%" },

        ]
    });
}   

console.log(1);