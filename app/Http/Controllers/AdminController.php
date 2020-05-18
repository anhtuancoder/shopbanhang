<?php

namespace App\Http\Controllers;
//trang controller de sxu ly code va su kien
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }
     public function show_dashboard(){
    	return view('admin.dashboard');     //vao admin xong nhan trang dashboard
    }
    public function dashboard(Request $request){
    	$admin_email = $request->admin_email;
    	$admin_password = md5($request->admin_password);

    	$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
    	if($result){
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id',$result->admin_id);
    		return Redirect::to('/dashboard');  // neeus dung se lay thong tin va tra ve trang dashboard
    	}// neu ngdung nhap sai
    	else{
    		Session::put('message','Mật Khẩu hoặc tài khoản bị sai. hãy đăng nhập lại!');
    		return Redirect::to('/admin'); // neu sai se tro ve trang admin_password
    	}
    }
    public function logout(){
    	Session::put('admin_name',null);
    	Session::put('admin_id',null);
    	return Redirect::to('/admin');  // huong den trang admin (redirect)
    }
}
