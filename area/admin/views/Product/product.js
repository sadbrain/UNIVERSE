// var dataTable;
// $(document).ready(() => {
//     loadDataTable();
// });
// function loadDataTable() {
//     dataTable = $('#tblData').DataTable({
//         "ajax": {   url: 'http://localhost/Uni/Admin/Category/getall',
//                     contentType: 'application/json',
//                     dataType: 'json',
    
//      },
//         "columns": [
//             { data: 'id', "width": "25%" },
//             { data: 'name', "width": "15%" },
//             { data: 'created_by', "width": "10%" },

//         ]
//     });
// }   

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
                    console.log(data);
                    toastr.success(data.message);
                },
                error: function (error) {
                    window.location.reload();
                    console.error("Error:", error);
                    // toastr.error("An error occurred while processing your request.");
                }
            });
        }
    });
}