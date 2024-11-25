<div class="left-panelT">
    
    <button class="scroll-buttonT leftT" id="scrollLeftT" style="display: none;">&laquo;</button>
    <div class="brand-containerT" id="brandContainerT">
       
        <!-- Danh sách thương hiệu -->
        @foreach ($brand as $key=>$brand)
        <a href="{{ URL::to('thuong-hieu-san-pham/'.$brand->brand_slug) }}" class="brandT">
            <img src="{{ asset('upload/brand/'.$brand->brand_image) }}" alt="Brand 1">
            <div class="brand-nameT">{{ $brand->brand_name }}</div>
        </a>
        @endforeach
        
        <!-- Thêm các thương hiệu khác -->
    </div>
    <button class="scroll-buttonT rightT" id="scrollRightT">&raquo;</button>
</div>

<div class="right-panelT">
    <div class="slideshow-containerT">
        <div class="slideT fadeT"> <img src="{{ asset('upload/category/chiphi88.jpg') }}" alt="Slide 1"> </div>
        <div class="slideT fadeT"> <img src="{{ asset('upload/category/handmade44.jpg') }}" alt="Slide 2"> </div>
        <div class="slideT fadeT"> <img src="{{ asset('upload/category/thiep38.jpg') }}" alt="Slide 3"> </div>
        <!-- Thêm các slide khác nếu cần -->
    </div>
</div>
