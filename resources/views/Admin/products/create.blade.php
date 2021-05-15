@extends('Admin.master')
@section('content')
    <section id="app" class="content" style="direction: rtl">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد محصول جدید</h3>
                </div>
            <div class="box-body">
                @include('Admin.errors')
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="\admin\products">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام محصول</label>
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="نام محصول">
                            </div>
                            <div class="form-group">
                                <label for="slug">نام مستعار محصول</label>
                                <input type="text" name="slug" class="form-control" value="{{old('slug')}}" placeholder="نام مستعار محصول">
                            </div>
                            <attribute-component :brands="{{$brands}}"></attribute-component>
                            <div>
                                <label >وضعیت نشر</label>
                                <div>
                                    <input type="radio" name="status" value="0" ><span>منتشر نشده</span>
                                    <input type="radio" name="status" value="1" ><span>منتشر شده</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >قیمت</label>
                                <input type="number" name="price" class="form-control" value="{{old('price')}}" placeholder="قیمت محصول">
                            </div>
                            <div class="form-group">
                                <label >قیمت ویژه</label>
                                <input type="number" name="discount_price" class="form-control" value="{{old('discount_price')}}" placeholder="قیمت ویژه محصول">
                            </div>
                            <div class="form-group">
                                <label >توضیحات کوتاه</label>
                                <textarea id="ShortDescription" name="short_description" class="form-control" >{{old('shortDescription')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label >توضیحات اصلی</label>
                                <textarea  id="longDescription" name="long_description" class="form-control" >{{old('longDescription')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">گالری تصاویر</label>
                                <input type="hidden" name="photo_id[]" id="product-photo">
                                <div id="photo" class="dropzone" ></div>
                                <div class="=row">
                                </div>
                            </div>
                            <div class="form-group">
                                <label >توضیحات سئو</label>
                                <input type="text" name="meta_desc" class="form-control" value="{{old('meta_desc')}}" placeholder="توضیحات سئو">
                            </div>
                            <div class="form-group">
                                <label >عنوان سئو</label>
                                <input type="text" name="meta_title" class="form-control" value="{{old('meta_title')}}" placeholder="عنوان سئو">
                            </div>
                            <div class="form-group">
                                <label >کلمات کلیدی</label>
                                <input type="text" name="meta_keywords" class="form-control" value="{{old('meta_keywords')}}" placeholder="کلمات کلیدی سئو">
                            </div>
                            <button type="submit" onclick="productGallery()" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

