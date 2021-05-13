<?php

namespace App\Http\Controllers\auth\Seller;

use App\Http\Controllers\Controller;
use App\Models\Regcopy;
use App\Models\Seller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SellerRegisterMail;

class RegisterController extends Controller
{

   public function register(){
       return view('auth.seller.register');
   }

   public function senderCode(Request $request)
   {

        $data=array(
            'random'=>$request->random,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->password,
            );
        $rand=$request->random;
        $seller=new Seller();
        $seller->sellerCode=$rand;
        $seller->save();
        $regCopy=new Regcopy();
       $regCopy->seller_id=$rand;
       $regCopy->email=$request->email;
       $regCopy->password=$request->password;
       $regCopy->phone=$request->phone;
       $regCopy->registerCode=$rand;
       $regCopy->save();
       $email=$request->email;
        Mail::to('hawremi18@gmail.com')->send(new SellerRegisterMail(
            $data
        ));
       return view('auth.seller.codeAccept',compact('email'));

    }
    public function codeAccept(Request $request){
       try{
           $code=$request->numberOne.$request->numberTow.$request->numberThree.$request->numberFour;
           if(count(array(Regcopy::where('registerCode',$code)->where('email',$request->email)))>0){
               $seller=Regcopy::where('registerCode',$code)->where('email',$request->email)->get();
               $sell=Seller::where('sellerCode',$code)->get();
               foreach ($seller as $sell1){
                   $sell2=Seller::where('sellerCode',$code)->first();
                   $sell2->email=$sell1->email;
                   $sell2->password=$sell1->password;
                   $sell2->phone=$sell1->phone;
                   $sell2->save();
                   return view('auth.seller.documentsSend',compact('code'));
               }
           }
       }catch (\Exception $e){
           return $e;
       }


    }

}
