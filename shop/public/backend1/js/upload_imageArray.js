document.getElementById('gFile').addEventListener('change', function (event) {
    const files = event.target.files; // Lấy danh sách file
    const previewContainer = document.getElementById('previewImages'); // Khu vực hiển thị
    console.log('Files selected:', files);

    // Xóa nội dung cũ
    previewContainer.innerHTML = '';

    // Duyệt qua từng file
    Array.from(files).forEach(file => {
        console.log('Processing file:', file.name);
        if (file.type.startsWith('image/')) { // Kiểm tra file có phải là ảnh
            const reader = new FileReader();

            reader.onload = function (e) {
                console.log('File loaded:', e.target.result);
                // Tạo thẻ img và gắn vào previewContainer
                const img = document.createElement('img');
                img.src = e.target.result;
                previewContainer.appendChild(img);
            };

            reader.readAsDataURL(file); // Đọc file dưới dạng URL
        } else {
            console.warn('Skipped non-image file:', file.name);
        }
    });
});
