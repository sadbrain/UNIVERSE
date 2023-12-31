const btn_thumbnail = document.querySelector(".btn_thumbnail");
const show_list_picture = document.querySelector(".list_picture"); 
const thumbnail_input = document.querySelector("input[name='Product[thumbnail]']"); 
const img_thumbnail = document.querySelector(".img_thumbnail"); 
show_list_picture.classList.toggle("d-none");
btn_thumbnail.onclick = () => {
    show_list_picture.classList.toggle("d-none");
    
}
const btn_thumbnails = show_list_picture.querySelectorAll(".btn-thumbnail");
btn_thumbnails.forEach(element => {
    element.onclick = (event) => {
        console.log(event.target);
        url = event.target.src;
        index_of_wwwroot = url.lastIndexOf("wwwroot");
        path_picture = url.slice(index_of_wwwroot, url.length);
        img_thumbnail.src = url;
        thumbnail_input.value = path_picture;
        show_list_picture.classList.toggle("d-none");

    }   
});