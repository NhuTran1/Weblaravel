// lấy tất cả các nút tam giác
document.querySelectorAll('.toggle-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var subCategoryList = this.nextElementSibling;
            if (subCategoryList.style.display === 'none' || subCategoryList == '') {
                subCategoryList.style.display = 'block';
            } else {
                subCategoryList.style.display = 'none';
            }
        })
})