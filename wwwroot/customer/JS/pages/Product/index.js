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
    console.log(total_pages, visible_pages)
    console.log(start_page, end_page)
    
    const pagination_buttons = pagination_container.querySelectorAll(".button-pagination");
    console.log(pagination_buttons);
    pagination_buttons.forEach(element => {
        current_num = parseInt(element.innerText);
        bool = start_page <= current_num  && current_num <= end_page;
        if(!bool){
            element.classList.add("d-none");
        }

        
});
    
}
load_pagination()
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

// document.addEventListener('DOMContentLoaded', function () {
//     const totalPages = num_page-2; // Tổng số trang
//     const visiblePages = 5; // Số lượng nút trang hiển thị
//     let currentPage = current_page.innerText;
    
//     function generatePagination() {
//         pagination_container.innerHTML = ''; // Xóa nội dung cũ
    
//         const paginationList = document.createElement('ul');
//         paginationList.classList.add('pagination');
    
//         // Tính toán vị trí bắt đầu và kết thúc của các nút trang
//         let startPage = Math.max(1, currentPage - Math.floor(visiblePages / 2));
//         let endPage = Math.min(totalPages, startPage + visiblePages - 1);
    
//         // Đảm bảo không vượt quá giới hạn trang
//         if (endPage - startPage + 1 < visiblePages) {
//         startPage = Math.max(1, endPage - visiblePages + 1);
//         }
    
//         // Tạo nút Previous
//         if (currentPage > 1) {
//         const prevButton = createPaginationButton('Previous', currentPage - 1);
//         paginationList.appendChild(prevButton);
//         }
    
//         // Tạo các nút trang
//         for (let i = startPage; i <= endPage; i++) {
//         const pageButton = createPaginationButton(i, i);
//         paginationList.appendChild(pageButton);
//         }
    
//         // Tạo nút Next
//         if (currentPage < totalPages) {
//         const nextButton = createPaginationButton('Next', currentPage + 1);
//         paginationList.appendChild(nextButton);
//         }
    
//         pagination_container.appendChild(paginationList);
//     }
    
//     function createPaginationButton(text, page) {
//         const button = document.createElement('li');
//         const link = document.createElement('a');
//         link.href = '?page='+page;
//         link.textContent = text;
//         link.addEventListener('click', function (event) {
//         event.preventDefault();
//         currentPage = page;
//         generatePagination();
//         });
    
//         // Đánh dấu nút trang hiện tại
//         if (page === currentPage) {
//         link.classList.add('active');
//         }
    
//         button.appendChild(link);
//         return button;
//     }
    
//     generatePagination();
//     });