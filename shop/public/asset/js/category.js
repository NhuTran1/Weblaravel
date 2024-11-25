const categoryContainer = document.getElementById('categoryContainer');
const scrollLeftBtn = document.getElementById('scrollLeft');
const scrollRightBtn = document.getElementById('scrollRight');

scrollRightBtn.onclick = function () {
    categoryContainer.scrollBy({
        left: 200,
        behavior: 'smooth'
    });
};

scrollLeftBtn.onclick = function () {
    categoryContainer.scrollBy({
        left: -200,
        behavior: 'smooth'
    });
};

let isDown = false;
let startX;
let scrollLeft;

categoryContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    categoryContainer.classList.add('active');
    startX = e.pageX - categoryContainer.offsetLeft;
    scrollLeft = categoryContainer.scrollLeft;
});

categoryContainer.addEventListener('mouseleave', () => {
    isDown = false;
    categoryContainer.classList.remove('active');
});

categoryContainer.addEventListener('mouseup', () => {
    isDown = false;
    categoryContainer.classList.remove('active');
});

categoryContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - categoryContainer.offsetLeft;
    const walk = (x - startX) * 2; //scroll-fast
    categoryContainer.scrollLeft = scrollLeft - walk;
});

//brand

const brandContainerT = document.getElementById('brandContainerT');
const scrollLeftBtnT = document.getElementById('scrollLeftT');
const scrollRightBtnT = document.getElementById('scrollRightT');

// Hàm cuộn trái/phải
scrollRightBtnT.onclick = function () {
    brandContainerT.scrollBy({
        left: brandContainerT.clientWidth, // Cuộn chiều rộng hiển thị
        behavior: 'smooth'
    });
};

scrollLeftBtnT.onclick = function () {
    brandContainerT.scrollBy({
        left: -brandContainerT.clientWidth,
        behavior: 'smooth'
    });
};

// Ẩn/hiện nút khi cần
function updateScrollButtons() {
    const scrollLeft = brandContainerT.scrollLeft;
    const maxScrollLeft = brandContainerT.scrollWidth - brandContainerT.clientWidth;

    scrollLeftBtnT.style.display = scrollLeft > 0 ? 'block' : 'none';
    scrollRightBtnT.style.display = scrollLeft < maxScrollLeft ? 'block' : 'none';
}

// Gọi lại mỗi khi cuộn
brandContainerT.addEventListener('scroll', updateScrollButtons);
updateScrollButtons(); // Khởi tạo trạng thái



let slideIndexT = 0; 
showSlidesT(); 
function showSlidesT() { 
    let slidesT = document.getElementsByClassName("slideT"); 
    for (let i = 0; i < slidesT.length; i++) 
        { slidesT[i].style.display = "none"; 

        } slideIndexT++; 
        if (slideIndexT > slidesT.length) 
            { slideIndexT = 1; } slidesT[slideIndexT - 1].style.display = "block"; 
        setTimeout(showSlidesT, 3000); // Change image every 3 seconds 
}
