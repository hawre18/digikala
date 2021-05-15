<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Brick\Math\Exception\NegativeNumberException;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    public function uploadPhoto(Request $request){
        $uploadedFile=$request->file('file');
        $filename=time().$uploadedFile->getClientOriginalName();
        $original_name=$uploadedFile->getClientOriginalName();
        Storage::disk('local')->putFileas(
            'public/'.Carbon::now()->year.'/sellers/photos/documents',$uploadedFile,$filename
        );
        $photo=new Photo();
        $photo->originalName=$original_name;
        $photo->path=$filename;
        $photo->save();
        return response()->json([
            'photo_id'=>$photo->id
        ]);


    }
    public function uploadPhotoBrand(Request $request){
        $uploadedFile=$request->file('file');
        $filename=time().$uploadedFile->getClientOriginalName();
        $original_name=$uploadedFile->getClientOriginalName();
        Storage::disk('local')->putFileas(
            'public/'.Carbon::now()->year.'/Brands/photos',$uploadedFile,$filename
        );
        $photo=new Photo();
        $photo->originalName=$original_name;
        $photo->path=$filename;
        $photo->save();
        return response()->json([
            'photo_id'=>$photo->id
        ]);


    }
}
