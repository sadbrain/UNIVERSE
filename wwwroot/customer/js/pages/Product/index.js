const pagination_container = document.querySelector('.pagination_container');
const pre_pagination = pagination_container.querySelector(".pre_pagination");
const next_pagination = pagination_container.querySelector(".next_pagination");
const current_page = pagination_container.querySelector(".active");
num_page = document.querySelectorAll('.pagination_container  > button').length;
pre_pagination.onclick = (event) => {
    event.preventDefault();
    num = current_page.innerText;
    pre_num = parseInt(num) - 1;
    pre_elemement = pagination_container.querySelector(`button#pagination-${pre_num}`);
    if(pre_elemement){
        const a_element = pre_elemement.querySelector('a');
        window.location.href = a_element.getAttribute('href')
    }

}
next_pagination.onclick  = (event) => {
    event.preventDefault();
    num = current_page.innerText;
    next_num = parseInt(num) + 1;
    next_elemement = pagination_container.querySelector(`button#pagination-${next_num}`);
    if(next_elemement){
        const a_element = next_elemement.querySelector('a');
        window.location.href = a_element.getAttribute('href')
    }
}

function load_pagination(){
    const total_pages = num_page - 2;
    const visible_pages = 5;
    let start_page = Math.max(1, current_page.innerText - Math.floor(visible_pages/2));
    let end_page = Math.min(total_pages, start_page + visible_pages - 1);

    if (end_page - start_page + 1 < visible_pages) {
        start_page = Math.max(1, end_page - visible_pages + 1);
    }
    const pagination_buttons = pagination_container.querySelectorAll(".button-pagination");
    pagination_buttons.forEach(element => {
        current_num = parseInt(element.innerText);
        bool = start_page <= current_num  && current_num <= end_page;
        if(!bool){
            element.classList.add("d-none");
        }

        
});
    
}
load_pagination()
