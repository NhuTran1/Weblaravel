@extends('admin_layout')
@section('admin_content')
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
                <div class="text-tiny">Sửa thương hiệu</div>
            </li>
        </ul>
    </div>
    <!-- new-brand -->
    <div class="wg-box">
        @foreach ($edit_brand_product as $edit_brand)
            <form role="form" action="{{ url('update-brand-product/' . $edit_brand->brand_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset class="name">
                    <div class="body-title">Tên danh mục <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" value="{{ $edit_brand->brand_name }}" type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                </fieldset>
                <fieldset class="name">
                    <div class="body-title">Slug <span class="tf-color-1">*</span></div>
                    <input class="flex-grow" value="{{ $edit_brand->slug_brand_product }}" type="text" name="slug_brand_product" class="form-control" id="exampleInputPassword1" placeholder="Slug danh mục">
                </fieldset>

                <fieldset class="name">
                    <div class="body-title">Mô tả danh mục <span class="tf-color-1">*</span></div>
                    <textarea class="flex-grow" style="width: 100%" rows="8" name="brand_product_desc" placeholder="Mô tả danh mục">{{ $edit_brand->brand_desc }}</textarea>
                </fieldset>

                <fieldset>
                    <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                    <div class="upload-image flex-grow">
                        <!-- Vùng hiển thị ảnh preview nếu có ảnh đã chọn -->
                        <div class="item" id="imgpreview" style="display: {{ $edit_brand->brand_image ? 'block' : 'none' }}">
                            <img src="{{ asset('upload/brand/'.$edit_brand->brand_image) }}" class="effect8" alt="Preview">
                        </div>
                        <!-- Vùng chọn file -->
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                <input type="file" name="brand_image" id="myFile" accept="image/*">
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="body-title">Nổi bật</label>
                    <select name="brand_product_status" class="flex-grow" class="form-control input-sm m-bot15">
                        @if ($edit_brand->brand_status == 1)
                            <option value="1" class="flex-grow">Hiển thị</option>
                            <option value="0" class="flex-grow">Ẩn</option>
                        @else
                            <option value="0" class="flex-grow">Ẩn</option>
                            <option value="1" class="flex-grow">Hiển thị</option>
                        @endif
                    </select>
                </div>

                <div class="bot">
                    <div></div>
                    <button class="tf-button w208" type="submit">Save</button>
                </div>
            </form>
        @endforeach
    </div>
@endsection
