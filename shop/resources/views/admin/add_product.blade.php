@extends('admin_layout')
@section('admin_content')
    <!-- main-content-wrap -->
    {{-- <div class="main-content-wrap"> --}}
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Add Product</h3>
        @if (Session::has('message'))
            <span class="text-alert">
                {{ Session::get('message') }};
                {{ Session::forget('message') }};
            </span>
        @endif
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="index-2.html">
                    <div class="text-tiny">Dashboard</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <a href="all-product.html">
                    <div class="text-tiny">Products</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Add product</div>
            </li>
        </ul>
    </div>
    <!-- form-add-product -->
    <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
        action="{{ url('/save-product') }}">
        @csrf
        <div class="wg-box">
            <fieldset class="name">
                <div class="body-title mb-10">Tên sản phẩm <span class="tf-color-1">*</span>
                </div>
                <input class="mb-10" type="text" placeholder="Tên sản phẩm" name="product_name" tabindex="0"
                    value="" aria-required="true" required="">
                <!-- <div class="text-tiny">Làm ơn điền ít nhất 10 ký tự.</div> -->
            </fieldset>

            <fieldset class="name">
                <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Tên slug" name="product_slug" tabindex="0"
                    value="" >
                <!-- <div class="text-tiny">Do not exceed 100 characters when entering the
                                                    product name.</div> -->
            </fieldset>

            <div class="gap22 cols">
                <fieldset class="category">
                    <div class="body-title mb-10">Danh mục <span class="tf-color-1">*</span>
                    </div>
                    <div class="select" >
                        <select class="" name="product_cate">
                           

                            @foreach ($cate_product as $key => $cate)
                                <option value="{{ $cate->category_id }}">
                                    {{ $cate->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </fieldset>

                <fieldset class="category">
                    <div class="body-title mb-10">Thương hiệu <span class="tf-color-1">*</span>
                    </div>
                    <div class="select" >
                        <select class="" name="product_brand">

                            @foreach ($brand_product as $key => $brand)
                                <option value="{{ $brand->brand_id }}">
                                    {{ $brand->brand_name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </fieldset>

            </div>

            <fieldset class="description">
                <div class="body-title mb-10">Mô tả <span class="tf-color-1">*</span>
                </div>
                <textarea class="mb-10" name="product_desc" placeholder="Mô tả sản phẩm" tabindex="0" aria-required="true"
                    required=""></textarea>
                <!-- <div class="text-tiny">Do not exceed 100 characters when entering the
                                                    product name.</div> -->
            </fieldset>
        </div>
        <div class="wg-box">
            <fieldset>
                <div class="body-title">Hình ảnh <span class="tf-color-1">*</span>
                </div>
                <div class="upload-image flex-grow">
                    <div class="item" id="imgpreview" style="display:none">
                        <img src="../../../localhost_8000/images/upload/upload-1.png" class="effect8" alt="">
                    </div>
                    <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                            <span class="icon">
                                <i class="icon-upload-cloud"></i>
                            </span>
                            <span class="body-text">Thả hình ảnh của bạn ở đây hoặc <span class="tf-color">chọn nhấp để
                                    duyệt</span></span>
                            <input type="file" id="myFile" name="product_image" accept="image/*">
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="body-title mb-10">Hình ảnh chi tiết </div>
                <div class="upload-image mb-16">
                    <div class="item" id="imgpreview" style="display:none">
                        <img src="../../../localhost_8000/images/upload/upload-1.png" class="effect8" alt="">
                    </div>
            
                    <div id="galUpload" class="item up-load">
                        <label class="uploadfile" for="gFile">
                            <span class="icon">
                                <i class="icon-upload-cloud"></i>
                            </span>
                            <span class="text-tiny">Thả hình ảnh của bạn ở đây hoặc <span class="tf-color">chọn nhấp để
                                    duyệt</span></span>
                            <input type="file" id="gFile" name="product_images_detail[]" accept="image/*" multiple="">
                        </label>
                    </div>
                </div>
            
                <!-- Thêm khu vực hiển thị hình ảnh -->
                <div id="previewImages" class="preview-container">
                    <!-- Ảnh sẽ được hiển thị tại đây -->
                </div>
            </fieldset>
            

            <div class="cols gap22">
                <fieldset class="name">
                    <div class="body-title mb-10">Giá sản phẩm <span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" data-validation="number"
                        data-validation-error-msg="Làm ơn điền số tiền" name="product_price_old" class="form-control"
                        id="exampleInputEmail1" placeholder="Giá sản phẩm" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title mb-10">Giá ưu đãi<span class="tf-color-1">*</span></div>
                    <input class="mb-10" type="text" data-validation="number"
                        data-validation-error-msg="Làm ơn điền số tiền" name="product_price" class="form-control"
                        id="exampleInputEmail1" placeholder="Giá ưu đãi sản phẩm">
                </fieldset>
            </div>


            <div class="cols gap22">
                <fieldset class="name">
                    <div class="body-title mb-10">Nhãn 1 <span class="tf-color-1">*</span>
                    </div>
                    <input class="mb-10"type="text" name="product_favorite1" class="form-control" id="favorite1"
                        placeholder="Mô tả ngắn 1" tabindex="0" value="">
                </fieldset>

                <fieldset class="name">
                    <div class="body-title mb-10">Nhãn 2 <span class="tf-color-1">*</span>
                    </div>
                    <input class="mb-10"type="text" name="product_favorite2" class="form-control" id="favorite1"
                        placeholder="Mô tả ngắn 2" tabindex="0" value="">
                </fieldset>

            </div>

            <div class="cols gap22">
                <fieldset class="name">
                    <div class="body-title mb-10">Số lượng <span class="tf-color-1">*</span>
                    </div>
                    <input class="mb-10" type="text" placeholder="Nhập số lượng" name="product_quantity"
                        tabindex="0" value="" aria-required="true" required="">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title mb-10">Nổi bật</div>
                    <div class="select mb-10">
                        <select class="" name="product_status">
                            <option value="1">Hiển thị</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                </fieldset>
            </div>

            <div class="cols gap10">
                <button class="tf-button w-full" type="submit">Add product</button>
            </div>
        </div>
    </form>
    <!-- /form-add-product -->
@endsection
