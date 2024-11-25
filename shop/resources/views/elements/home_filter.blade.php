<div class="home-filter">
    <span class="home-filter__lable">Sắp xếp theo</span>
    <button class="home-filter__btn btn">Phổ biến</button>
    <button class="home-filter__btn btn btn--primary">Mới nhất</button>
    <button class="home-filter__btn btn">Bán chạy</button>

    <div class="select-input">
        <span class="select-input__lable">Giá</span>
        <i class="select-input__icon fa-solid fa-angle-down"></i>
        <ul class="select-input__list">
            <li class="select-input__item">
                <a href="{{ route('products.filter', ['price' => 'asc']) }}" class="select-input__link">Giá: thấp đến cao</a>
            </li>
            <br>
            <li class="select-input__item">
                <a href="{{ route('products.filter', ['price'=>'desc']) }}" class="select-input__link">Giá: cao đến thấp</a>
            </li>                            
        </ul>
    </div>
</div>