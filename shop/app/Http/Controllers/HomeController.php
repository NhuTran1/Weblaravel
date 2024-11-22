<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

session_start();

class HomeController extends Controller
{
    //hiển thị danh mục sản phẩm ra trang chủ 
    public function index() {
        $cate_product = DB::table('tbl_category_product')
                                ->where('category_status', '1')
                                ->orderBy('category_id','asc')->get();

        //Thuong hiệu sp
        $brand_product = DB::table('tbl_brand')
                            ->where('brand_status', '1')
                            ->orderBy('brand_id', 'asc')
                            ->get();

        return view('pages.home')->with('category', $cate_product)
                                        ->with('brand', $brand_product);

    }

    //Hiển thị thương hiệu ra trang chủ
    
    

}
