{{-- phan ben trai --}}
<nav class="category category__pc">
    <h3 class="category__heading">
        <i class="category__heading-icon fa-solid fa-list"></i>
        Danh mục</h3>
        <ul class="category-list" >

            @foreach ($category as $key=>$cate)

                <li class="category-item {{ (Session::get('active_category_slug') == $cate->slug_category_product || ($key == 0 && !Session::has('active_category_slug'))) ? 'category-item--active' : '' }}">
                    {{-- session::get : ktra slug có đc lưu trong session có = với slug hiện tại --}}
                    <a href="{{ URL::to('danh-muc-san-phan/'. $cate->slug_category_product) }}" class="category-item__link">
                        {{ $cate->category_name }}
                        {{-- <span class="toggle-btn">&#x25BC;</span> --}}
                    </a>

                    
                </li>
                
            @endforeach
        </ul>

        <div class="category">
            <h3 class="category__heading"> Thương hiệu  </h3>

            <ul class="category-list">

                @foreach ($brand as $key=>$brand)

                    <li class="category-item {{ (Session::get('active_brand_slug') == $brand->brand_slug) ? 'category-item--active' : '' }}">
    
                        <a href="{{ URL::to('thuong-hieu-san-pham/'.$brand->brand_slug) }}" class="category-item__link">
                            {{ $brand->brand_name }}                                    
                        </a>
                     
                    </li>
                    
                @endforeach
            </ul>
        </div>
</nav>
        
          

            
       
                                {{-- <li class="category-item category-item--active">
                        <a href="#" class="category-item__link">Best seller</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-item__link">Thủ công mỹ nghệ</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-item__link">Đặc sản địa phương</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-item__link">Trang sức và phụ kiện</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-item__link">Quà lưu niệm nhỏ</a>
                    </li>
                    <li class="category-item">
                        <a href="#" class="category-item__link">Áo dài và trang phục truyền thống</a>
                    </li> --}}
    

