<button class="scroll-button left" id="scrollLeft">&laquo;</button>
<div class="category-container" id="categoryContainer">
    @foreach ($category as $key=>$cate)
    <a style="text-decoration: none" class="category1" href="{{ URL::to('danh-muc-san-phan/'. $cate->slug_category_product) }}"> 
        <img src="{{ asset('upload/category/'.$cate->category_image) }}" alt="Đồ thủ công">
        <div class="category-name">{{ $cate->category_name }}</div>
    </a>
    @endforeach
     <!-- Thêm các danh mục khác nếu cần -->
</div> 
<button class="scroll-button right" id="scrollRight">&raquo;</button>
