<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SellerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:seller',['except'=>['logout']]);

    }
    public function showLoginForm()
    {
        return view('Seller.auth.sellerLogin');
    }

    public function login(Request $request)
    {


        if (Auth::guard('seller')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('seller.dashboard'));
        }
        else{
            return redirect()->back()->withInput($request->only('email','remember'));}
    }

    public function logout()
    {
        Auth::guard('seller')->logout();
        return redirect('/loginform');
    }
}
