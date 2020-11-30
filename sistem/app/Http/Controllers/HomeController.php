<?php

namespace App\Http\Controllers;
use Auth;
class HomeController extends Controller {

		function showBase(){
			return view('base');
		}

		function showBlog(){
			return view('blog');
		}
		function showSign(){
			return view('sign');
		}
		function showLoginadmin(){
			return view('loginadmin');
		}
		function showCreate(){
			return view('user.create');
		}
		function showProduct(){
			return view('product');
		}
		function showUser(){
			return view('user');
		}
		function showData(){
			return view('admin.data');
		}
		function showBeranda(){
			return view('base');
		}
		function loginProcess(){
			if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('data');
			} else {
				return back();
			}
		}
}