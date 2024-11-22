@extends('admin_layout')
@section('admin_content')
<!-- main-content-wrap -->

    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Thông tin danh mục</h3>
        @if (Session::has('message'))
        <span class="text-alert">
            {{ Session::get('message') }};
            {{ Session::forget('message') }};
        </span>
        @endif
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
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
                    <div class="text-tiny">Danh mục</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Thêm danh mục</div>
            </li>
        </ul>
    </div>
    <!-- new-category -->
    <div class="wg-box">
        <form class="form-new-product form-style-1" role="form" action="{{ url('/save-category-product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset class="name">
                <div class="body-title">Tên danh mục <span class="tf-color-1">*</span>
                </div>
                <input class="flex-grow" type="text" name="category_product_name" class="form-control"
                id="exampleInputEmail1" placeholder="Tên danh mục"
                    aria-required="true" required="">
            </fieldset>
            <fieldset class="name">
                <div class="body-title">Slug <span class="tf-color-1">*</span>
                </div>
                <input class="flex-grow" type="text" name="slug_category_product" class="form-control"
                id="exampleInputPassword1" placeholder="Slug danh mục "
                    aria-required="true" required="">
            </fieldset>

            <fieldset class="name">
                <div class="body-title">Mô tả danh mục <span class="tf-color-1">*</span>
                </div>
                <textarea class="flex-grow" style="width: 100%" rows="8" name="category_product_desc" 
                                                placeholder="Mô tả danh mục"></textarea>
                                                
            </fieldset>

            <fieldset>
                <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                <div class="upload-image flex-grow">
                    <!-- Vùng hiển thị ảnh preview -->
                    <div class="item" id="imgpreview" style="display:none">
                        <img src="" class="effect8" alt="Preview">
                    </div>
                    <!-- Vùng chọn file -->
                    <div id="upload-file" class="item up-load">
                        <label class="uploadfile" for="myFile">
                            <span class="icon">
                                <i class="icon-upload-cloud"></i>
                            </span>
                            <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                            <input type="file" name="category_image" id="myFile" accept="image/*">
                        </label>
                    </div>
                </div>
            </fieldset>
            

           

            <div class="form-group">
                <label for="exampleInputPassword1" class="body-title">Nổi bật</label>
                <select name="category_product_status" class="flex-grow" class="form-control
    input-sm m-bot15">
    
                    <option value="1"  class="flex-grow">Hiển thị</option>
                    <option value="0" class="flex-grow">Ẩn</option>
    
    
                </select>
            </div>

            <div class="bot">
                <div></div>

                <button class="tf-button w208" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection