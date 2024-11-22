@extends('layouts.layout')
@section('content')
    {{-- <div class="app">
        <div class="grid__row app__content">

            

            <div class="grid__column-10"> --}}
                <div class="home-filter">
                    <span class="home-filter__label">Sắp xếp theo</span>
                    <button class="home-filter__btn btn">Phổ biến</button>
                    <button class="home-filter__btn btn btn-primary">Mới nhất</button>
                    <button class="home-filter__btn btn">Bán chạy</button>

                    <div class="select-input">
                        <span class="select-input-label">Giá</span>
                        <i class="select-input__icon fa-solid fa-chevron-down"></i>

                        <!-- List option -->
                        <ul class="select-input__list">
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                            </li>
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                    </div>

                    <div class="home-filter__page">
                        <span class="home-filter__page-num">
                            <span class="home-filter__page-current">1</span>/14
                        </span>

                        <div class="home-filter__page-control">
                            <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                <i class="home-filter__page-icon fa-solid fa-chevron-left"></i>
                            </a>
                            <a href="" class="home-filter__page-btn">
                                <i class="home-filter__page-icon fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="home-product ">
                    <!-- Grid ->row ->column -->
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>

                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                        <div class="grid__column-2-4">
                            <!-- Product item -->
                            <a class="home-product-item" href="">
                                <div class="home-product-item-img"
                                    style="background-image:url(https://down-vn.img.susercontent.com/file/vn-11134211-7r98o-lzrjqsja6159a1_tn.webp) ;">
                                </div>
                                <h4 class="home-product-item-name">DIY Handmade Lồng Đèn Phong Cách Trung Hoa
                                    Siêu Đáng Yêu Trang Trí Quà Tặng</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">350.000đ</span>
                                    <span class="home-product-item__price-current">200.000đ</span>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <!-- backend: ẩn home-product-item__like--liked thì sẽ hiển thị trái tim empty -->
                                        <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class="home-product-item__gold fa-solid fa-star"></i>
                                        <i class=" fa-regular fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">20 đã bán</span>
                                </div>
                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">TyTy</span>
                                    <span class="home-product-item__origin-name">126 Trần Cao Vân</span>
                                </div>

                                <div class="home-product-item__favorite">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Yêu thích</span>
                                </div>
                                <div class="home-product-item__sale-off">
                                    <span class="home-product-item__sale-off-percent">10%</span>
                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>

                <ul class="pagination home-product__pagination">
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-chevron-left"></i>
                        </a>
                    </li>

                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">1</i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item--active">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">2</i>
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">3</i>
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">4</i>
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">5</i>
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">...</i>
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon ">14</i>
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            {{-- </div>
        </div>
    </div> --}}
@endsection