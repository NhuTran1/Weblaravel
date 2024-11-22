@extends('admin_layout')
@section('admin_content')
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>All Products</h3>
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
                <div class="text-tiny">Tất cả sản phẩm</div>
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
            <a class="tf-button style-1 w208" href="{{ url('/add-product') }}"><i class="icon-plus"></i>Add new</a>
        </div>
        <div class="table-responsive">
            @if (Session::has('message'))
            <span class="text-alert">{{ Session::get('message') }}</span>
            {{ Session::forget('message') }}
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="font-size: 14px; font-weight: 500; color: black">ID</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Tên</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Giá</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Giá ưu đãi</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Slug</th>
                        {{-- <th style="font-size: 14px; font-weight: 500; color: black">Danh mục</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Thương hiệu</th> --}}
                        <th style="font-size: 14px; font-weight: 500; color: black">Nhãn 1</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Nhãn 2</th>
                        <!-- <th>Nổi bật</th> -->
                        <th style="font-size: 14px; font-weight: 500; color: black">Sô lượng</th>
                        <th style="font-size: 14px; font-weight: 500; color: black">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_product as $key => $pro)
                    <tr>
                        <td>{{ $pro->product_id }}</td>
                        <td class="pname">
                            <div class="image">
                                <img src="{{ asset('public/uploads/product/'.$pro->product_image) }}" alt="" class="image"  style="width: 100px; height: auto;">
                            </div>
                            <div class="name">
                                <a href="#" class="body-title-2">{{ $pro->product_name }}</a>
                                {{-- <div class="text-tiny mt-3">{{ $pro->product_name }}</div> --}}
                            </div>
                        </td>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->product_price_old }}</td>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->product_price }}</td>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->product_slug }}</td>
                        {{-- <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->category_id }}</td>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->brand_id }}</td> --}}
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->product_favorite1 }}</td>
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->product_favorite2 }}</td>
                      
                        <td style="font-size: 14px; font-weight: 400; color: black">{{ $pro->product_quantity }}</td>
                       
                        <td>
                            {{-- <div class="list-icon-function">
                               
                                        <span class="text-ellipsis">
                                            @if ($pro->product_status == 1)
                                                <a href="{{ URL::to('/unactive-product/' . $pro->product_id) }}"><span
                                                    class="fa-regular fa-lock" style="color: #74C0FC;"></span></a>
                                                    
                                            @else
                                                <a href="{{ URL::to('/active-product/' . $pro->product_id) }}"><span
                                                    class="fa-regular fa-lock-open" style="color: #74C0FC;"></span></a>
                                                        
                                            @endif
                                        </span>
                                    </div>
                                </a>
                            </div>
                                --}}
                                <div class="list-icon-function">
                                    <a href="{{ URL::to('/edit-product/' . $pro->product_id) }}">
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc là muốn xóa thương hiệu sản phẩm này không?')"
                                            href="{{ url('/delete-product/' . $pro->product_id) }}"
                                            >
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

        <div class="divider"></div>
        <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">


        </div>
    </div>
</div>
</div>


@endsection