<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('pages.home');   //web.php xog index vao return trang pages vaf load home
    }
}
