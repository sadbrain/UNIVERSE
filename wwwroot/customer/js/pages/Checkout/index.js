document.addEventListener('DOMContentLoaded', function () {
    // Lắng nghe sự kiện click trên phần tử có id là 'circleIcon'
    document.getElementById('circleIcon').addEventListener('click', function () {
      // Lấy phần tử
      var circleIcon = document.querySelector('.fa-solid.fa-circle-check');
  
      // Kiểm tra trạng thái hiện tại của display
      if (circleIcon.style.display === 'none') {
        // Nếu là 'none', chuyển thành 'block'
        circleIcon.style.display = 'block';
      } else {
        // Nếu không phải 'none', chuyển thành 'none'
        circleIcon.style.display = 'none';
      }
    });
  });
  