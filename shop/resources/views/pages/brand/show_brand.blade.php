@extends('layouts.layout')

@section('content')
<div class="home-filter">
    @php
        $active_brand_slug = Session::get('active_brand_slug');
    @endphp
    <span class="home-filter__lable">Sắp xếp theo</span>
    <button class="home-filter__btn btn">Phổ biến</button>
    <button class="home-filter__btn btn btn--primary">Mới nhất</button>
    <button class="home-filter__btn btn">Bán chạy</button>

    <div class="select-input">
        <span class="select-input__lable">Giá</span>
        <i class="select-input__icon fa-solid fa-angle-down"></i>
        <ul class="select-input__list">
            <li class="select-input__item">
                <a href="{{ url('filter-brand-price/'. $active_brand_slug . '/'. 'low_to_hight') }}" class="select-input__link">Giá: thấp đến cao</a>
                
            </li>
            <br>
            <li class="select-input__item">
                <a href="{{ url('filter-brand-price/'. $active_brand_slug . '/'. 'hight_to_low') }}" class="select-input__link">Giá: cao đến cao</a>
            </li>                            
        </ul>
    </div>
</div>

<div class="home-product product-clock product_1">
    <div class="grid__row1">
        @foreach ($brand_by_id as $key => $product)
            @csrf
            <div class="grid__column-2-4">
                <a class="home-product-item" href="#">
                    <div class="home-product-item__img" style="background-image: url('{{ asset('public/uploads/product/'.$product->product_image) }}');">                         
                    </div>
                    <h4 class="home-product-item__name">{{ $product->product_name }}</h4>
                    <div class="home-product-item__price">
                        <span class="home-product-item__price-old">{{ $product->product_price_old }}</span>
                        <span class="home-product-item__price-current">{{ $product->product_price }}</span>
                    </div>
                    <div class="home-product-item__action">
                        <span class="home-product-item__like home-product-item__like--liked">
                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                        </span>
                        <div class="home-product-item__rating">
                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="home-product-item__sold">{{ $product->product_quantity }}</span>
                    </div>

                    <div class="home-product-item__origin">
                        <span class="home-product-item__brand">
                            {{ $product->category_name }}
                        </span>
                        <span class="home-product-item__origin-name">{{ $product->brand_name }}</span>
                    </div>
                    <div class="home-product-item__favourite">
                        <i class="fa-solid fa-check"></i>
                        <span>{{ $product->product_favorite1 }}</span>
                    </div>
                    <div class="home-product-item__sale-off">
                        <span class="home-product-item__sale-off-percent">10%</span>
                        <span class="home-product-item__sale-off-lable">GIẢM</span>
                    </div>
                </a>
            </div> 
        @endforeach
    </div>
</div>

<ul class="pagination home-product__pagination">
    <li class="pagination-item">
        <a href="" class="pagination-item__link">
            <i class="pagination-item__icon fa-solid fa-angle-left"></i>
        </a>                        
    </li>
    <li class="pagination-item">
        <a href="" class="pagination-item__link pagination-item--active">1</a>                 
    </li>   
    <li class="pagination-item">
        <a href="" class="pagination-item__link">2</a>                 
    </li>
    <li class="pagination-item">
        <a href="" class="pagination-item__link">3</a>                 
    </li>
    <li class="pagination-item">
        <a href="" class="pagination-item__link">4</a>                 
    </li>
    <li class="pagination-item">
        <a href="" class="pagination-item__link">5</a>                 
    </li>
    <li class="pagination-item">
        <a href="" class="pagination-item__link">...</a>                 
    </li>
    <li class="pagination-item">
        <a href="" class="pagination-item__link">14</a>                 
    </li>     
    <li class="pagination-item">
        <a href="" class="pagination-item__link">
            <i class="pagination-item__icon fa-solid fa-angle-right"></i>
        </a>                        
    </li>
</ul>  
@endsection
