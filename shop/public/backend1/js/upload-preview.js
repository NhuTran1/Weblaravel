document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('myFile');
    const imgPreview = document.getElementById('imgpreview');
    const previewImage = imgPreview.querySelector('img');

    fileInput.addEventListener('change', function (event) {
        const file = event.target.files[0];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                imgPreview.style.display = 'block'; // Hiển thị ảnh
            };
            reader.readAsDataURL(file);
        } else {
            imgPreview.style.display = 'none'; // Ẩn nếu không chọn đúng ảnh
        }
    });
});
