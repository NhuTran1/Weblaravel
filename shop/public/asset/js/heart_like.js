document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.home-product-item__like').addEventListener('click', function() {
        this.classList.toggle('home-product-item__like--liked');
    });
});

