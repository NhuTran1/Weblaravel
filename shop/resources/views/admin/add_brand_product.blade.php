@extends('admin_layout')
@section('admin_content')


<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Brand infomation</h3>
    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
        @if (Session::has('message'))
        <span class="text-alert">
            {{ Session::get('message') }};
            {{ Session::forget('message') }};
        </span>
        @endif
        <li>
            <a href="#">
                <div class="text-tiny">Dashboard</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <a href="#">
                <div class="text-tiny">Thương hiệu</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">Thêm thương hiệu</div>
        </li>


    </ul>
</div>
<!-- new-category -->
<div class="wg-box">  
    <form class="form-new-product form-style-1" role="form" action="{{ url('/save-brand-product') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <fieldset class="name">
            <div class="body-title">Tên thương hiệu <span class="tf-color-1">*</span></div>
            <input class="flex-grow" type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1"
                placeholder="Tên danh mục" aria-required="true" required="">
        </fieldset>
        <fieldset class="name">
            <div class="body-title"> Slug <span class="tf-color-1">*</span></div>
            <input class="flex-grow" type="text" name="brand_slug" class="form-control" id="exampleInputEmail1"
                placeholder="Slug" aria-required="true" required="">
        </fieldset>
        <fieldset class="name">
            <div class="body-title">Mô tả thương hiệu <span class="tf-color-1">*</span>
            </div>
            <textarea class="flex-grow" style="width: 100%" rows="8" name="brand_product_desc" 
                                            placeholder="Mô tả danh mục"></textarea>
                                            
        </fieldset>
        <fieldset>
            <div class="body-title">Hình ảnh thương hiệu <span class="tf-color-1">*</span>
            </div>
            <div class="upload-image flex-grow">
                <div class="item" id="imgpreview" style="display:none">
                    <img src="" class="effect8" alt="">
                </div>
                <div id="upload-file" class="item up-load">
                    <label class="uploadfile" for="myFile">
                        <span class="icon">
                            <i class="icon-upload-cloud"></i>
                        </span>
                        <span class="body-text">Drop your images here or select <span class="tf-color">click to
                                browse</span></span>
                        {{-- <input type="file" name="brand_image" class="formcontrol" id="exampleInputEmail1"> --}}
                        <input type="file" name="brand_image" id="myFile" name="image" accept="image/*"> 
                    </label>
                </div>
            </div>
        </fieldset>

        <div class="form-group">
            <label for="exampleInputPassword1" class="body-title">Nổi bật</label>
            <select name="brand_product_status" class="body-title"  class="form-control
input-sm m-bot15">

                <option value="1" class="flex-grow">Hiển thị</option>
                <option value="0" class="flex-grow">Ẩn</option>


            </select>
        </div>

        <div class="bot">
            <div></div>
            <button type="submit" name="add_category_product" class="tf-button w208" class="btn btn-info">Thêm thương
                hiệu</button>
        </div>
    </form>
</div>
</div>

@endsection