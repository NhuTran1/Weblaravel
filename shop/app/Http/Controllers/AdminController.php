<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index() {
        return view('admin_login');
    }

    public function show_dashboard() {
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)
                                        ->where('admin_password', $admin_password)
                                        ->first();

        if($result){
            // nếu có bản ghi khớp với database, lưu thông tin vào session và chuyển hương đến trang dashboard
            // ::put : lưu 
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return view('admin.dashboard');
        } else {
            Session::put('message', 'Password or email is incorrect, please re-enter');
            return Redirect::to('/admin');
        }
        
    }

    public function logout() {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }

    //hàm xác thực trạng thái hiện tại của trang
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        } else{
            return Redirect::to('admin')->send();
        }
    }
}
