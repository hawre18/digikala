<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('Users.index');
    }
    public function cart(){
        return view('Users.cart');
    }
    public function cart_empty(){
        return view('Users.cart-empty');
    }
    public function comment(){
        return view('Users.comment');
    }
    public function failed(){
        return view('Users.failed');
    }
    public function login(){
        return view('Users.login');
    }
    public function payment(){
        return view('Users.payment');
    }
    public function product(){
        return view('Users.product');
    }
    public function product_out(){
        return view('Users.product-out');
    }
    public function register(){
        return view('Users.register');
    }
    public function search(){
        return view('Users.search');
    }
    public function shipping(){
        return view('Users.shipping');
    }
    public function success(){
        return view('Users.success');
    }
}
