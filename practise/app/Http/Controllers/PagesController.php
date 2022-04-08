<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Trang chủ
    public function changes(){
        $stt=1;
        $title='Nhom5';
        return view('index',compact('title','stt'));
    }

    public function index(){
        
        return view('index');
    }
    //Giới thiệu
    public function about(){
        return view('about');
    }
    //Đăng nhập
    public function login(){
        return view('login');
    }
    //Đăng ký
    public function register(){
        return view('register');
    }

   
   
}
