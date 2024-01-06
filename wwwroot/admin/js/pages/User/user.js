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
                    window.location.reload();
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