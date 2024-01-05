const pagination_container = document.querySelector('.pagination_container');
num_page = document.querySelectorAll('.pagination_container  > button').length;
const pre_pagination = pagination_container.querySelector(".pre_pagination");
const next_pagination = pagination_container.querySelector(".next_pagination");
const current_page = pagination_container.querySelector(".active");
// console.log(num_page);
// console.log(pre_pagination);
// console.log(next_pagination);
// console.log(current_page);
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
// function load_pagination_nav(num_of_pagination, page = 1, brand = null){
// console.log(brand, num_of_pagination)
// content = `<button class="pre_pagination"><a  href="#"><i class="fa-solid fa-chevron-left"></i> Pre</a></button>`;
// for(i=1; i<=num_of_pagination; i++s){
//     if(brand != null){
//         content += `
//         <button class=${page == i ? "active" : null}>
//             <a href="?brand=${brand}&page=${i}"> ${i}
//             </a>
//         </button>`
//     }else{
//         content += 
//         `<button class= ${page == i ? "active" : null}>
//             <a href="?page=${i}"> ${i}
//             </a>
//         </button>`
//     }
    
// }
// content += `<a href="#"><button>...</button></a>`;
// content += `<button class="next_pagination"><a href="#"> Next <i class="fa-solid fa-chevron-right"></i></a></button>`;

//     pagination_container.innerHTML = content;
// }