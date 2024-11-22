@extends('admin_layout')
@section('admin_content')
<!-- <div class="main-content-wrap"> -->
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Categories</h3>
    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
        <li>
            <a href="index.html">
                <div class="text-tiny">Dashboard</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">Danh mục</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search">
                <fieldset class="name">
                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value=""
                        aria-required="true" required="">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="{{ url('add-category-product') }}"><i class="icon-plus"></i>Thêm mới</a>
    </div>
    <div class="wg-table table-all-user">
        <div class="table-responsive">
            @if (Session::has('message'))
            <span class="text-alert">{{ Session::get('message') }}</span>
            {{ Session::forget('message') }}
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="font-size: 14px; font-weight: 500; color: black" >ID</th>
                        <th style="font-size: 14px; font-weight: 500; color: black" >Tên danh mục</th>
                        <th style="font-size: 14px; font-weight: 500; color: black" >Mô tả</th>
                        <th style="font-size: 14px; font-weight: 500; color: black" >Slug</th>
                        <!-- <th>Danh mục </th> -->
                        <th style="font-size: 14px; font-weight: 500; color: black" >Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_category_product as $key => $cate_pro)
                    <tr>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $cate_pro->category_id }}</td> 
                        <td class="pname">
                            <div class="image">
                                @if (!empty($cate_pro->category_image))
                                    <img src="{{ asset('upload/category/' . $cate_pro->category_image) }}" alt="{{ $cate_pro->category_name }}" class="image" style="width: 100px; height: auto;">
                                @else
                                    <img src="{{ asset('upload/category/default.png') }}" alt="Default Image" class="image" style="width: 100px; height: auto;">
                                @endif
                            </div>
                            <div class="name" style="padding-top: 12px">
                                <a href="#" class="body-title-2" style="font-size: 14px; font-weight: 400">{{ $cate_pro->category_name }}</a>
                            </div>
                        </td>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $cate_pro->category_desc }}</td> 
                        <td class="body-title-2" style="font-size: 14px; font-weight: 400;color: black">{{ $cate_pro->slug_category_product }}</td>
                        <!-- <td><a href="#" target="_blank">2</a></td> -->
                        <td>
                            <div class="list-icon-function">
                                <a href="{{ URL::to('/edit-category-product/'.$cate_pro->category_id) }}"
                                    class="active styling-edit" ui-toggle-class="">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                </a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này ko?')"
                                    href="{{ URL::to('/delete-category-product/'.$cate_pro->category_id) }}" class="active
                                                                styling-edit" ui-toggle-class="">
                                    <div class="item text-danger delete">
                                        <i class="icon-trash-2"></i>
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="divider"></div>
    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

    </div>
</div>




@endsection