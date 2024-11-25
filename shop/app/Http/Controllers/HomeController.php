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
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'asc')->get();

        //Thuong hiệu sp
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderBy('brand_id', 'asc')
            ->get();


        //sp moi nhat
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->select('tbl_product.*', 'tbl_category_product.category_name', 'tbl_brand.brand_name')
            ->orderBy('product_id', 'desc')
            ->limit(20)
            ->get();



        return view('pages.home')->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product);
    }

    //loc gia sp
    public function filterPrice($order)
    {
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'asc')->get();

        //Thuong hiệu sp
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderBy('brand_id', 'asc')
            ->get();

            //xac dinh thu tu
            $orderDirect = ($order == 'hight-to-low') ? 'desc' : 'asc';
            $all_product = DB::table('tbl_product') 
                ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id') 
                ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id') 
                ->select('tbl_product.*', 'tbl_category_product.category_name', 'tbl_brand.brand_name') 
                ->orderBy('product_price', $orderDirect) 
                ->get(); 
        return view('pages.home')->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product);
    }
}
