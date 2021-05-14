<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller',['except'=>['logout']]);

    }
    public function dashboard(){
        return view('Seller.dashboard');
    }
}