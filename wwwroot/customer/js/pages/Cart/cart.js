const infor = document.querySelector('.info_detail');
const img = document.querySelector(".pro-thumb");
const fullname = infor.querySelector(".pro-name");
const colors = infor.querySelectorAll("input[name='color']");
const sizes = infor.querySelectorAll("input[name='size']");
const price = infor.querySelector(".pro-price");
const quantity = infor.querySelector("input[name='quantity']");
const id = document.querySelector("input[name='id']");
const pre_quantity_btn = infor.querySelector("#decrease");
const next_quantity_btn = infor.querySelector("#increase");
let size;
let color;
pre_quantity_btn.onclick = () => {
    quantity.value -= 1;
    if(quantity.value <= 0){
        quantity.value = 0;
    }
}
sizes.forEach(size => {
    size.onchange = (event) => {
        if(size.checked){
            sizes.forEach(otherSize => {
                otherSize.parentElement.classList.remove("active");
            });
            size.parentElement.classList.add("active");
        }
    }

})
colors.forEach(color => {
    color.onchange = (event) => {
        if(color.checked){
            colors.forEach(othercolor => {
                othercolor.parentElement.classList.remove("active");
            });
            color.parentElement.classList.add("active");
        }
    }

})
next_quantity_btn.onclick = () => {
    quantity.value = parseInt(quantity.value) + 1;
}
quantity.oninput = (event) => {
    if(event.target.value <= 0){
        event.target.value = 0;
    }
}
function checkvalidate(){
    isValidate = true;
    if(!quantity.value || quantity.value <= 0){
        isValidate = false;
        alert("Please choose quantity");
    }
    isValidateSize = false;
    if(sizes.length == 0) {
        isValidateSize = true
        size=null;
    };
    console.log(sizes, size, isValidateSize)
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
        var urlObject = new URL(imageUrl);
        var baseUrl = urlObject.origin;
        var pathAfterWwwroot = urlObject.pathname.includes('/wwwroot') ? urlObject.pathname.substring(urlObject.pathname.indexOf('/wwwroot')) : '';
        var orderInfor={
            id:id.value,
            thumbnail:pathAfterWwwroot,
            name:  fullname.innerText,
            size:size?size.value:size,
            color:color.value,
            price:parseFloat (price.innerText.trim()),
            quantity:parseFloat(quantity.value),
            total:quantity.value*parseFloat (price.innerText.trim()),
        }
        $.ajax({
            type: 'POST',
            url: '/Customer/Cart/Create',
            data: {orderInfor: JSON.stringify(orderInfor)},
            success: function(response){
                if (response.status === 'success') {
                    toastr.success(response.message);}
            },
            error: function(error){
                console.log(error);
                alert("Successfully!");
            }
        });
    }
}