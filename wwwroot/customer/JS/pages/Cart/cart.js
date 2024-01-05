const infor = document.querySelector('.info_detail');
const img = document.querySelector(".pro-thumb");
const fullname = infor.querySelector(".pro-name");
const colors = infor.querySelectorAll("input[name='color']");
const sizes = infor.querySelectorAll("input[name='size']");
const price = infor.querySelector(".pro-price");
const quantity = infor.querySelector("input[name='quantity']");
const id = document.querySelector("input[name='id']");
let size;
let color; 
function checkvalidate(){
    isValidate = true;
    if(!quantity.value){
        isValidate = false;
        alert("Please choose quantity");
    }
    isValidateSize = false;
    for(i=0; i<sizes.length;i++){
        if(sizes[i].checked){
            isValidateSize = true;
             size = sizes[i];
            break;
        }
    }
    if (!isValidateSize){
        isValidate = false;
        alert("Please choose size");
    }

    isValidateColor = false;
    for(i=0; i<colors.length;i++){
        if(colors[i].checked){
            isValidateColor = true;
            color = colors[i];
            break;
        }
    }
    if(!isValidateColor){
        isValidate = false;
        alert("Please choose color");
    }
    return isValidate;

}
function addToCart(){
    if (checkvalidate()){
        var imageUrl = img.src;
        // Create a new URL object
        var urlObject = new URL(imageUrl);
        
        // Get the base URL
        var baseUrl = urlObject.origin;
        
        // Get the path starting from /wwwroot
        var pathAfterWwwroot = urlObject.pathname.includes('/wwwroot') ? urlObject.pathname.substring(urlObject.pathname.indexOf('/wwwroot')) : '';
        // console.log(img);
        var orderInfor={
            id:id.value,
            thumbnail:pathAfterWwwroot,
            name:fullname.innerText,
            size:size.value,
            color:color.value,
            price:parseFloat (price.innerText.trim()),
            quantity:parseFloat(quantity.value),
            total:quantity.value*parseFloat (price.innerText.trim()),
        }
        console.log(orderInfor);
        $.ajax({
            type: 'POST',
            url: '/Customer/Cart/Create',
            data: {orderInfor: JSON.stringify(orderInfor)},
            success: function(response){
                // Cập nhật nội dung giỏ hàng mà không cần reload trang
                // $("#cart").html(response);
                console.log(response)

                var responseData = JSON.parse(response);
                // Check the status from the server
                if (responseData.status === 'success') {
                    // Handle success - for example, update the UI or display a message
                    console.log(responseData.message);}
            },
            error: function(error){
                console.log(error);
                alert("thanh cong");
            }
        });
    }


}