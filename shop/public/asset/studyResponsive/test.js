

window.onload = function() {
        showSlides();
};


let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
//   Ẩn tất cả slide ban đầu
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
//   Chuyển sang sldie tiếp theo
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    //quay về trang 1 nếu vượt quá số slide
  
//   Dặt lại trạng thái active của cacs chấm
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}