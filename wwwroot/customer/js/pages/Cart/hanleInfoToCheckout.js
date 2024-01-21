const total_product_price = document.querySelector(".spec_detail .total_product_price");
const shipping_cost = document.querySelector(".spec_detail .total-shipping-cost");
const total_price = document.querySelector(".spec_detail .total_price");
const checkboxs = document.querySelectorAll('.inf_cart input[name="cart_id[]"]');
checkboxs.forEach(checkbox => {
    checkbox.onchange = (event) => {
        cart = getParent(event.target, ".inf_cart");
        price = cart.querySelector('.price');
        total = cart.querySelector('.total');
        
        if(event.target.checked){

            total_product_price.innerText = parseFloat(total_product_price.innerText) + parseFloat(total.innerText);
            total_price.innerText =  parseFloat(total_product_price.innerText) +  parseFloat(shipping_cost.innerText);
            input = cart.querySelector('.quantity_input');
            next_value_btn = cart.querySelector('#increase');
            pre_value_btn = cart.querySelector('#decrease');
            next_value_btn.onclick = (event) =>{
                input.value = parseInt(input.value) + 1;
                cart = getParent(event.target, ".inf_cart");
                cart.classList.add("active");
                price = cart.querySelector('.price');
                total = cart.querySelector('.total');
                oldTotal = total.innerText;
                total.innerText =  parseFloat(price.innerText) * parseFloat(input.value);
                total_product_price.innerText = parseFloat(total_product_price.innerText) - oldTotal + parseFloat(total.innerText);
                total_price.innerText =  parseFloat(total_product_price.innerText) +  parseFloat(shipping_cost.innerText);
            }
            pre_value_btn.onclick = (event) =>{

                input.value = parseInt(input.value) - 1;
                if(input.value <= 0) input.value = 0;
                cart = getParent(event.target, ".inf_cart");
                price = cart.querySelector('.price');
                total = cart.querySelector('.total');
                oldTotal = total.innerText;
                total.innerText =  parseFloat(price.innerText) * parseFloat(input.value);
                total_product_price.innerText = parseFloat(total_product_price.innerText) - oldTotal + parseFloat(total.innerText);
                total_price.innerText =  parseFloat(total_product_price.innerText) +  parseFloat(shipping_cost.innerText);
                if(total_price.innerText <= 0){
                    total_price.innerText = 0;
                }
            }
            input.oninput = () => {

                if(!input.value){
                    return;
                }
                if(input.value <= 0) {input.value = 0};
                oldTotal = total.innerText;
                total.innerText =  parseFloat(price.innerText) * parseFloat(input.value);
                total_product_price.innerText = parseInt(total_product_price.innerText) - oldTotal + parseInt(total.innerText);
                total_price.innerText =  parseFloat(total_product_price.innerText) +  parseFloat(shipping_cost.innerText);
                if(total_price.innerText <= 0){
                    total_price.innerText = 0;
                }
            }

        }else{
            cart.classList.remove("active");

            total_product_price.innerText = parseInt(total_product_price.innerText) - parseInt(total.innerText);
            total_price.innerText =  parseFloat(total_product_price.innerText) +  parseFloat(shipping_cost.innerText);


        }
        if(total_price.innerText <= 0){
            total_price.innerText = 0;
        }
    }
});


function navigate_to_Checkout(url){
    console.log(url);
    const checkboxIsCheckeds = document.querySelectorAll('input[name="cart_id[]"]:checked');
    if(checkboxIsCheckeds.length == 0) {
        alert("please choose a product need to checkout");
        return;
    }
    const cartIds = Array.from(checkboxIsCheckeds).map(checkbox => checkbox.value);

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = url; // Thay thế 'your_destination_page' bằng URL trang đích
    document.body.appendChild(form);
    
    cartIds.forEach(cartId => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'cart_id[]';
        input.value = cartId;
        form.appendChild(input);
    });
    
    // Gửi form
    form.submit();
}