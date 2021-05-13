<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Brick\Math\Exception\NegativeNumberException;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function generateSKU()
    {
        $number=mt_rand(1,999999);
        if ($this->checkSKU($number)){
            return $this->generateSKU();
        }
        return (string)$number;
    }
    public function checkSKU($number)
    {
        return Product::where('sku',$number)->exists();
    }
    public function uploadPhoto(PhotoRequest $request){
        $idphoto=$this->generateSKU();
        $image=$request->file('photoDouc');
        $newName=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("image/sellerDouc/".Carbon::now()->year),$newName);
        $photoNew=new Photo();
        $photoNew->id=$idphoto;

    }
}
