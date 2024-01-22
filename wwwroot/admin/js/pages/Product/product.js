var dataTable;
var current_date = new Date();
$(document).ready(() => {
    loadDataTable();
});
function loadDataTable() {
    dataTable = $('#tblData').DataTable({

    ajax: {
        url: '/Admin/Product/GetAll',
        type: 'POST'
    },
        "columns": [
            { data: 'product.name', "width": "30%" },
            { data: 'product.price', "width": "10%" },
            { data: 'discount.discount_price', 
                    "width": "10%" ,
                    "render": (data) => {
                        // discount_to = new Date(data.discount_to.date);
                        // if (current_date < di scount_to) {
                        //     return data.discount_price;
                        // }else{
                        //     return "Currently not discounted";
                        // }
                        return data + "%";
                    }},
            { data: 'product_inventory.quantity', "width": "10%" },
            { data: 'product_inventory.quantity_buyed', "width": "10%" },
            { data: 'product.created_by', "width": "10%" },
            { data: 'product.created_at.date', "width": "10%" },
            { data: 'product.id', 
                    "width": "10%" ,
                    "render": (data) => {
                        return `
                        <div class="w-75 btn-group" role="group"> 
                            <a href="/Admin/Product/Upsert/${data}" class="btn btn-primary mx-2"> 
                                <i class="bi bi-pencil-square"></i> Edit 
                            </a> 
                            <a onclick="Delete('/Admin/Product/Delete/${data}')" class="btn btn-danger mx-2"> 
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

                    // toastr.error("An error occurred while processing your request.");
                }
            });
        }
    });
}
