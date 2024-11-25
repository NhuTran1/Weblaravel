<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Brand;

session_start();

class BrandProduct extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function add_brand_product()
    {
        return view('admin.add_brand_product');
    }

    public function all_brand_product()
    {
        $this->AuthLogin();
        //hàm get: lấy tất cả các dữ liệu trong tbl_brand
        //DB::table: truy vấn trực tiếp tới tbl_brand mà ko thông qua Eloquent model
        // $all_brand_product = DB::table('tbl_brand')
        //                         ->get();
        // // all: ghi dè lên ::table->get
        // $all_brand_product = Brand::all();
        //orderBy :sắp sếp theo id tăng dần, thg kết hợp với .get() or .with() để lấy ỏr xử lí dl
        $all_brand_product = Brand::orderBy('brand_id', 'asc')->get();
        $manage_brand_product = view('admin.all_brand_product')->with('all_brand_product', $all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product', $manage_brand_product);
    }

    public function save_brand_product(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $brand = new Brand();
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_slug = $data['brand_slug'];
        $brand->brand_desc = $data['brand_product_desc'];
        // $brand->brand_image = $data['brand_image'];
        $brand->brand_status = $data['brand_product_status'];

        // Xử lý upload hình ảnh
        $get_image = $request->file('brand_image');

        if ($get_image) {
            // Lấy tên gốc của file
            $get_name_image = $get_image->getClientOriginalName();
            // Lấy tên file không bao gồm phần mở rộng
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            // Tạo tên file mới với phần mở rộng gốc và thêm chuỗi ngẫu nhiên
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

            // Di chuyển file đến thư mục `upload/category`
            $get_image->move('upload/brand', $new_image);

            // Lưu tên file mới vào cơ sở dữ liệu
            $brand->brand_image = $new_image;
        } else {
            $data['brand_image'] = ''; // Nếu không có ảnh, để trống
        }

        $brand->save();

        Session::put('message', "Thêm thương hiệu sản phẩm thành công");
        return Redirect::to('/add-brand-product');
    }

    public function unactive_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)
            ->update(['brand_status' => 1]);
        Session::put('message', 'Không kích hoạt thương hiệu sản phẩm này thành công');
        return Redirect::to('/all-brand-product');
    }

    public function active_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        DB::table(('tbl_brand'))->where('brand_id', $brand_product_id)
            ->update(['brand_status' => 0]);
        Session::put('message', 'Kích hoạt thương hiệu thành công');
        return Redirect::to('/all-brand-product');
    }

    //edit brand
    public function edit_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        $edit_brand_product = Brand::where('brand_id', $brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }

    //cập nhật dữ liệu (thực thi nút 'Cập nhật thương hiệu')
    public function update_brand_product(Request $request, $brand_product_id)
    {
        $this->AuthLogin();
        $data = $request->all();
        $brand = Brand::find($brand_product_id);

        // Cập nhật các thông tin không phải hình ảnh
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_slug = $data['slug_brand_product'];
        $brand->brand_desc = $data['brand_product_desc'];
        $brand->brand_status = $data['brand_product_status'];

        // Xử lý hình ảnh
        $get_image = $request->file('brand_image');
        if ($get_image) {
            // Xóa ảnh cũ nếu tồn tại
            if ($brand->brand_image && file_exists(public_path('upload/brand/' . $brand->brand_image))) {
                unlink(public_path('upload/brand/' . $brand->brand_image));
            }

            // Lấy tên file và lưu ảnh mới
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move(public_path('upload/brand'), $new_image);

            // Cập nhật tên file mới vào cơ sở dữ liệu
            $brand->brand_image = $new_image;
        }

        // Lưu thông tin cập nhật
        $brand->save();

        // Thông báo và chuyển hướng
        Session::put('message', 'Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }


    //Xoa thuong hieu sp
    public function delete_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        // DB::table('tbl_brand')->where('brand_product_id', $brand_product_id)->delete();
        Brand::where('brand_id', $brand_product_id)->delete();
        Session::put('message', 'Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }

    //Cap nhat mau khi kich vao
    public function show_brand_product($slug_brand_product)
    {
        Session::get('active_brand_slug', $slug_brand_product);
        $brand_product = DB::table('tbl_brand')->where('brand_slug', $slug_brand_product)
            ->first();
        return view('pages.home', compact('brand_product'));
    }

    public function show_brand_home(Request $request, $brand_slug) {
        $cate_product = DB::table('tbl_category_product')
                            ->where('category_status', '1')
                            ->orderBy('category_id', 'asc')
                            ->get();
        $brand_product = DB::table('tbl_brand')
                            ->where('brand_status', '1')
                            ->orderBy('brand_id', 'asc')
                            ->get();
                
        $brand_by_id = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
        ->where('tbl_brand.brand_slug', $brand_slug)
        ->select('tbl_product.*', 'tbl_category_product.category_name', 'tbl_product.product_slug', 'tbl_brand.brand_name')
        ->get();

         // Lưu slug danh mục hiện tại vào Session để sử dụng trong View
        Session::put('active_brand_slug', $brand_slug);

        return view('pages.brand.show_brand')
        ->with('brand_by_id', $brand_by_id)
        ->with('category', $cate_product)
        ->with('brand', $brand_product);
        
    }   

    public function filter_brand_price(Request $request ,$brand_slug, $order) {
        $cate_product = DB::table('tbl_category_product')
                            ->where('category_status', '1')
                            ->orderBy('category_id', 'asc')
                            ->get();
        $brand_product = DB::table('tbl_brand')
                            ->where('brand_status', '1')
                            ->orderBy('brand_id', 'asc')
                            ->get();

        
        // $orderDirect = ($order == 'hight-to-low') ? 'desc' : 'asc';
        $orderdirect = ($order == 'hight_to_low') ? 'desc' : 'asc';

        $category_by_id = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
        ->where('tbl_brand.brand_slug', $brand_slug)
        ->select('tbl_product.*', 'tbl_category_product.category_name', 'tbl_brand.brand_slug', 'tbl_brand.brand_name')
        ->orderBy('product_price', $orderdirect)
        ->get();

         // Lưu slug danh mục hiện tại vào Session để sử dụng trong View
        Session::put('active_brand_slug', $brand_slug);

        return view('pages.category.show_category', [
            'category_by_id' => $category_by_id,
            'category' => $cate_product,
            'brand' => $brand_product,
            'active_brand_slug' => $brand_slug, // Truyền biến slug vào view
        ]);
        
    }      
}
