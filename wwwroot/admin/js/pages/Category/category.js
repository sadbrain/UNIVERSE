var dataTable;
$(document).ready(() => {
    loadDataTable();
});
function loadDataTable() {
    dataTable = $('#tblData').DataTable({

    ajax: {
        url: '/Admin/Category/GetAll',
        type: 'POST'
    },
        "columns": [
            { data: 'name', "width": "20%" },
            { data: 'created_by', "width": "15%" },
            { data: 'created_at.date', "width": "25%" },
            { data: 'id', 
            "width": "15%" ,
            "render": (data) => {
                return `
                <div class="w-75 btn-group" role="group"> 
                    <a href="/Admin/Category/Upsert/${data}" class="btn btn-primary mx-2"> 
                        <i class="bi bi-pencil-square"></i> Edit 
                    </a> 
                    <a onclick="Delete('/Admin/Category/Delete/${data}')" class="btn btn-danger mx-2"> 
                        <i class="bi bi-trash-fill"></i> Delete 
                    </a> 
                </div> `
            }},

        ]
    });
}   

// console.log(1);
function Delete(url){
    //hiển ra hopop thoại xác nhận xóa
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"

    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: url,
                type: "DELETE",
                success: function (data) {
                    dataTable.ajax.reload();
                    toastr.success(data.message);
                },
                error: function (error) {
                    console.error("Error:", error);
                    toastr.error("An error occurred while processing your request.");

                }
            });
        }
    });
}