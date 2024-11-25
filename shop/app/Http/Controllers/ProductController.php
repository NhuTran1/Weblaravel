<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class ProductController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return redirect('dashboard');
        } else {
            return redirect('admin')->send();
        }
    }

    //mucj tiêu: lấy id, name category, brand->view(admin.add_product)
    public function add_product()
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->orderBy('brand_id', 'asc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product)
            ->with('brand_product', $brand_product);
    }

    // public function all_product() {
    //     $all_product =  DB::table('tbl_product')->get();
    //     $manager_product = view('admin.all_product')->with('all_product', $all_product);
    //     return view('admin_layout')->with('admin.all_product', $manager_product);
    // }
    //save_product: thực thi nút thêm sản phẩm: action in form

    public function save_product(Request $request)
    {
        $this->AuthLogin();

        // Tạo mảng dữ liệu để lưu sản phẩm
        $data = [
            'product_name' => $request->product_name,
            'product_slug' => $request->product_slug,
            'product_price' => $request->product_price,
            'product_price_old' => $request->product_price_old,
            'product_desc' => $request->product_desc,

            'category_id' => $request->product_cate,
            'brand_id' => $request->product_brand,
            'product_status' => $request->product_status,
            'product_favorite1' => $request->product_favorite1,
            'product_favorite2' => $request->product_favorite2,
            'product_quantity' => $request->product_quantity,
            'product_image' => '', // Mặc định nếu không có ảnh
            'product_images' => '',
            // 'product_category'=>$request->category_name,
            // 'product_brand'=>$request->brand_name
        ];

        // Xử lý upload ảnh sản phẩm
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME); // Lấy tên không bao gồm phần mở rộng
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension(); // Đổi tên file
            $get_image->move('public/uploads/product', $new_image); // Lưu ảnh vào thư mục
            $data['product_image'] = $new_image; // Gán tên ảnh vào mảng dữ liệu
        }

        $product_images = $request->file('product_images_detail');
        if ($product_images) {
            $image_array = [];
            foreach ($product_images as $image) {
                $get_name_image = $image->getClientOriginalName();
                $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
                $new_image = $name_image . rand(0, 99) . '.' . $image->getClientOriginalExtension();
                $image->move('public/uploads/product', $new_image);
                $image_array[] = $new_image; // Add image to array
            }
            $data['product_images'] = json_encode($image_array);  // Save as JSON
        } else {
            $data['product_images'] = json_encode([]); // If no images, save empty array
        }


        // Lưu dữ liệu vào bảng sản phẩm
        DB::table('tbl_product')->insert($data);

        // Thông báo và chuyển hướng
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('all-product'); // Chuyển hướng tới trang danh sách sản phẩm
    }


    public function all_product()
    {
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->orderby('tbl_product.product_id', 'asc')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }


    public function unactive_product($product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        session(['message' => 'Không kích hoạt sản phẩm thành công']);
        return redirect('all-product');
    }

    public function active_product($product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
        session(['message' => 'Kích hoạt sản phẩm thành công']);
        return redirect('all-product');
    }

    //edit product
    public function edit_product($product_id)
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')
            ->orderBy('category_id', 'asc')
            ->get();
        $brand_product = DB::table('tbl_brand')
            ->orderBy('brand_id', 'asc')
            ->get();
        $edit_product = DB::table('tbl_product')
            ->orderBy('product_id', 'asc')
            ->where('product_id', $product_id)
            ->get();
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)
            ->with('cate_product', $cate_product)->with('brand_product', $brand_product);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request, $product_id)
    {
        $this->AuthLogin();

        // Tạo mảng dữ liệu để lưu sản phẩm
        $data = [
            'product_name' => $request->product_name,
            'product_slug' => $request->product_slug,
            'product_price' => $request->product_price,
            'product_price_old' => $request->product_price_old,
            'product_desc' => $request->product_desc,

            'category_id' => $request->product_cate,
            'brand_id' => $request->product_brand,
            'product_status' => $request->product_status,
            'product_favorite1' => $request->product_favorite1,
            'product_favorite2' => $request->product_favorite2,
            'product_quantity' => $request->product_quantity,
            'product_image' => '', // Mặc định nếu không có ảnh
            'product_images' => '',
            // 'product_category'=>$request->category_name,
            // 'product_brand'=>$request->brand_name
        ];

        // Xử lý upload ảnh sản phẩm
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME); // Lấy tên không bao gồm phần mở rộng
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension(); // Đổi tên file
            $get_image->move('public/uploads/product', $new_image); // Lưu ảnh vào thư mục
            $data['product_image'] = $new_image; // Gán tên ảnh vào mảng dữ liệu
        }

        $product_images = $request->file('product_images_detail');
        if ($product_images) {
            $image_array = [];
            foreach ($product_images as $image) {
                $get_name_image = $image->getClientOriginalName();
                $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
                $new_image = $name_image . rand(0, 99) . '.' . $image->getClientOriginalExtension();
                $image->move('public/uploads/product', $new_image);
                $image_array[] = $new_image; // Add image to array
            }
            $data['product_images'] = json_encode($image_array);  // Save as JSON
        } else {
            $data['product_images'] = json_encode([]); // If no images, save empty array
        }


        //cap nhat sp trong database
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);

        Session::put('message', 'Cập nhật sản phẩm thành công');
        return redirect('all-product');
    }

    public function delete_product($product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return redirect('all-product');
    }

    // public function details_product($product_slug, Request $request)
    // {
    //     $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();
    //     $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'desc')->get();
    //     $details_product = DB::table('tbl_product')
    //         ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
    //         ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
    //         ->select('tbl_product.*', 'tbl_category_product.category_name', 'tbl_brand.brand_name', 'tbl_category_product.category_image') 
    //         ->where('tbl_product.product_slug', $product_slug)
    //         ->first();

    //     $product_images = [];
    //     if(!empty($details_product->product_images)) {
    //         $product_images = json_decode($details_product->product_images, true); //chuyen json thanh mang 
    //     }   
        
    //     // Lấy các sản phẩm cùng danh mục, loại trừ sản phẩm hiện tại
    //     $related_products = DB::table('tbl_product')
    //     ->where('category_id', $details_product->category_id)
    //     ->where('product_slug', '!=', $product_slug)
    //     ->where('product_status', 1) // Chỉ lấy sản phẩm đang hoạt động
    //     ->select('product_name', 'product_image', 'product_slug', 'product_price')
    //     ->get();

    //         return view('pages.sanpham.show_detail')
    //         ->with('category', $cate_product)
    //         ->with('brand', $brand_product)
    //         ->with('product_details', $details_product)
    //         ->with('related_products', $related_products) // Gửi danh sách sản phẩm liên quan
    //         ->with('product_images', $product_images); // Gửi danh sách ảnh sản phẩm hiện tại
    // }
    public function details_product($product_slug , Request $request){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get(); 

        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_slug',$product_slug)->get();

        foreach($details_product as $key => $value){
            $category_id = $value->category_id;
                //seo 
                $meta_desc = $value->product_desc;
                $meta_keywords = $value->product_slug;
                $meta_title = $value->product_name;
                $url_canonical = $request->url();
                //--seo
            }
       

        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_slug',[$product_slug])->get();


        return view('pages.sanpham.show_details')->with('category',$cate_product)->with('brand',$brand_product)->with('product_details',$details_product)->with('relate',$related_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

    }
    


}
