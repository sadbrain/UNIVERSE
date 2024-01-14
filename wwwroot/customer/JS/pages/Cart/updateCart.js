
inputs = document.querySelectorAll('.quantity_input');



inputs.forEach(input => {
    cart = getParent(input, ".inf_cart");
    price = cart.querySelector('.price');
    total = cart.querySelector('.total');
    next_value_btn = cart.querySelector('#increase');
    pre_value_btn = cart.querySelector('#decrease');
    next_value_btn.onclick = (event) =>{
        input.value = parseInt(input.value) + 1;
        cart = getParent(event.target, ".inf_cart");
        price = cart.querySelector('.price');
        total = cart.querySelector('.total');
        total.innerText =  parseFloat(price.innerText) * parseFloat(input.value);
    }
    pre_value_btn.onclick = (event) =>{

        input.value = parseInt(input.value) - 1;
        if(input.value <= 0) input.value = 0;
        total.innerText =  parseFloat(price.innerText) * parseFloat(input.value);
        cart = getParent(event.target, ".inf_cart");
        price = cart.querySelector('.price');
        total = cart.querySelector('.total');
    }
    input.oninput = (event) => {
        if(!event.target.value){
            return;
        }
        if(event.target.value <= 0) event.target.value = 0;
        cart = getParent(event.target, ".inf_cart");
        price = cart.querySelector('.price');
        total = cart.querySelector('.total');

       
        // edit = cart.querySelector('.edit_cart');
        // id = cart.querySelector("input[name='id_cart']")
        total.innerText =  parseFloat(price.innerText) * parseFloat(input.value);

    }
})
edits = document.querySelectorAll('.edit_cart');
edits.forEach(edit =>{
    edit.onclick = (event) =>{
        event.preventDefault();
        cart = getParent(event.target, ".inf_cart");
        quantity = cart.querySelector(".quantity_input");
        id = cart.querySelector("input[name='id_cart']");
        total = cart.querySelector(".total");
        if(quantity.value == 0 || quantity.value == null){
            alert("Please must have quantity");
            return;
        }
        var orderInfor = {
            
            quantity: quantity.value,
            total: parseFloat(total.innerText),
        } ;

        var orderInfor = {
            id: parseInt(id.value),
            quantity: parseFloat(quantity.value),
            total: parseFloat(total.innerText),
        };

        $.ajax({
            type: 'POST',
            url: '/Customer/Cart/Update',   
            data: {orderInfor: JSON.stringify(orderInfor)},
            success: function(response){
                // Cập nhật nội dung giỏ hàng mà không cần reload trang
                // $("#cart").html(response);
                console.log(response)

                var responseData = JSON.parse(response);
                // Check the status from the server
                if (responseData.status === 'success') {
                    // Handle success - for example, update the UI or display a message
                    alert(responseData.message);}
            },
            error: function(error){
                console.log(error);
                alert("Successfully!");
            }
        });

    } 
    
})
function     getParent(element, selector){
    while(element.parentElement){
        if(element.parentElement.matches(selector)){
            return element.parentElement;
        }
        element = element.parentElement;
    }
}