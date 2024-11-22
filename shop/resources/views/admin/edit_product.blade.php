@extends('admin_layout')
@section('admin_content')
    <!-- main-content-wrap -->
    {{-- <div class="main-content-wrap"> --}}
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Cập nhật sản phẩm</h3>
        @if (Session::has('message'))
            <span class="text-alert">
                {{ Session::get('message') }}
                {{ session::forget('message') }}
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
                <div class="text-tiny">Update product</div>
            </li>
        </ul>
    </div>

    {{-- xu li view --}}
    <div>
        @foreach ($edit_product as $key => $pro)
            {{-- <!-- form-add-product --> --}}
            <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
                action="{{ url('update-product/' . $pro->product_id) }}">

                {{-- <input type="hidden" name="_token" value="8LNRTO4LPXHvbK2vgRcXqMeLgqtqNGjzWSNru7Xx" autocomplete="off"> --}}
                @csrf
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Tên sản phẩm <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Tên sản phẩm" name="product_name" tabindex="0"
                            value="{{ $pro->product_name }}" aria-required="true" required="">
                        <!-- <div class="text-tiny">Làm ơn điền ít nhất 10 ký tự.</div> -->
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Tên slug" name="product_slug" tabindex="0"
                            value="{{ $pro->product_slug }}" aria-required="true" required="">
                        <!-- <div class="text-tiny">Do not exceed 100 characters when entering the
                                        product name.</div> -->
                    </fieldset>

                    <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">Danh mục <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="product_cate">


                                    @foreach ($cate_product as $key => $cate)
                                        @if ($cate->category_id == $pro->category_id)
                                            <option selected value="{{ $cate->category_id }}">{{ $cate->category_name }}
                                            </option>
                                        @else
                                            <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>

                        <fieldset class="category">
                            <div class="body-title mb-10">Danh mục <span class="tf-color-1">*</span>
                            </div>
                            <div class="select">
                                <select class="" name="product_brand">


                                    @foreach ($brand_product as $key => $brand)
                                        @if ($brand->brand_id == $pro->brand_id)
                                            <option selected value="{{ $brand->brand_id }}">{{ $brand->brand_name }}
                                            </option>
                                        @else
                                            <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>

                    </div>

                    <fieldset class="description">
                        <div class="body-title mb-10">Mô tả <span class="tf-color-1">*</span>
                        </div>
                        <textarea class="mb-10" name="product_desc" placeholder="Mô tả sản phẩm" tabindex="0" aria-required="true"
                            required="">{{ $pro->product_desc }}</textarea>
                        <!-- <div class="text-tiny">Do not exceed 100 characters when entering the
                                        product name.</div> -->
                    </fieldset>
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <!-- Vùng hiển thị ảnh preview nếu có ảnh đã chọn -->
                            <div class="item" id="imgpreview"
                                style="display: {{ $pro->product_image ? 'block' : 'none' }}">
                                <img src="{{ asset('public/uploads/product/' . $pro->product_image) }}" class="effect8"
                                    alt="Preview">
                            </div>
                            <!-- Vùng chọn file -->
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click to
                                            browse</span></span>
                                    <input type="file" name="product_image" id="myFile" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="body-title mb-10">Hình ảnh chi tiết </div>
                        <div class="upload-image mb-16">



                            {{-- lap qua ds anh --}}
                           
                            {{-- @if ($product_images)
                                @foreach ($product_images as $image)
                                    <div class="item" id="imgpreview" style="display: {{ $image ? 'block' : 'none' }}">
                                        <img src="{{ asset('public/uploads/product/' . $image) }}" class="effect8"
                                            alt="Preview">
                                    </div>
                                @endforeach
                            @endif --}}

                            {{-- chuc nang tai anh len --}}
                            <div id="galUpload" class="item up-load">
                                <label class="uploadfile" for="gFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="text-tiny">Thả hình ảnh của bạn ở đây hoặc <span class="tf-color">chọn
                                            nhấp để
                                            duyệt</span></span>
                                    <input type="file" id="gFile" name="product_images_detail[]" accept="image/*"
                                        multiple="">
                                </label>
                            </div>
                            <!-- Thêm khu vực hiển thị hình ảnh -->
                            <div id="previewImages" class="preview-container">
                                <!-- Loop through the product_images array -->
                                @php
                                    $product_images = json_decode($pro->product_images, true); // Decode the JSON
                                @endphp
                                @if ($product_images && is_array($product_images))
                                    @foreach ($product_images as $image)
                                        <div class="item" id="imgpreview">
                                            <img src="{{ asset('public/uploads/product/' . $image) }}" class="effect8" alt="Preview">
                                        </div>
                                    @endforeach
                                @else
                                    <p>No images available.</p>
                                @endif
                            </div>
                            
                        </div>
                    </fieldset>

                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Giá sản phẩm <span class="tf-color-1">*</span></div>
                            <input class="mb-10" value="{{ $pro->product_price_old }}" type="text"
                                data-validation="number" data-validation-error-msg="Làm ơn điền số tiền"
                                name="product_price_old" class="form-control" id="exampleInputEmail1"
                                placeholder="Giá sản phẩm" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Giá ưu đãi<span class="tf-color-1">*</span></div>
                            <input class="mb-10" value="{{ $pro->product_price }}" type="text"
                                data-validation="number" data-validation-error-msg="Làm ơn điền số tiền"
                                name="product_price" class="form-control" id="exampleInputEmail1"
                                placeholder="Giá ưu đãi sản phẩm">
                        </fieldset>
                    </div>


                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Nhãn 1 <span class="tf-color-1">*</span>
                            </div>
                            <input class="mb-10" value="{{ $pro->product_favorite1 }}" type="text"
                                name="product_favorite1" class="form-control" id="favorite1" placeholder="Mô tả ngắn 1"
                                tabindex="0" aria-required="true" required="">
                        </fieldset>

                        <fieldset class="name">
                            <div class="body-title mb-10">Nhãn 2 <span class="tf-color-1">*</span>
                            </div>
                            <input class="mb-10" value="{{ $pro->product_favorite2 }}" type="text"
                                name="product_favorite2" class="form-control" id="favorite1" placeholder="Mô tả ngắn 2"
                                tabindex="0" aria-required="true" required="">
                        </fieldset>

                    </div>

                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Số lượng <span class="tf-color-1">*</span>
                            </div>
                            <input class="mb-10" type="text" placeholder="Nhập số lượng" name="product_quantity"
                                tabindex="0" value="{{ $pro->product_quantity }}" aria-required="true"
                                required="">
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Nổi bật</div>
                            <div class="select mb-10">
                                <select class="" name="product_status">
                                    @if ($pro->product_status == 1)
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    @else
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    @endif
                                </select>
                            </div>
                        </fieldset>
                    </div>

                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit" name="add_product">Thêm sản phẩm</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
